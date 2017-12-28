<?php

function createWorkshop($title, $date, $alias, $image)
{
    return (object)['title' => $title, 'eventDate' => $date, 'alias' => $alias, 'image' => $image];
}

$workshops = array
(
    createWorkshop('Hacking with Amazon Alexa', '21/10/2017', 'amazon-alexa', 'amazon-alexa.png'),
    createWorkshop('Building Scalable Apps with CockroachDB', '22/11/2017', 'cockroachdb', 'cockroachdb.png'),
    createWorkshop('An introduction to Git and GitHub', '02/12/2017', 'github', 'github.jpg'),
    createWorkshop('Building an Android App', '02/12/2017', 'android', 'android.png'),
    createWorkshop('Introduction to Docker', '02/12/2017', 'docker', 'docker.png'),
    createWorkshop('Coursework Crash Course', '02/12/2017', 'coursework-crash-course', 'html5.svg'),
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