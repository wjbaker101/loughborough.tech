<?php session_start(); require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Code and Chill</title>
        
        <?php displayHead(); ?>
        
        <style>
            body.no-scroll
            {
                overflow-y: hidden;
            }
            
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
            
            .cc-container article + .session-content + article
            {
                margin-top: 1em;
            }
            
            .cc-container article + .session-content
            {
                display: none;
            }
            
            .cc-container article.active + .session-content
            {
                width: 100%;
                height: 100%;
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 12;
                background-color: #fff;
                overflow-y: scroll;
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
            
            
            
            
            .title-header
            {
                border-bottom: 1px solid #e41f28;
                animation: header-ani 0.8s;
            }
            
            @keyframes header-ani
            {
                from { transform: translateY(-200px) }
                to { transform: translateY(0) }
            }
            
            .title-header h1,
            .session-close
            {
                color: #e41f28;
            }
            
            @media (min-width: 540px)
            {
                .title-header h1
                {
                    margin-top: 0;
                }
            }
            
            .session-date
            {
                color: #000;
            }
            
            .session-close
            {
                cursor: pointer;
            }
            
            .session-close .svg path,
            .session-close .svg text
            {
                transition: stroke 0.5s, fill 0.5s;
            }
            
            .session-close .svg:hover path
            {
                stroke: #d00c14;
            }
            
            .session-close .svg:hover text
            {
                fill: #d00c14;
            }
            
            .session-description
            {
                animation: description-ani 0.5s;
            }
            
            @keyframes description-ani
            {
                from { transform: translateY(2em) }
                to { transform: translateY(0) }
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
                        e.classList.add('active');
                        document.body.classList.add('no-scroll');
                    });
                    
                    e.nextElementSibling.querySelector('.session-close').addEventListener('click', () =>
                    {
                        e.classList.remove('active');
                        document.body.classList.remove('no-scroll');
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
                    <div class="session-content text-centered">
                        <div class="title-header hpadding-small vpadding-regular">
                            <div class="content-width">
                                <p class="text-left">
                                    <span class="session-close page-link">
                                        <svg width="60" height="16" class="svg" version="1.1" viewBox="0 0 14.022915 4.2333335" xmlns="http://www.w3.org/2000/svg">
                                            <g transform="translate(0 -292.77)">
                                                <text x="4.1712408" y="296.32812" fill="#000000" letter-spacing="0px" stroke-width=".26458" word-spacing="0px" style="line-height:1.25" xml:space="preserve">
                                                    <tspan x="5.1712408" y="296.32812" font="inherit" font-size="3.8806px" stroke-width=".26458">Back</tspan>
                                                </text>
                                                <path d="m3.175 293.3-2.3812 1.5875 2.3812 1.5875" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width=".39687"/>
                                            </g>
                                        </svg>
                                    </span>
                                </p>
                                <h1>Session One</h1>
                                <p class="session-date">11/10/2017</p>
                            </div>
                        </div>
                        <div class="session-description content-width hpadding-small vpadding-mid">
                            <p><strong>Wednesday 11th October 2017</strong></p>
                            <p>It's our first official session of the year and it's FREE! Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                            <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
                            <div class="clearfix">
                                <div class="col-6 m12 hpadding-small">
                                    <div class="beginners-content section hpadding-small vpadding-regular">
                                        <h2>Beginners Topic</h2>
                                        <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                                        <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                                    </div>
                                    <div class="beginners-content section hpadding-small vpadding-regular">
                                        <h2>Resources:</h2>
                                        <ul class="text-left">
                                            <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank">w3schools HTML Reference</a></li>
                                            <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank">Codecademy Make-a-Website Course</a></li>
                                            <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank">Codecademy HTML and CSS Courses</a></li>
                                        </ul>
                                    </div>
                                    <div class="beginners-content section hpadding-small vpadding-regular">
                                        <h2>View Slides:</h2>
                                        <p><a href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" class="page-link-underline" target="_blank">Here!</a></p>
                                    </div>
                                </div>
                                <div class="col-6 m12 hpadding-small">
                                    <div class="advanced-content section hpadding-small vpadding-regular">
                                        <h2>Advanced Topic</h2>
                                        <p>If you've done HTML and CSS before, try out the advanced topic.</p>
                                        <p>We will be going through the first steps of using SASS.</p>
                                        <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS.</p>
                                    </div>
                                    <div class="advanced-content section hpadding-small vpadding-regular">
                                        <h2>Installation Instructions:</h2>
                                        <ol class="text-left">
                                            <li><a class="page-link-underline" href="http://rubyinstaller.org/" target="_blank">Install Ruby</a> if you are on Windows.</li>
                                            <li>Install SASS from <a class="page-link-underline" href="http://sass-lang.com/install">here</a>.</li>
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
                                    </div>
                                    <div class="advanced-content section hpadding-small vpadding-regular">
                                        <h2>Resources:</h2>
                                        <ul class="text-left">
                                            <li><a class="page-link-underline" href="http://sass-lang.com/" target="_blank">SASS Website</a></li>
                                            <li><a class="page-link-underline" href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank">SASS Documentation</a></li>
                                        </ul>
                                    </div>
                                    <div class="advanced-content section hpadding-small vpadding-regular">
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
                    </div>
                    <article class="hpadding-small vpadding-regular clearfix">
                        <h4 class="float-l">Session Two:</h4>
                        <p class="date float-r">25/10/2017</p>
                    </article>
                    <div class="session-content vpadding-regular hpadding-small text-centered">
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
                                        <li><a class="page-link-underline" href="https://www.npmjs.com/" target="_blank">npm Website</a></li>
                                    </ul>
                                    <h2>Instructions:</h2>
                                    <ol class="text-left">
                                        <li>Visit the Node.js website: <a class="page-link-underline" href="https://nodejs.org/en/download/" target="_blank">here</a>!</li>
                                        <li>Download the LTS version of Node for your relevant operating system.</li>
                                        <li>Open a terminal and run "node -v" to make sure it has installed correctly.</li>
                                    </ol>
                                    <h2>Further Reading:</h2>
                                    <p class="text-left">Have a look at these:</p>
                                    <ul class="text-left">
                                        <li><a class="page-link-underline" href="https://expressjs.com/" target="_blank">Express JS</a></li>
                                        <li><a class="page-link-underline" href="https://github.com/GoogleChrome/puppeteer" target="_blank">Headless Chrome Library</a></li>
                                    </ul>
                                    <h2>View Slides:</h2>
                                    <p><a href="https://drive.google.com/open?id=0B9CDy1rp7c80LVBHdVRZX1FoNlE" class="page-link-underline" target="_blank">Here!</a></p>
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