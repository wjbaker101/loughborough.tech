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
                    <p>It's our first official session of the year and it's FREE! Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                    <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
                </section>
                <section class="section vpadding-regular">
                    <div class="topic-container cell-row">
                        <div class="beginners-content cell l6 m12 hpadding-small vpadding-regular text-centered">
                            <h2>Beginners Topic</h2>
                            <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                            <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                        </div>
                        <div class="advanced-content cell l6 m12 hpadding-small vpadding-regular text-centered">
                            <h2>Advanced Topic</h2>
                            <p>If you've done HTML and CSS before, try out the advanced topic.</p>
                            <p>We will be going through the first steps of using SASS.</p>
                            <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS</p>
                        </div>
                    </div>
                </section>
                <!--<section class="section vpadding-regular">
                    <a class="beginners-button unselectable hpadding-small vpadding-regular">Beginners Topic</a>
                    <a class="advanced-button unselectable hpadding-small vpadding-regular">Advanced Topic</a>
                </section>
                <section class="topic-content-container section vpadding-regular">
                    <article class="beginners">
                        <h3>HTML and CSS</h3>
                        <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                        <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                    </article>
                    <article class="advanced hidden">
                        <h3>SASS</h3>
                    </article>
                </section>-->
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>