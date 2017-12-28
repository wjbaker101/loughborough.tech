<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Events</title>
        
        <meta name="description" content="Past and future events hosted by the Loughborough Technology Society.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .events-container img
            {
                max-height: 150px;
            }
            
            .events-container .past
            {
                opacity: 0.2;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Society Events</h1>
        <div class="events-container content-width hpadding-small vpadding-mid">
            <?php include('resources/get-events.php'); ?>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>