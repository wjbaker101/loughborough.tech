<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session Two, 25-10-2017</title>
        
        <meta name="description" content="Continue learning about HTML and CSS or introduce yourself to Node.js. Session Two of Code and Chill, 25-10-2017.">
        
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
            
            .img-container
            {
                padding: 0.5rem;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Session Two</h1>
        <div class="bordered-section vpadding-mid">
            <div class="content-width card bg-white">
                <div class="card-content cell-row vpadding-regular">
                    <div class="v-card-content cell l3 s12 cell-middle padding-small text-centered">
                        <img src="/resources/images/branding/code-and-chill-red.png" width="150">
                    </div>
                    <div class="v-card-content cell l9 s12 hpadding-small">
                        <p><small>WED, 25th OCT 2017</small></p>
                        <p>View information, resources, helpful tips on the topics covered in this Code and Chill session.</p>
                        <p>Below you will find content for the beginner and advanced topics.</p>
                        <ul>
                            <li><a class="page-link-underline" href="#beginners-topic">Skip</a> to <span class="beginners-text">Beginners Topic</span></li>
                            <li><a class="page-link-underline" href="#advanced-topic">Skip</a> to <span class="advanced-text">Advanced Topic</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <p class="text-right hpadding-small"><a href="/code-and-chill/"><button>&larr; Return to Code and Chill</button></a></p>
                </div>
            </div>
        </div>
        <div class="content-width vpadding-mid">
            <div class="column-container">
                <div class="column l6 img-container">
                    <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><img class="card card-hover" src="/resources/images/code-and-chill/session-two/introduction.jpg" alt="Introduction to the session." title="Visit our Facebook page for more photos!"></a>
                </div>
                <div class="column l6 img-container">
                    <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><img class="card card-hover" src="/resources/images/code-and-chill/session-two/nodejs.jpg" alt="Part of the Node.js topic." title="Visit our Facebook page for more photos!"></a>
                </div>
            </div>
            <div class="column-container">
                <div class="column l4 img-container">
                    <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><img class="card card-hover" src="/resources/images/code-and-chill/session-two/html.jpg" alt="Part of the HTML and CSS topic." title="Visit our Facebook page for more photos!" width="341"></a>
                </div>
                <div class="column l4 img-container">
                    <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><img class="card card-hover" src="/resources/images/code-and-chill/session-two/trio.jpg" alt="Trio participating the in HTML and CSS topic." title="Visit our Facebook page for more photos!"></a>
                </div>
                <div class="column l4 img-container">
                    <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><img class="card card-hover" src="/resources/images/code-and-chill/session-two/banana.jpg" alt="Banana!" title="Visit our Facebook page for more photos!"></a>
                </div>
            </div>
        </div>
        <div id="beginners-topic" class="content-text-width card-content vpadding-regular">
            <h1 class="beginners-text">
                <img src="/resources/images/technologies/css3.svg" height="60">
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
        <div id="advanced-topic" class="content-text-width card-content vpadding-regular">
            <h1 class="advanced-text">
                <img src="/resources/images/technologies/nodejs.png" height="60">
                <span class="cell-middle">Advanced Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>Node.js is a runtime environment that uses JavaScript to execute code from the server side.</p>
            <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B9CDy1rp7c80LVBHdVRZX1FoNlE" target="_blank" rel="noopener noreferrer">here</a>!</p>
            <h2>Installation</h2>
            <ol>
                <li>Visit the Node.js website <a class="page-link-underline" href="https://nodejs.org/en/download/" target="_blank" rel="noopener noreferrer">here</a>!</li>
                <li>Download the LTS version of Node for your relevant operating system.</li>
                <li>Open a terminal and run "<code>node -v</code>" to make sure it has installed correctly.</li>
            </ol>
            <h2>Helpful Resources</h2>
            <ul>
                <li><a class="page-link-underline" href="https://nodejs.org/en/" target="_blank" rel="noopener noreferrer">Node.js Website</a></li>
                <li><a class="page-link-underline" href="https://www.w3schools.com/nodejs/default.asp" target="_blank" rel="noopener noreferrer">Node.js on w3schools</a></li>
                <li><a class="page-link-underline" href="https://www.npmjs.com/" target="_blank" rel="noopener noreferrer">npm Website</a></li>
            </ul>
            <h2>Further Reading</h2>
            <ul>
                <li><a class="page-link-underline" href="https://expressjs.com/" target="_blank" rel="noopener noreferrer">Express JS</a></li>
                <li><a class="page-link-underline" href="https://github.com/GoogleChrome/puppeteer" target="_blank" rel="noopener noreferrer">Headless Chrome Library</a></li>
            </ul>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>