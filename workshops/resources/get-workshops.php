<?php

function createWorkshop($title, $date, $alias, $image)
{
    return (object)
    [
        'title' => $title,
        'eventDate' => new DateTime($date),
        'alias' => $alias,
        'image' => $image,
    ];
}

$workshops = array
(
    createWorkshop('Hacking with Amazon Alexa', '2017-10-21 16:00:00', 'amazon-alexa', 'amazon-alexa.png'),
    createWorkshop('Building Scalable Apps with CockroachDB', '2017-11-22 16:00:00', 'cockroachdb', 'cockroachdb.png'),
    createWorkshop('An introduction to Git and GitHub', '2017-12-02 16:00:00', 'github', 'github.jpg'),
    createWorkshop('Building an Android App', '2017-10-21 16:00:00', 'android', 'android.png'),
    createWorkshop('Introduction to Docker', '2017-10-21 16:00:00', 'docker', 'docker.png'),
    createWorkshop('Coursework Crash Course', '2017-10-21 16:00:00', 'coursework-crash-course', 'html5.svg'),
);

$count = 0;

echo '<div class="column-container">';

foreach ($workshops as $workshop)
{
    if ($count !== 0 && $count % 3 === 0)
    {
        echo '</div>';
        echo '<div class="column-container">';
    }
    
    include('workshop-component.php');
    
    $count ++;
}

echo '</div>';

?>