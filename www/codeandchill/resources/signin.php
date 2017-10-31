<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/page/response.php');

function echoResponse($code, $message, $type)
{
    $response = new Response($code, $message, $type);
    echo json_encode($response);
    exit;
}

if (!isset($_POST['email']) || strlen($_POST['email']) === 0)
{
    echoResponse('failed_email', 'Email cannot be blank.', 'ERROR');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
    echoResponse('failed_email_format', 'Email is not of the correct format.', 'ERROR');
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/page/database.php');

if ($connection->connect_error)
{
    $connection->close();
    echoResponse('failed_database', 'Unable to connect to database.', 'ERROR');
}
else
{
    
    
    $sql = "INSERT INTO CodeAndChillSessions
            (Email, Time)
            VALUES (?, ?)";
    
    if ($prepared = $connection->prepare($sql))
    {
        $date = (new DateTime())->format("Y-m-d H:i:s");
        $sqlEmail = $_POST['email'];
        
        $prepared->bind_param('ss', $sqlEmail, $date);
        
        $prepared->execute();
        
        $prepared->close();
        $connection->close();
        
        $_SESSION["signed"] = TRUE;
        
        echoResponse('success', 'Successfully signed in.', 'SUCCESS');
    }
    else
    {
        $connection->close();
        echoResponse('failed_query', 'Unable to query.', 'ERROR');
    }
}

?>