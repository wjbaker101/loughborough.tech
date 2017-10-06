<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Events</title>
        
        <?php displayHead(); ?>
        
        <style>
            .events-container
            {
                max-width: 1024px;
                margin: 0 auto;
            }
            
            .events-container article
            {
                padding: 3em 2em;
                margin: 0 auto;
            }
            
            .events-container article .valign
            {
                width: 100%;
                display: table;
            }
            
            .events-container article .valign .content
            {
                display: table-cell;
                vertical-align: middle;
            }
            
            .events-container article .valign .container .content
            {
                padding-right: 2em;
            }
            
            .events-container article .valign .content.right
            {
                text-align: right;
            }
            
            .events-container article.past
            {
                opacity: 0.25;
            }
            
            .events-container article::after
            {
                content: '';
                display: table;
                clear: both;
            }
            
            .events-container article .info span
            {
                display: block;
            }
            
            .events-container article .info span.category
            {
                display: inline;
                vertical-align: middle;
                padding: 0.3em;
                border: 2px solid #4ac0de;
                font-weight: bold;
                font-size: 0.6em;
                text-transform: uppercase;
                text-shadow: none;
            }
            
            .events-container article .info span.title
            {
                margin-bottom: 0.75em;
                font-size: 1.5em;
                transition: text-shadow 0.25s;
            }
            
            .events-container article .info span.title .text
            {
                display: inline;
                vertical-align: middle;
            }
            
            .events-container article .info span.location
            {
                font-size: 0.85em;
            }
            
            .events-container article .info span.date
            {
                font-weight: bold;
            }
            
            @media screen and (max-width: 720px)
            {
                .events-container article .valign .content
                {
                    display: block;
                    margin-bottom: 2em;
                }
                
                .events-container article .valign .container .content
                {
                    padding-right: 0;
                }
                
                .events-container article .valign .content.right
                {
                    text-align: center;
                    margin-bottom: 0;
                }
            }
        </style>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section">
                    <h1 class="text-centered">Society Events</h1>
                </section>
                <section class="events-container section vpadding-mid">
                    <?php
                        
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/page/database.php');
                        
                        if (!$connection) return;
                        
                        $sql = "SELECT * FROM Events, Buildings WHERE Events.BuildingID=Buildings.BuildingID ORDER BY StartDate DESC";
                        
                        $query = $connection->query($sql);
                        
                        if (!$query) return;
                        
                        while($result = $query->fetch_assoc())
                        {
                            $date = (new DateTime($result["EndDate"]) < new DateTime()) ? "past" : "";
                            
                            echo '<article class="' . $date . '">
                                    <div class="valign">
                                        <div class="container">
                                            <div class="content">
                                                <div class="info">
                                                    <span class="date">' . formatDate(new DateTime($result["StartDate"]), new DateTime($result["EndDate"])) . '</span>
                                                    <span class="time">' . formatTime(new DateTime($result["StartDate"]), new DateTime($result["EndDate"])) . '</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="info">
                                                    <span class="title"><span class="category">' . $result["Category"] . '</span> <span class="text">' . $result["Title"] . '</span></span>
                                                    <a class="page-link-underline" href="https://maps.lboro.ac.uk/?l=' . $result["MapUrl"] . '" target="_blank"><span class="location">' . $result["Name"] . ' ' . $result["RoomNumber"] . '</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>';
                        }
                        
                        function formatTime($dateTime1, $dateTime2)
                        {
                            return $dateTime1->format("H:i") . " - " . $dateTime2->format("H:i");
                        }
                        
                        function formatDate($dateTime1, $dateTime2)
                        {
                            if ($dateTime1->format("dmY") === $dateTime2->format("dmY"))
                            {
                                return strtoupper($dateTime1->format("D, ")) . $dateTime1->format("jS ") . strtoupper($dateTime1->format("M Y"));
                            }
                        }
                        
                        ?>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>