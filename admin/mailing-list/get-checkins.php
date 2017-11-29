<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/database.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/response.php");

$sqlData = "Email, Time";
$sql = "SELECT {$sqlData} FROM CodeAndChillSessions ORDER BY Time DESC";

$result = $connection->query($sql);

if ($result && $result->num_rows > 0)
{
    while ($entry = $result->fetch_assoc())
    {
        $email = $entry["Email"];
        $checkinTime = new DateTime($entry["Time"]);
        
        $checkinTime = $checkinTime->format("d/m/Y H:i:s");
        
        echo "<tr><td>${email}</td><td>${checkinTime}</td></tr>";
    }
}

?>