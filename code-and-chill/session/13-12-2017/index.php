<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session Four, 13-12-2017</title>
        
        <meta name="description" content="Go over the basics of JavaScript relevant to the MiTunes Coursework, or learn the beginnings of the Python programming language. Session Four of Code and Chill, 13-12-2017.">
        
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
        <h1 class="title">Session Four</h1>
        <div class="bordered-section vpadding-mid">
            <div class="content-width card bg-white">
                <div class="card-content cell-row vpadding-regular">
                    <div class="v-card-content cell l3 s12 cell-middle padding-small text-centered">
                        <img src="/resources/images/branding/code-and-chill-red.png" width="150">
                    </div>
                    <div class="v-card-content cell l9 s12 hpadding-small">
                        <p><small>WED, 12th DEC 2017</small></p>
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
        <div id="beginners-topic" class="content-text-width card-content vpadding-regular">
            <h1 class="beginners-text">
                <img src="/resources/images/technologies/html5.svg" height="60">
                <span class="cell-middle">Beginners Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>This will contain some helpful resources for you to use for coursework, for example resources from the previous HTML and CSS sessions.</p>
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
                <img src="/resources/images/technologies/python.svg" height="60">
                <span class="cell-middle">Advanced Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>Python is an interpreted language, which can save you considerable time during program development because no compilation and linking is necessary.</p>
            <p>Python offers much more error checking than C, and, being a very-high-level language, it has high-level data types built in, such as flexible arrays and dictionaries.</p>
            <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=1WFOyH1rzFuSy23Tsi7BIjvrj1OM3oRdY" target="_blank" rel="noopener noreferrer">here</a>!</p>
            <h2>Helpful Resources</h2>
            <ul>
                <li><a class="page-link-underline" href="https://www.python.org/downloads/release/python-363/" target="_blank" rel="noopener noreferrer">Download Python</a></li>
                <li><a class="page-link-underline" href="https://www.tutorialspoint.com/python/" target="_blank" rel="noopener noreferrer">Python Tutorial</a></li>
            </ul>
            <h2>Further Reading</h2>
            <ul>
                <li><a class="page-link-underline" href="http://flask.pocoo.org/" target="_blank" rel="noopener noreferrer">Flask</a></li>
                <li><a class="page-link-underline" href="http://loughborough.tech/workshops/" target="_blank" rel="noopener noreferrer">Our Docker Tutorial</a> (Uses Python)</li>
            </ul>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>