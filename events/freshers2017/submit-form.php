<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/page/response.php');

function echoResponse($code, $message, $type)
{
    $response = new Response($code, $message, $type);
    echo json_encode($response);
    exit;
}

if (!isset($_POST['firstname']) || strlen($_POST['firstname']) === 0)
{
    echoResponse('failed_firstname', 'First name cannot be blank.', 'ERROR');
}

if (!isset($_POST['surname']) || strlen($_POST['surname']) === 0)
{
    echoResponse('failed_surname', 'Surname cannot be blank.', 'ERROR');
}

if (!isset($_POST['email']) || strlen($_POST['email']) === 0)
{
    echoResponse('failed_email', 'Email cannot be blank.', 'ERROR');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
    echoResponse('failed_email_format', 'Email is not of the correct format.', 'ERROR');
}

if (!isset($_POST['pastexpchecked']) || ($_POST['pastexpchecked'] !== '1' && $_POST['pastexpchecked'] !== '0'))
{
    echoResponse('failed_pastexpchecked', 'Must have a checkbox checked for past experience.', 'ERROR');
}

if (!isset($_POST['longprojectchecked']) || ($_POST['longprojectchecked'] !== '1' && $_POST['longprojectchecked'] !== '0'))
{
    echoResponse('failed_longproject', 'Must have a checkbox checked for long project interest.', 'ERROR');
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/page/database.php');

if ($connection->connect_error)
{
    $connection->close();
    echoResponse('failed_database', 'Unable to connect to database.', 'ERROR');
}
else
{
    $sql = "INSERT INTO Freshers2017
            (FirstName, Surname, Email, PastExperienceChecked, LongProjectChecked)
            VALUES (?, ?, ?, ?, ?)";
    
    if ($prepared = $connection->prepare($sql))
    {
        $sqlFirstName = $_POST['firstname'];
        $sqlSurname = $_POST['surname'];
        $sqlEmail = $_POST['email'];
        $sqlPastExp = $_POST['pastexpchecked'];
        $sqlLongProject = $_POST['longprojectchecked'];
        
        $prepared->bind_param('sssii', $sqlFirstName, $sqlSurname, $sqlEmail, $sqlPastExp, $sqlLongProject);
        
        $prepared->execute();
        
        $prepared->close();
        $connection->close();
        
        echoResponse('success', 'Successfully submitted form.', 'SUCCESS');
    }
    else
    {
        $connection->close();
        echoResponse('failed_query', 'Unable to query.', 'ERROR');
    }
}

?>