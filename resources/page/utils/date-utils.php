<?php

function formatDate($date)
{
    $first = $date->format('D, j');
    $first = strtoupper($first);
    
    $second = $date->format(' M Y');
    $second = strtoupper($second);
    
    return $first . $date->format('S') . $second;
}

function formatTime($date)
{
    $hour = intval($date->format('h'));
    
    $minutes = intval($date->format('i'));
    
    $formatted = $hour;
    
    if ($minutes > 0) $formatted .= ':' . $minutes;
    
    $formatted .= $date->format('a');
    
    return $formatted;
}

?>