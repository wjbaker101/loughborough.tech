<?php

require_once(ROOT . '/resources/page/utils/date-utils.php');

function createWorkshop($title, $date, $alias, $image, $url)
{
    return (object)
    [
        'title' => $title,
        'eventDate' => new DateTime($date),
        'alias' => $alias,
        'image' => $image,
        'url' => $url,
    ];
}

$workshops = array
(
    createWorkshop('Hacking with Amazon Alexa', '2017-10-21 16:00:00', 'amazon-alexa', 'amazon-alexa.png', '/workshop/hacking-with-amazon-alexa/'),
    createWorkshop('Building Scalable Apps with CockroachDB', '2017-11-22 16:00:00', 'cockroachdb', 'cockroachdb.png', '/workshop/building-scalable-apps-with-cockroachdb/'),
    createWorkshop('An introduction to Git and GitHub', '2017-12-02 16:00:00', 'github', 'github.jpg', '/workshop/intro-to-git-and-github/'),
    createWorkshop('Building an Android App', '2017-10-21 16:00:00', 'android', 'android.png', '/workshop/building-an-android-app/'),
    createWorkshop('Introduction to Docker', '2017-10-21 16:00:00', 'docker', 'docker.png', '/workshop/intro-to-docker/'),
    createWorkshop('Coursework Crash Course', '2017-10-21 16:00:00', 'coursework-crash-course', 'html5.svg', '/workshop/coursework-crash-course/'),
);

$count = 0;

echo '<div class="column-container">';

foreach ($workshops as $workshop)
{
    if ($count !== 0 && $count % 3 === 0) echo '</div><div class="column-container">';
    
    include('workshop-component.php');
    
    $count ++;
}

echo '</div>';

?>