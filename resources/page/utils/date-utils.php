<?php

function formatDate($date)
{
    $first = $date->format('D, j');
    $first = strtoupper($first);
    
    $second = $date->format(' M Y');
    $second = strtoupper($second);
    
    return $first . $date->format('S') . $second;
}

?>