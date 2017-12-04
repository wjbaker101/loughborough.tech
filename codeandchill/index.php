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
            
            .sign-in-input
            {
                width: 500px;
                max-width: 100%;
                border-color: #d00c14;
            }
            
            .sign-in-input:hover,
            .sign-in-input:focus
            {
                outline-color: #d00c14;
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
            
            h2::after
            {
                background-color: #d00c14;
            }
            
            .logo-full-height
            {
                width: 100%;
                height: 100vh;
                display: table;
                position: relative;
                background-image: linear-gradient(0deg, rgba(255, 0, 0, 0.5), rgba(255, 0, 0, 0.5)), url(/resources/images/events/session.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            
            body > header
            {
                color: #fff;
                background-color: transparent;
                transition: padding 0.5s, border-color 0.5s, background-color 0.5s;
            }
            
            body > header.scrolling
            {
                color: initial;
                background-color: #fff;
            }
            
            .logo-content
            {
                display: table-cell;
            }
            
            .scroll-arrow
            {
                position: absolute;
                bottom: 3em;
                transform: translateX(-50%);
                animation: bounce 5s infinite;
            }
            
            @keyframes bounce
            {
                0% { transform: translateY(0) translateX(-50%) }
                5% { transform: translateY(1em) translateX(-50%) }
                10% { transform: translateY(0) translateX(-50%) }
                15% { transform: translateY(1em) translateX(-50%) }
                20% { transform: translateY(0) translateX(-50%) }
            }
            
            .scroll-indicator.scrolled .arrow
            {
                opacity: 0;
                transition: opacity 0.5s;
            }
            
            .sign-in-container
            {
                border-bottom: 1px solid #d00c14;
            }
            
            .sessions-container
            {
                margin-bottom: 90px;
            }
            
            .session-item
            {
                width: 25%;
                float: left;
                padding: 0.5em;
            }
            
            .session-item > div
            {
                border: 1px solid #edeef0;
                border-bottom-color: #e41f28;
                cursor: pointer;
                transition: border-color 0.5s;
            }
            
            @media (max-width: 720px)
            {
                .session-item
                {
                    width: 50%;
                }
            }
            
            @media (max-width: 540px)
            {
                .session-item
                {
                    width: 100%;
                }
            }
            
            .session-item > div:hover
            {
                border-color: #e41f28;
            }
            
            .session-contents
            {
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                z-index: 7;
                overflow-y: auto;
            }
            
            .hidden { display: none; }
            
            button:not(.reset-button).session-close-button
            {
                position: fixed;
                top: 1rem;
                right: 2rem;
                z-index: 8;
            }
            
            .session-description .session-title,
            .session-description .session-content
            {
                position: relative;
            }
            
            .session-description .session-title { animation: title-animation 1s ease-out; }
            
            @keyframes title-animation
            {
                0% { transform: translateY(5rem) }
                20% { transform: translateY(5rem) }
                100% { transform: translateY(0) }
            }
            
            .session-description .session-content { animation: content-animation 1s; }
            
            @keyframes content-animation
            {
                0% { opacity: 0 }
                50% { opacity: 0; transform: translateY(-2rem) }
                100% { opacity: 1; transform: translateY(0) }
            }
            
            .session-description .topic-button
            {
                width: 7rem;
                height: 7rem;
            }
        </style>
        
        <script>
            window.addEventListener('load', () =>
            {
                const items = Array.from(document.querySelectorAll('.session-item'));
                
                const sessionDescriptions = Array.from(document.querySelectorAll('.session-description'));
                
                items.forEach(e =>
                {
                    e.addEventListener('click', () =>
                    {
                        sessionDescriptions.forEach(d => d.classList.add('hidden'));
                        
                        const description = sessionDescriptions.find(d => d.getAttribute('data-session') === e.getAttribute('data-session'));
                        description.classList.remove('hidden');
                        
                        document.querySelector('.session-contents').classList.remove('hidden');
                        document.body.classList.add('no-scroll');
                    });
                });
                
                const closeButton = document.querySelector('.session-contents .session-close-button');
                
                closeButton.addEventListener('click', () =>
                {
                    document.querySelector('.session-contents').classList.add('hidden');
                    document.body.classList.remove('no-scroll');
                });
                
                const scrollArrowButton = document.querySelector('.scroll-indicator');

                const onWindowScroll = () =>
                {
                    if (window.scrollY > 50)
                    {
                        scrollArrowButton.classList.add('scrolled');
                        window.removeEventListener('scroll', onWindowScroll);
                    }
                };

                window.addEventListener('scroll', onWindowScroll);
                
                <?php  if (!isset($_SESSION["signed"])) { ?>
                const button = document.querySelector('.sign-in-button');
                const signInContainer = document.querySelector('.sign-in-container');
                
                button.addEventListener('click', () =>
                {
                    const parameters =
                    {
                        email: signInContainer.querySelector('.sign-in-input').value,
                    };
                    
                    techSoc.ajax({ url: 'resources/signin.php', method: 'POST', parameters: parameters }).then(response =>
                    {
                        if (response.code === 'success')
                        {
                            signInContainer.querySelector('.stage1').classList.add('hide');
                            signInContainer.querySelector('.stage2').classList.remove('hide');
                        }
                    })
                    .catch(status => {});
                });
                <?php } ?>
            });
        </script>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="logo-full-height">
            <div class="logo-content text-centered cell-middle">
                <img src="/resources/images/events/code-and-chill-white.png" width="270" height="300">
                <h3 class="text-white">Next Session: 13/12/2017<br>Room: EHB J205</h3>
                <div class="scroll-indicator">
                    <svg width="26" height="26" class="scroll-arrow" viewBox="0 0 9.5249998 9.5250002">
                        <g class="arrow" transform="translate(0 -287.47)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2.6458 292.77 2.1167 2.6458 2.1167-2.6458" stroke-width="1.2"/>
                            <path d="m4.7625 295.41v-6.35" stroke-width="1.2"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <?php  if (!isset($_SESSION["signed"])) { ?>
        <section class="sign-in-container hpadding-small vpadding-mid text-centered">
            <div class="stage1">
                <input class="sign-in-input" type="text" placeholder="email@example.com"><button class="sign-in-button">Sign me in!</button>
            </div>
            <div class="stage2 hide">
                <p>Thank you for signing in!</p>
            </div>
        </section>
        <?php } ?>
        <div class="about-description hpadding-small vpadding-large">
            <div class="content-text-width text-centered">
                <h2>What is Code and Chill?</h2>
                <p>Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
                <p>View each session's topics below:</p>
            </div>
        </div>
        <div class="hpadding-small">
            <div class="sessions-container content-width clearfix text-centered">
                <article class="session-item section" data-session="1">
                    <div class="cell-row hpadding-small vpadding-mid">
                        <h3>Session One:</h3>
                        <p class="date text-dark-grey">11/10/2017</p>
                    </div>
                </article>
                <article class="session-item" data-session="2">
                    <div class="cell-row hpadding-small vpadding-mid">
                        <h3>Session Two:</h3>
                        <p class="date text-dark-grey">25/10/2017</p>
                    </div>
                </article>
                <article class="session-item" data-session="3">
                    <div class="cell-row hpadding-small vpadding-mid">
                        <h3>Session Three:</h3>
                        <p class="date text-dark-grey">08/11/2017</p>
                    </div>
                </article>
                <article class="session-item" data-session="4">
                    <div class="cell-row hpadding-small vpadding-mid">
                        <h3>Session Four:</h3>
                        <p class="date text-dark-grey">13/12/2017</p>
                    </div>
                </article>
                <!--<article class="session-item" data-session="5">
                    <div class="cell-row hpadding-small vpadding-mid">
                        <h3>Session Five:</h3>
                        <p class="date text-dark-grey">11/10/2017</p>
                    </div>
                </article>-->
            </div>
        </div>
        <div class="session-contents bg-white hidden">
            <button class="session-close-button">&times;</button>
            <div class="hpadding-small vpadding-mid">
                <article class="session-description" data-session="1">
                    <div class="session-title text-centered">
                        <h1 class="cc-heading">Session One</h1>
                        <h3>11/10/2017</h3>
                    </div>
                    <div class="session-content">
                        <div class="content-text-width vpadding-mid">
                            <div class="beginners-content section hpadding-small vpadding-regular">
                                <h1>Beginners Topic</h1>
                                <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                                <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                                <p>View the slides we went through <a href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" class="page-link-underline" target="_blank">here</a>!</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank">w3schools HTML Reference</a></li>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/css/" target="_blank">w3schools CSS Reference</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">Mozilla Developer Network (HTML)</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">Mozilla Developer Network (CSS)</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank">Codecademy Make-a-Website Course</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank">Codecademy HTML and CSS Courses</a></li>
                                </ul>
                            </div>
                            <div class="advanced-content section hpadding-small vpadding-regular">
                                <h1>Advanced Topic</h1>
                                <p>If you've done HTML and CSS before, try out the advanced topic.</p>
                                <p>We will be going through the first steps of using SASS.</p>
                                <p>SASS is a preprocessor for writing CSS. It makes it easier to read and write CSS.</p>
                                <h3>Topics we will cover:</h3>
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
                                <h3>Installing SASS:</h3>
                                <ol>
                                    <li><a class="page-link-underline" href="http://rubyinstaller.org/" target="_blank">Install Ruby</a> if you are on Windows.</li>
                                    <li>Install SASS from <a class="page-link-underline" href="http://sass-lang.com/install">here</a>.</li>
                                </ol>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="http://sass-lang.com/" target="_blank">SASS Website</a></li>
                                    <li><a class="page-link-underline" href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank">SASS Documentation</a></li>
                                </ul>
                                <h3>Further Reading:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="http://compass-style.org/">Compass</a></li>
                                    <li><a class="page-link-underline" href="http://lesscss.org/" target="_blank">LESS</a>, an alternative to SASS.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="session-description" data-session="2">
                    <div class="session-title text-centered">
                        <h1 class="cc-heading">Session Two</h1>
                        <h3>25/10/2017</h3>
                    </div>
                    <div class="session-content">
                        <div class="content-text-width vpadding-mid">
                            <div class="beginners-content section hpadding-small vpadding-regular">
                                <h1>Beginners Topic</h1>
                                <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                                <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                                <p>View the slides we went through <a href="https://drive.google.com/open?id=0B79kOzBclpj-TndwSU5ZNFZYRXM" class="page-link-underline" target="_blank">here</a>!</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank">w3schools HTML Reference</a></li>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/css/" target="_blank">w3schools CSS Reference</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">Mozilla Developer Network (HTML)</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">Mozilla Developer Network (CSS)</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank">Codecademy Make-a-Website Course</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank">Codecademy HTML and CSS Courses</a></li>
                                </ul>
                            </div>
                            <div class="advanced-content section hpadding-small vpadding-regular">
                                <h1>Advanced Topic</h1>
                                <p>Node.js is a runtime environment that uses JavaScript to execute code from the server side.</p>
                                <p>View the slides we went through <a href="https://drive.google.com/open?id=0B9CDy1rp7c80LVBHdVRZX1FoNlE" class="page-link-underline" target="_blank">here</a>!</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://nodejs.org/en/" target="_blank">Node.js Website</a></li>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/nodejs/default.asp" target="_blank">w3schools Node.js Tutorial</a></li>
                                    <li><a class="page-link-underline" href="https://www.npmjs.com/" target="_blank">npm Website</a></li>
                                </ul>
                                <h3>Installing Node.js:</h3>
                                <ol>
                                    <li>Visit the Node.js website: <a class="page-link-underline" href="https://nodejs.org/en/download/" target="_blank">here</a>!</li>
                                    <li>Download the LTS version of Node for your relevant operating system.</li>
                                    <li>Open a terminal and run "node -v" to make sure it has installed correctly.</li>
                                </ol>
                                <h3>Further Reading:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://expressjs.com/" target="_blank">Express JS</a></li>
                                    <li><a class="page-link-underline" href="https://github.com/GoogleChrome/puppeteer" target="_blank">Headless Chrome Library</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="session-description" data-session="3">
                    <div class="session-title text-centered">
                        <h1 class="cc-heading">Session Three</h1>
                        <h3>08/11/2017</h3>
                    </div>
                    <div class="session-content">
                        <div class="content-text-width vpadding-mid">
                            <div class="beginners-content section hpadding-small vpadding-regular">
                                <h1>Beginners Topic</h1>
                                <p>HTML and CSS are markup languages and the building blocks that make up the web.</p>
                                <p>In this topic, you will learn how to structure HTML and style it with CSS.</p>
                                <!--<p>View the slides we went through <a href="https://drive.google.com/open?id=0B79kOzBclpj-dVU5NzhYQWdfa28" class="page-link-underline" target="_blank">here</a>!</p>-->
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/html/" target="_blank">w3schools HTML Reference</a></li>
                                    <li><a class="page-link-underline" href="https://www.w3schools.com/css/" target="_blank">w3schools CSS Reference</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">Mozilla Developer Network (HTML)</a></li>
                                    <li><a class="page-link-underline" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">Mozilla Developer Network (CSS)</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/learn/make-a-website" target="_blank">Codecademy Make-a-Website Course</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/catalog/language/html-css" target="_blank">Codecademy HTML and CSS Courses</a></li>
                                </ul>
                            </div>
                            <div class="advanced-content section hpadding-small vpadding-regular">
                                <h1>Advanced Topic</h1>
                                <p>AngularJS (v1) is a JavaScript-based front-end web application framework mainly maintained by Google.</p>
                                <p>View the slides we went through <a href="https://drive.google.com/open?id=1pkKE7Cw_o-3PvwS5kkpVMU2Upffxcx8J" class="page-link-underline" target="_blank">here</a>!</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://drive.google.com/open?id=1Vofr1GTawYUkPdJPVN4zmjbrojoJj-o9" target="_blank">Our Angular.js Template</a></li>
                                    <li><a class="page-link-underline" href="https://angularjs.org/" target="_blank">Angular.js Website</a></li>
                                    <li><a class="page-link-underline" href="https://docs.angularjs.org/api/ng/directive" target="_blank">Angular Documentation</a></li>
                                </ul>
                                <h3>Further Reading:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="http://angular.io/" target="_blank">Angular (v2) Website</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="session-description" data-session="4a">
                    <div class="session-title text-centered">
                        <h1 class="cc-heading">Session Four</h1>
                        <h3>13/12/2017</h3>
                    </div>
                    <div class="session-content">
                        <div class="content-text-width vpadding-mid">
                            <div class="beginners-content section hpadding-small vpadding-regular">
                                <h1>Beginners Topic</h1>
                            </div>
                            <div class="advanced-content section hpadding-small vpadding-regular">
                                <h1>Advanced Topic</h1>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>