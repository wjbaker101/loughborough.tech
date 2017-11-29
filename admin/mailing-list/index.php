<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TechSoc Admin | Mailing List</title>
        
        <?php displayHead(); ?>
        
        <style>
            th.time-col
            {
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="vpadding-large">
            <div class="content-width hpadding-small">
                <section class="section text-centered">
                    <h1>Mailing List</h1>
                </section>
                <section class="section text-centered">
                    <p>Here is the list of all emails people have checked in with.</p>
                </section>
                <section class="section">
                    <table>
                        <thead>
                            <th>Email</th>
                            <th class="time-col">Time</th>
                        </thead>
                        <tbody>
                            <?php include ('get-checkins.php'); ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </body>
</html>