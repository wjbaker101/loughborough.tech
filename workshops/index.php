<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Workshops</title>
        
        <meta name="description" content="View descriptions, resources and photos of past TechSoc hosted workshops.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .workshops-container img
            {
                height: 150px;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Workshops</h1>
        <div class="workshops-container content-width hpadding-small vpadding-mid">
            <?php include('resources/get-workshops.php'); ?>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>