<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/utils/database.php");

if (!$connection)
{
    echo '<p class="text-centered">We were unable to connect to the database.</p>';
    echo '<p class="text-centered">Please refresh to try again.</p>';
    return;
}

$now = (new DateTime())->format('Y-m-d H:m:i');
$sqlData = "Title, StartDate, EndDate, Category, EventURL, Description, ImageFileLocation, FacebookURL, Events.BuildingID, MapUrl, RoomNumber, Name";
$sql = "SELECT {$sqlData} FROM Events LEFT JOIN Buildings ON (Events.BuildingID = Buildings.BuildingID) WHERE (EndDate > '{$now}') ORDER BY EndDate ASC";

$result = $connection->query($sql);

if (!$result || $result->num_rows === 0)
{
    echo '<p class="text-centered">We were unable to query the database.</p>';
    echo '<p class="text-centered">Please refresh to try again.</p>';
    return;
}

displayEvents($result, '');

$sql = "SELECT {$sqlData} FROM Events LEFT JOIN Buildings ON (Events.BuildingID = Buildings.BuildingID) WHERE (EndDate < '{$now}') ORDER BY EndDate DESC";

$result = $connection->query($sql);

if (!$result || $result->num_rows === 0)
{
    echo '<p class="text-centered">We were unable to query the database.</p>';
    echo '<p class="text-centered">Please refresh to try again.</p>';
    return;
}

require_once(ROOT . '/resources/page/utils/date-utils.php');

displayEvents($result, ' past');

$connection->close();

function displayEvents($result, $past)
{
    $count = 0;
    
    while ($event = $result->fetch_assoc())
    {
        $eventDate = getDateDisplay($event['StartDate']);

        $eventLocation = getLocationDisplay($event);

        $eventImage = "/resources/images/events/{$event['ImageFileLocation']}";

        if (!file_exists(ROOT . $eventImage))
        {
            $eventImage = '/resources/images/events/default.jpg';
        }
        
        if ($count % 2 === 0) echo '<div class="column-container">';

        include('event-component.php');

        if ($count % 2 !== 0 || $count + 1 === $result->num_rows) echo '</div>';

        $count ++;
    }
}

function getDateDisplay($date)
{
    if ($date === '9999-01-01 00:00:00')
    {
        return '<strong>Date:</strong> TBC';
    }
    else
    {
        return formatDate(new DateTime($date)); 
    }
}

function getLocationDisplay($event)
{
    if ($event['BuildingID'] === '5' || $event['BuildingID'] === null)
    {
        return '<strong>Location:</strong> TBC';
    }
    else
    {
        return "<a class=\"page-link-underline\" href=\"https://maps.lboro.ac.uk/?l={$event['MapUrl']}\" target=\"_blank\" rel=\"noopener noreferrer\">{$event['Name']} {$event['RoomNumber']}</a>";
    }
}

?>