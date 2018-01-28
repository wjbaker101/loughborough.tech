<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session One, 11-10-2017</title>
        
        <meta name="description" content="Go through the first steps into HTML and CSS, as well as the basics of SASS, a preprocessor for CSS. Session One of Code and Chill, 11-10-2017.">
        
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
            
            .beginners-button
            {
                border: 1px solid #449826;
            }
            
            .advanced-button
            {
                border: 1px solid #d11f26;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Session One</h1>
        <div class="bordered-section vpadding-mid">
            <div class="content-width card bg-white">
                <div class="card-content cell-row vpadding-regular">
                    <div class="v-card-content cell l3 s12 cell-middle padding-small text-centered">
                        <img src="/resources/images/branding/code-and-chill-red.png" width="150">
                    </div>
                    <div class="v-card-content cell l9 s12 hpadding-small">
                        <p><small>WED, 11th OCT 2017</small></p>
                        <p>View information, resources, helpful tips on the topics covered in this Code and Chill session.</p>
                        <p>Below you will find content for the beginner and advanced topics.</p>
                        <p><a href="#beginners-topic"><button class="beginners-button">Skip to Beginners Topic</button></a></p>
                        <p><a href="#advanced-topic"><button class="advanced-button">Skip to Advanced Topic</button></a></p>
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
            <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
            <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
            <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" target="_blank" rel="noopener noreferrer">here</a>!</p>
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
                <img src="/resources/images/technologies/sass.svg" height="60">
                <span class="cell-middle">Advanced Topic</span>
            </h1>
            <h2>What You'll Do</h2>
            <p>If you've done HTML and CSS before, try out the advanced topic.</p>
            <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS. We will be going through the first steps of using SASS.</p>
            <h3>Topics covered</h3>
            <ul>
                <li>Variables (e.g. Breakpoints, Colour Themes)</li>
                <li>Maps</li>
                <li>String Interpolation</li>
                <li>Nesting (e.g. Media Queries)</li>
                <li>Functions</li>
                <li>Mixins</li>
                <li>Partial Files and Imports</li>
                <li>Extending</li>
                <li>Operators</li>
            </ul>
            <h2>Installation</h2>
            <ol>
                <li><a class="page-link-underline" href="http://rubyinstaller.org/" target="_blank" rel="noopener noreferrer">Install Ruby</a> if you are on Windows.</li>
                <li>Install SASS from <a class="page-link-underline" href="http://sass-lang.com/install" target="_blank" rel="noopener noreferrer">here</a>.</li>
            </ol>
            <h2>Helpful Resources</h2>
            <ul>
                <li><a class="page-link-underline" href="http://sass-lang.com/" target="_blank" rel="noopener noreferrer">SASS Website</a></li>
                <li><a class="page-link-underline" href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank" rel="noopener noreferrer">SASS Documentation</a></li>
            </ul>
            <h2>Further Reading</h2>
            <ul>
                <li><a class="page-link-underline" href="http://compass-style.org/" target="_blank" rel="noopener noreferrer">Compass</a> (An extension to SASS)</li>
                <li><a class="page-link-underline" href="http://lesscss.org/" target="_blank" rel="noopener noreferrer">LESS</a> (An alternative to SASS)</li>
            </ul>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>