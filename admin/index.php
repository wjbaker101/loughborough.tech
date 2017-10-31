<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Loughborough TechSoc | Admin Login</title>
        
        <?php displayHead(); ?>
        
        <style>
        </style>
        
        <script>
            window.addEventListener('load', () =>
            {
                const loginButton = document.querySelector('.login-button');
                
                loginButton.addEventListener('click', () =>
                {
                    
                });
            });
        </script>
    </head>
    <body>
        <header>
            <div class="content-width hpadding-small vpadding-regular">
                <h1>TechSoc Admin</h1>
            </div>
        </header>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section text-centered">
                    <h1>Log In</h1>
                </section>
                <section class="section text-centered">
                    <p>Please enter a valid username and password.</p>
                </section>
                <section class="section text-centered">
                    <p><input type="text" placeholder="username..."></p>
                    <p><input type="text" placeholder="password..."></p>
                    <p><button class="login-button">Log In</button></p>
                    <p class="message-output"></p>
                </section>
            </div>
        </div>
    </body>
</html>