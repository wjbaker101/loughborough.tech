<?php

function formatDate($date)
{
    $first = $date->format('D, j');
    $first = strtoupper($first);
    
    $second = $date->format(' M Y');
    $second = strtoupper($second);
    
    return $first . $date->format('S') . $second;
}

function createTopic($image, $title)
{
    $topic = (object)
    [
        'title' => $title,
        'image' => $image
    ];
    
    return $topic;
}

function createSession($title, $date, $beginnersImage, $advancedImage, $beginnersTitle, $advancedTitle)
{
    $session = (object)
    [
        'title' => $title,
        'date' => new DateTime($date),
        'beginners' => createTopic($beginnersImage, $beginnersTitle),
        'advanced' => createTopic($advancedImage, $advancedTitle)
    ];
    
    return $session;
}

$sessions = array
(
    createSession('Session One', '2017-10-11 16:00:00', 'html5.svg', 'sass.svg', 'HTML and CSS<br><small>Part 1</small>', 'CSS and SASS'),
    createSession('Session Two', '2017-10-25 16:00:00', 'html5.svg', 'nodejs.png', 'HTML and CSS<br><small>Part 2</small>', 'Node.js'),
    createSession('Session Three', '2017-11-08 16:00:00', 'html5.svg', 'angularjs.svg', 'HTML and CSS<br><small>Part 3</small>', 'AngularJS'),
    createSession('Session Four', '2017-12-13 16:00:00', 'html5.svg', 'python.svg', 'Coursework Help and JavaScript', 'Python')
);

echo '<div class="column-container">';

$count = 0;

foreach ($sessions as $session)
{
    if ($count !== 0 && $count % 2 === 0) echo '</div><div class="column-container">';
    
    include('session-component.php');
    
    $count++;
}

echo '</div>';

?>