<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session Two, 25-10-2017</title>
        
        <meta name="description" content="Continue learning about HTML and CSS or introduce yourself to Node.js. Session Two of Code and Chill, 25-10-2017.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style></style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="text-centered"><img src="/resources/images/branding/code-and-chill-red.png" height="150"></h1>
        <div class="content-width hpadding-small text-centered">
            <h2>Session Two</h2>
            <p><small>WED, 25th OCT 2017</small></p>
            <a href="/code-and-chill/"><button>&larr; Return to Code and Chill</button></a>
        </div>
        <div class="content-width column-container vpadding-mid">
            <div class="column l6 m12 hpadding-small">
                <h2 class="underlined">Beginners Topic</h2>
                <div class="card">
                    <div class="card-content padding-small">
                        <h3>What You'll Do</h3>
                        <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                        <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                    </div>
                    <div class="card-content padding-small">
                        <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B79kOzBclpj-TndwSU5ZNFZYRXM" target="_blank" rel="noopener noreferrer">here</a>!</p>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Helpful Resources</h3>
                        <ul>
                            <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank" rel="noopener noreferrer">w3schools HTML Reference</a></li>
                            <li><a class="page-link-underline" href="https://www.w3schools.com/css/" target="_blank" rel="noopener noreferrer">w3schools CSS Reference</a></li>
                            <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">Mozilla Developer Network (HTML)</a></li>
                            <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">Mozilla Developer Network (CSS)</a></li>
                            <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank" rel="noopener noreferrer">Codecademy Make-a-Website Course</a></li>
                            <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank" rel="noopener noreferrer">Codecademy HTML and CSS Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column l6 m12 hpadding-small">
                <h2 class="underlined">Advanced Topic</h2>
                <div class="card">
                    <div class="card-content padding-small">
                        <h3>What You'll Do</h3>
                        <p>Node.js is a runtime environment that uses JavaScript to execute code from the server side.</p>
                    </div>
                    <div class="card-content padding-small">
                        <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B9CDy1rp7c80LVBHdVRZX1FoNlE" target="_blank" rel="noopener noreferrer">here</a>!</p>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Installation</h3>
                        <ol>
                            <li>Visit the Node.js website <a class="page-link-underline" href="https://nodejs.org/en/download/" target="_blank" rel="noopener noreferrer">here</a>!</li>
                            <li>Download the LTS version of Node for your relevant operating system.</li>
                            <li>Open a terminal and run "<code>node -v</code>" to make sure it has installed correctly.</li>
                        </ol>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Helpful Resources</h3>
                        <ul>
                            <li><a class="page-link-underline" href="https://nodejs.org/en/" target="_blank" rel="noopener noreferrer">Node.js Website</a></li>
                            <li><a class="page-link-underline" href="https://www.w3schools.com/nodejs/default.asp" target="_blank" rel="noopener noreferrer">Node.js on w3schools</a></li>
                            <li><a class="page-link-underline" href="https://www.npmjs.com/" target="_blank" rel="noopener noreferrer">npm Website</a></li>
                        </ul>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Further Reading</h3>
                        <ul>
                            <li><a class="page-link-underline" href="https://expressjs.com/" target="_blank" rel="noopener noreferrer">Express JS</a></li>
                            <li><a class="page-link-underline" href="https://github.com/GoogleChrome/puppeteer" target="_blank" rel="noopener noreferrer">Headless Chrome Library</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>