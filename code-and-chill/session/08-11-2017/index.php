<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session Three, 08-11-2017</title>
        
        <meta name="description" content="Continue learning about HTML and CSS or introduce yourself to AngularJS. Session Three of Code and Chill, 08-11-2017.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .beginners-text
            {
                color: #449826;
            }
            
            .advanced-text
            {
                color: #d11f26;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Session Three</h1>
        <div class="bordered-section vpadding-mid">
            <div class="content-width card bg-white">
                <div class="card-content cell-row vpadding-regular">
                    <div class="v-card-content cell l3 s12 cell-middle padding-small text-centered">
                        <img src="/resources/images/branding/code-and-chill-red.png" width="150">
                    </div>
                    <div class="v-card-content cell l9 s12 hpadding-small">
                        <p><small>WED, 08th NOV 2017</small></p>
                        <p>View information, resources, helpful tips on the topics covered in this Code and Chill session.</p>
                        <p>Below you will find content for the beginner and advanced topics.</p>
                    </div>
                </div>
                <div class="card-content">
                    <p class="text-right hpadding-small"><a href="/code-and-chill/"><button>&larr; Return to Code and Chill</button></a></p>
                </div>
            </div>
        </div>
        <div class="content-text-width card-content vpadding-regular">
            <h1 class="beginners-text">
                <img src="/resources/images/technologies/javascript.jpg" height="60">
                <span class="cell-middle">Beginners Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
            <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
            <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B79kOzBclpj-TndwSU5ZNFZYRXM" target="_blank" rel="noopener noreferrer">here</a>!</p>
            <h2>Helpful Resources</h2>
            <ul>
                <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank" rel="noopener noreferrer">w3schools HTML Reference</a></li>
                <li><a class="page-link-underline" href="https://www.w3schools.com/css/" target="_blank" rel="noopener noreferrer">w3schools CSS Reference</a></li>
                <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">Mozilla Developer Network (HTML)</a></li>
                <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">Mozilla Developer Network (CSS)</a></li>
                <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank" rel="noopener noreferrer">Codecademy Make-a-Website Course</a></li>
                <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank" rel="noopener noreferrer">Codecademy HTML and CSS Courses</a></li>
            </ul>
        </div>
        <div class="content-text-width card-content vpadding-regular">
            <h1 class="advanced-text">
                <img src="/resources/images/technologies/angularjs.svg" height="60">
                <span class="cell-middle">Advanced Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>AngularJS (v1) is a JavaScript-based front-end web application framework mainly maintained by Google.</p>
            <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=1pkKE7Cw_o-3PvwS5kkpVMU2Upffxcx8J" target="_blank" rel="noopener noreferrer">here</a>!</p>
            <h2>Installation</h2>
            <ol>
                <li>Visit the Node.js website <a class="page-link-underline" href="https://nodejs.org/en/download/" target="_blank" rel="noopener noreferrer">here</a>!</li>
                <li>Download the LTS version of Node for your relevant operating system.</li>
                <li>Open a terminal and run "<code>node -v</code>" to make sure it has installed correctly.</li>
            </ol>
            <h2>Helpful Resources</h2>
            <ul>
                <li><a class="page-link-underline" href="https://drive.google.com/open?id=1Vofr1GTawYUkPdJPVN4zmjbrojoJj-o9" target="_blank" rel="noopener noreferrer">Our AngularJS Template</a></li>
                <li><a class="page-link-underline" href="https://angularjs.org/" target="_blank" rel="noopener noreferrer">AngularJS Website</a></li>
                <li><a class="page-link-underline" href="https://docs.angularjs.org/api/ng/directive" target="_blank" rel="noopener noreferrer">AngularJS Documentation</a></li>
            </ul>
            <h2>Further Reading</h2>
            <ul>
                <li><a class="page-link-underline" href="http://angular.io/" target="_blank" rel="noopener noreferrer">Angular</a> (v2)</li>
            </ul>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>