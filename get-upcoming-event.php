<?php

require_once(ROOT . '/resources/page/utils/database.php');

if (!$connection) return;

$now = (new DateTime())->format('Y-m-d H:m:i');

$sqlData = 'Title, StartDate, EndDate, Category, EventURL, Description, ImageFileLocation, FacebookURL, Events.BuildingID, MapUrl, RoomNumber, Name';

$sql = "SELECT {$sqlData} FROM Events LEFT JOIN Buildings ON (Events.BuildingID = Buildings.BuildingID) WHERE (EndDate > '{$now}') AND IsVisible=1 ORDER BY StartDate ASC LIMIT 1";

$result = $connection->query($sql);

if (!$result || $result->num_rows === 0) return;

$event = $result->fetch_assoc();

$connection->close();

$eventDate = getDateDisplay($event['StartDate'], $event['EndDate']);

$eventLocation = getLocationDisplay($event);

$eventImage = "/resources/images/events/{$event['ImageFileLocation']}";

if (!file_exists(ROOT . $eventImage))
{
    $eventImage = '/resources/images/events/default.jpg';
}

function getDateDisplay($startDate, $endDate)
{
    $dateStart = new DateTime($startDate);
    $dateEnd = new DateTime($endDate);
    
    if ($startDate === '9999-01-01 00:00:00')
    {
        return '<strong>Date:</strong> TBC';
    }
    else
    {
        return '<p><small>' . formatDate($dateStart) . '</small></p><p><small>' . formatTime($dateStart) . ' - ' . formatTime($dateEnd) . '</small></p>';
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

<div class="events-container hpadding-small vpadding-mid">
    <h2 class="underlined">Upcoming Event</h2>
    <div class="content-width">
        <div class="column-container">
            <div class="column card-content l3">&nbsp;</div>
            <?php include(ROOT . '/events/resources/event-component.php'); ?>
        </div>
        <p class="text-centered"><a href="/events/"><button>View all Events</button></a></p>
    </div>
</div>