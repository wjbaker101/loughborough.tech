<?php session_start(); require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Code and Chill</title>
        
        <?php displayHead(); ?>
        
        <style>
            .cc-heading
            {
                color: #e41f28;
            }
            
            .cc-container article
            {
                /*border: 1px solid #edeef0;
                border-bottom: 2px solid #4ac0de;*/
                background-color: #e41f28;
                cursor: pointer;
                color: #fff;
                transition: all 0.5s;
            }
            
            .cc-container article:hover
            {
                background-color: #d00c14;
            }
            
            .cc-container article > *
            {
                margin: 0;
            }
            
            .cc-container article h4
            {
                line-height: 45px;
            }
            
            .cc-container article .date
            {
                color: #ccc;
                line-height: 45px;
            }
            
            .cc-container article + .content + article
            {
                margin-top: 1em;
            }
            
            .cc-container article + .content
            {
                display: none;
            }
            
            .cc-container article.active + .content
            {
                display: block;
                animation: fade-in 0.5s;
            }
            
            @keyframes fade-in
            {
                from { opacity: 0 }
                to { opacity: 1 }
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
            
            .sign-in-input
            {
                width: 500px;
                max-width: 100%;
                border-color: #d00c14;
            }
            
            .sign-in-container .stage1.hide,
            .sign-in-container .stage2.hide
            {
                display: none;
            }
            
            .sign-in-button
            {
                background-color: #e41f28;
                color: #fff;
                border: 3px solid #e41f28;
            }
            
            .sign-in-button:not(.reset-button):hover,
            .sign-in-button:not(.reset-button):focus
            {
                background-color: #d00c14;
            }
        </style>
        
        <script>
            window.addEventListener('load', () =>
            {
                const events = Array.from(document.querySelectorAll('.cc-container article'));
                
                let currentActive = null;
                
                events.forEach(e =>
                {
                    e.addEventListener('click', () =>
                    {
                        e.classList.toggle('active');
                    });
                });
                
                <?php  if (!isset($_SESSION["signed"])) { ?>
                const button = document.querySelector('.sign-in-button');
                const signInContainer = document.querySelector('.sign-in-container');
                
                button.addEventListener('click', () =>
                {
                    const parameters =
                    {
                        email: signInContainer.querySelector('.sign-in-input').value,
                    };
                    
                    techSoc.ajax.onSuccess(response =>
                    {
                        if (response.code === 'success')
                        {
                            signInContainer.querySelector('.stage1').classList.add('hide');
                            signInContainer.querySelector('.stage2').classList.remove('hide');
                        }
                        else
                        {
                        
                            console.log(response);
                        }
                    })
                    .onFailure(status =>
                    {
                        
                    })
                    .send({ url: 'resources/signin.php', method: 'POST', parameters: parameters });
                });
                <?php } ?>
            });
        </script>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section text-centered">
                    <img src="/resources/images/events/code-and-chill.png" width="135" height="150">
                </section>
                <?php  if (!isset($_SESSION["signed"])) { ?>
                <section class="sign-in-container section vpadding-regular text-centered">
                    <div class="stage1">
                        <input class="sign-in-input" type="text" placeholder="email@example.com"><button class="sign-in-button">Sign me in!</button>
                    </div>
                    <div class="stage2 hide">
                        <p>Thank you for signing in!</p>
                    </div>
                </section>
                <?php } ?>
                <section class="cc-container section vpadding-regular">
                    <article class="hpadding-small vpadding-regular clearfix">
                        <h4 class="float-l">Session One:</h4>
                        <p class="date float-r">11/10/2017</p>
                    </article>
                    <div class="content vpadding-regular hpadding-small text-centered">
                        <div>
                            <p><strong>Wednesday 11th October 2017</strong></p>
                            <p>It's our first official session of the year and it's FREE! Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                            <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
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
                                    <h2>View Slides:</h2>
                                    <p><a href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" class="page-link-underline" target="_blank">Here!</a></p>
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
                        </div>
                    </div>
                    <article class="hpadding-small vpadding-regular clearfix">
                        <h4 class="float-l">Session Two:</h4>
                        <p class="date float-r">25/10/2017</p>
                    </article>
                    <div class="content vpadding-regular hpadding-small text-centered">
                        <div>
                            <p><strong>Wednesday 25th October 2017</strong></p>
                            <p>The Code and Chill session is back again! We will be going over more HTML and CSS for beginners, and some more Node JS for our more advanced members. Come along for more music, more snacks (promise I will bring more than Doritos this time), drinks and more good times!</p>
                            <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
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
                                    <h2>View Slides:</h2>
                                    <p><a href="https://drive.google.com/open?id=0B79kOzBclpj-TndwSU5ZNFZYRXM" class="page-link-underline" target="_blank">Here!</a></p>
                                </div>
                                <div class="advanced-content cell l6 m12 hpadding-small vpadding-regular text-centered">
                                    <h2>Advanced Topic</h2>
                                    <p>Node.js</p>
                                    <h2>Resources:</h2>
                                    <ul class="text-left">
                                        <li><a class="page-link-underline" href="https://nodejs.org/en/" target="_blank">Node.js Website</a></li>
                                        <li><a class="page-link-underline" href="https://www.w3schools.com/nodejs/default.asp" target="_blank">w3schools Node.js Tutorial</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>