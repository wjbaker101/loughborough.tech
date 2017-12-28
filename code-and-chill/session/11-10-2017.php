<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill Session One, 11-10-2017</title>
        
        <meta name="description" content="Go through the first steps into HTML and CSS, as well as the basics of SASS, a preprocessor for CSS. Session One of Code and Chill, 11-10-2017.">
        
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
            <h2>Session One</h2>
            <p><small>WED, 11th OCT 2017</small></p>
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
                        <p>View the slides we went through <a class="page-link-underline" href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" target="_blank" rel="noopener noreferrer">here</a>!</p>
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
                        <p>If you've done HTML and CSS before, try out the advanced topic.</p>
                        <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS. We will be going through the first steps of using SASS.</p>
                        <h4>Topics covered</h4>
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
                    </div>
                    <div class="card-content padding-small">
                        <h3>Installation</h3>
                        <ol>
                            <li><a class="page-link-underline" href="http://rubyinstaller.org/" target="_blank" rel="noopener noreferrer">Install Ruby</a> if you are on Windows.</li>
                            <li>Install SASS from <a class="page-link-underline" href="http://sass-lang.com/install" target="_blank" rel="noopener noreferrer">here</a>.</li>
                        </ol>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Helpful Resources</h3>
                        <ul>
                            <li><a class="page-link-underline" href="http://sass-lang.com/" target="_blank" rel="noopener noreferrer">SASS Website</a></li>
                            <li><a class="page-link-underline" href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank" rel="noopener noreferrer">SASS Documentation</a></li>
                        </ul>
                    </div>
                    <div class="card-content padding-small">
                        <h3>Further Reading</h3>
                        <ul>
                            <li><a class="page-link-underline" href="http://compass-style.org/" target="_blank" rel="noopener noreferrer">Compass</a> (An extension to SASS)</li>
                            <li><a class="page-link-underline" href="http://lesscss.org/" target="_blank" rel="noopener noreferrer">LESS</a> (An alternative to SASS)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>