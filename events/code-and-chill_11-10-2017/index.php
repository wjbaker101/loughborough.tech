<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Code and Chill - 11/10/2017</title>
        
        <?php displayHead(); ?>
        
        <style>
            .red-heading
            {
                color: #e41f28;
            }
            
            .topic-container
            {
                border-spacing: 1em;
            }
            
            .beginners-content,
            .advanced-content
            {
                border: 1px solid #edeef0;
            }
            
            .beginners-content
            {
                border-bottom: 2px solid #449826;
            }
            
            .advanced-content
            {
                border-bottom: 2px solid #d11f26; 
            }
        </style>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section text-centered">
                    <h1 class="red-heading">Code and Chill</h1>
                    <p class="text-centered"><strong>Wednesday 11th October 2017</strong></p>
                    <p>It's our first official session of the year and it's FREE! Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                    <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
                </section>
                <section class="section vpadding-regular">
                    <div class="topic-container cell-row">
                        <div class="beginners-content cell l6 m12 hpadding-small vpadding-regular text-centered">
                            <h2>Beginners Topic</h2>
                            <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                            <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                            <h2>Resources:</h2>
                            <ul class="text-left">
                                <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank">w3schools HTML Reference</a></li>
                                <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank">Codecademy Make-a-Website Course</a></li>
                                <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank">Codecademy HTML and CSS Courses</a></li>
                            </ul>
                        </div>
                        <div class="advanced-content cell l6 m12 hpadding-small vpadding-regular text-centered">
                            <h2>Advanced Topic</h2>
                            <p>If you've done HTML and CSS before, try out the advanced topic.</p>
                            <p>We will be going through the first steps of using SASS.</p>
                            <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS.</p>
                            <h2>Instructions:</h2>
                            <ol class="text-left">
                                <li><a class="page-link-underline" href="http://rubyinstaller.org/" target="_blank">Install Ruby</a> if you are on Windows.</li>
                                <li>Install SASS from <a href="http://sass-lang.com/install">here</a>.</li>
                                <li>Topics we will cover:</li>
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
                            </ol>
                            <h2>Resources:</h2>
                            <ul class="text-left">
                                <li><a class="page-link-underline" href="http://sass-lang.com/" target="_blank">SASS Website</a></li>
                                <li><a class="page-link-underline" href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank">SASS Documentation</a></li>
                            </ul>
                            <h2>Further Reading:</h2>
                            <p class="text-left">Have a look at these:</p>
                            <ul class="text-left">
                                <li><a class="page-link-underline" href="http://compass-style.org/">Compass</a></li>
                                <li>An alternative to SASS: <a class="page-link-underline" href="http://lesscss.org/" target="_blank">LESS</a>.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>