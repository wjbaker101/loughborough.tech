<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/database.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/response.php");

function echoResponse($code, $message, $type)
{
    $response = new Response($code, $message, $type);
    echo json_encode($response);
    exit;
}

if (!$connection)
{
    echoResponse('failed_database', 'Unable to connect to database.', 'ERROR');
}


$now = (new DateTime())->format('Y-m-d H:m:i');
$sqlData = "Title, StartDate, EndDate, Category, Description, ImageFileLocation, MapUrl, RoomNumber, Name";
$sql = "SELECT {$sqlData} FROM Events, Buildings WHERE (Events.BuildingID = Buildings.BuildingID) AND (EndDate > '{$now}') ORDER BY EndDate ASC";

$result = $connection->query($sql);

if ($result && $result->num_rows > 0)
{
    $response = new Response("success", "Events successfully loaded.", "SUCCESS");
    
    while ($event = $result->fetch_assoc())
    {
        $screenshotUrl = "/resources/images/events/{$event['ImageFileLocation']}";
        
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $screenshotUrl))
        {
            $event["ImageFileLocation"] = $screenshotUrl;
        }
        else
        {
            $event["ImageFileLocation"] = '/resources/images/events/default.jpg';
        }
        
        $response->contents['events']['upcoming'][] = $event;
    }
    
    $sql = "SELECT {$sqlData} FROM Events, Buildings WHERE (Events.BuildingID = Buildings.BuildingID) AND (EndDate < '{$now}') ORDER BY EndDate DESC";
    
    $result = $connection->query($sql);
    
    if ($result && $result->num_rows > 0)
    {
        while ($event = $result->fetch_assoc())
        {
            $screenshotUrl = "/resources/images/events/{$event['ImageFileLocation']}";

            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $screenshotUrl))
            {
                $event["ImageFileLocation"] = $screenshotUrl;
            }
            else
            {
                $event["ImageFileLocation"] = '/resources/images/events/default.jpg';
            }

            $response->contents['events']['past'][] = $event;
        }
    }
    
    echo json_encode($response);
}
else
{
    echoResponse('failed_empty', 'No events to display.', 'REGULAR');
}

?>