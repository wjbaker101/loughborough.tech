<?php session_start(); require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Workshops</title>
        
        <?php displayHead(); ?>
        
        <style> 
            body.no-scroll
            {
                overflow-y: hidden;
            }
            
            .sign-in-input
            {
                width: 500px;
                max-width: 100%;
            }
            
            .sign-in-container .stage1.hide,
            .sign-in-container .stage2.hide
            {
                display: none;
            }
            
            .sign-in-button
            {
                padding-top: calc(0.75em + 2px);
                padding-bottom: calc(0.75em + 2px);
            }
            
            .session-item
            {
                width: 50%;
                float: left;
                padding: 0.5em;
            }
            
            .session-item > div
            {
                border: 1px solid transparent;
                cursor: pointer;
                transition: border-color 0.5s;
            }
            
            .session-item:hover > div
            {
                border: 1px solid #4ac0de;
            }
            
            .session-item img
            {
                max-width: 150px;
                max-height: 150px;
            }
            
            @media (max-width: 720px)
            {
                .session-item { width: 100%; }
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
            
            .github-video-container
            {
                border: 0;
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
        <div class="page vpadding-regular">
            <section class="section text-centered">
                <h1>Workshops</h1>
                <p>Here are the past workshops we have done. Feel free to view them and download the resources.</p>
            </section>
            <?php  if (!isset($_SESSION["signed"])) { ?>
            <section class="sign-in-container hpadding-small vpadding-mid text-centered">
                <p>Also, please make sure to <strong>sign in with your email below:</strong></p>
                <div class="stage1">
                    <input class="sign-in-input" type="text" placeholder="email@example.com"><button class="sign-in-button">Sign me in!</button>
                </div>
                <div class="stage2 hide">
                    <p>Thank you for signing in!</p>
                </div>
            </section>
            <?php } ?>
            <div class="hpadding-small">
                <div class="sessions-container content-width clearfix row text-centered">
                    <div class="col-6">
                        <article class="session-item section" data-session="1">
                            <div class="cell-row hpadding-small vpadding-mid">
                                <img src="/resources/images/technology-logos/github.jpg">
                                <h4>An introduction to Git and GitHub</h4>
                            </div>
                        </article>
                        <article class="session-item" data-session="2">
                            <div class="cell-row hpadding-small vpadding-mid">
                                <img src="/resources/images/technology-logos/android.png">
                                <h4>Building an Android app</h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="session-item" data-session="3">
                            <div class="cell-row hpadding-small vpadding-mid">
                                <img src="/resources/images/technology-logos/docker.png">
                                <h4>Introduction to Docker</h4>
                            </div>
                        </article>
                        <article class="session-item" data-session="4">
                            <div class="cell-row hpadding-small vpadding-mid">
                                <img src="/resources/images/technology-logos/html5.svg">
                                <h4>Coursework Crash Course</h4>
                            </div>
                        </article>
                    </div>
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
                            <h1>An introduction to Git and GitHub</h1>
                        </div>
                        <div class="session-content">
                            <div class="content-text-width vpadding-mid">
                                <p class="text-centered">Your number 1 tool for version control. Learn how to use git through the command line and upload your projects to GitHub.</p>
                                <iframe class="github-video-container" src="https://drive.google.com/file/d/1Epr_QplfV8tnIa4l-FId1CmfpH_vMaua/preview" width="720" height="405"></iframe>
                                <div class="vpadding-mid">
                                    <h3>View the Slides:</h3>
                                    <p><a class="page-link-underline" href="https://drive.google.com/open?id=15934Ag_mDX_TjGCIOyAIzp4TEf-gIG2W" target="_blank" rel="noopener noreferrer">Here</a> are the slides we went through during the workshop.</p>
                                    <h3>Resources:</h3>
                                    <ul>
                                        <li><a class="page-link-underline" href="https://github.com/join" target="_blank" rel="noreferrer">Create a GitHub Account</a></li>
                                        <li><a class="page-link-underline" href="https://education.github.com/pack" target="_blank" rel="noreferrer">Student Developer Pack</a></li>
                                        <li><a class="page-link-underline" href="https://git-scm.com/" target="_blank" rel="noreferrer">Install Git</a></li>
                                        <li><a class="page-link-underline" href="https://guides.github.com/" target="_blank" rel="noreferrer">GitHub Guides</a></li>
                                        <li><a class="page-link-underline" href="https://help.github.com/articles/about-team-discussions/" target="_blank" rel="noreferrer">About GitHub Team Discussions</a></li>
                                        <li><a class="page-link-underline" href="https://help.github.com/articles/tracking-the-progress-of-your-work-with-project-boards/" target="_blank" rel="noreferrer">About Project Boards</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="session-description" data-session="2">
                        <div class="session-title text-centered">
                            <h1>Building an Android App</h1>
                        </div>
                        <div class="session-content">
                            <div class="content-text-width vpadding-mid">
                                <p class="text-centered">The absolute basics of creating an Android app in Java. Learn by creating a simple calculator that you can run on your phone.</p>
                                <h3>View the Slides:</h3>
                                <p><a class="page-link-underline" href="https://drive.google.com/open?id=1B3lWdBC5ErNwbTZZ7Ao9YfBuSOYbco7y" target="_blank" rel="noopener noreferrer">Here</a> are the slides we went through during the workshop.</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://developer.android.com/studio/run/oem-usb.html" target="_blank" rel="noreferrer">Install the drivers</a></li>
                                    <li><a class="page-link-underline" href="https://developer.android.com/studio/index.html" target="_blank" rel="noreferrer">Download Android Studio</a></li>
                                    <li><a class="page-link-underline" href="https://developer.android.com/training/index.html" target="_blank" rel="noopener noreferrer">Training for Android Developers</a></li>
                                    <li><a class="page-link-underline" href="https://www.javatpoint.com/android-tutorial" target="_blank" rel="noopener noreferrer">Android Tutorial</a></li>
                                    <li><a class="page-link-underline" href="http://www.vogella.com/tutorials/Android/article.html" target="_blank" rel="noopener noreferrer">Getting Started with Android Development</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="session-description" data-session="3">
                        <div class="session-title text-centered">
                            <h1>Introduction to Docker</h1>
                        </div>
                        <div class="session-content">
                            <div class="content-text-width vpadding-mid">
                                <p class="text-centered">Reduce your workload with Docker. Docker allows you to create environments that will be consistent across different platforms, so you won't have to install all those dependencies yourself.</p>
                                <h3>View the Slides:</h3>
                                <p><a class="page-link-underline" href="https://drive.google.com/open?id=1UmYTyvVVBZS1-Xxj9ySKQoceWrH50t82" target="_blank" rel="noopener noreferrer">Here</a> are the slides we went through during the workshop.</p>
                                <h3>Resources:</h3>
                                <ul>
                                    <li><a class="page-link-underline" href="https://hub.docker.com/" target="_blank" rel="noopener noreferrer">Docker Hub</a></li>
                                    <li><a class="page-link-underline" href="https://docs.docker.com/docker-for-mac/" target="_blank" rel="noopener noreferrer">Docker for Mac</a></li>
                                    <li><a class="page-link-underline" href="https://docs.docker.com/docker-for-windows/" target="_blank" rel="noopener noreferrer">Docker for Windows</a></li>
                                    <li><a class="page-link-underline" href="https://docs.docker.com/toolbox/overview/" target="_blank" rel="noopener noreferrer">Docker Toolbox</a></li>
                                    <li><a class="page-link-underline" href="http://hackp.ac/docker-static-site-source" target="_blank" rel="noopener noreferrer">Static Site Source Code (.zip)</a></li>
                                    <li><a class="page-link-underline" href="http://hackp.ac/docker-flask-source" target="_blank" rel="noopener noreferrer">Cat GIF of the Day Source Code (.zip)</a></li>
                                    <li><a class="page-link-underline" href="https://docker-flask-app.herokuapp.com/" target="_blank" rel="noopener noreferrer">Cat GIF of the Day!</a></li>
                                    <li><a class="page-link-underline" href="https://www.codecademy.com/learn/learn-python" target="_blank" rel="noopener noreferrer">Learn Python</a></li>
                                    <li><a class="page-link-underline" href="http://flask.pocoo.org/docs/0.12/" target="_blank" rel="noopener noreferrer">Flask Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="session-description" data-session="4">
                        <div class="session-title text-centered">
                            <h1>Coursework Crash Course</h1>
                        </div>
                        <div class="session-content">
                            <div class="content-text-width vpadding-mid">
                                <p class="text-centered">Learn all the basics of HTML, CSS and JavaScript you need to ace your MiTunes coursework. We're even here to help you with any other modules you may be stuggling with, or want to learn more about.</p>
                                <p><a class="page-link-underline" href="https://drive.google.com/open?id=1MqvFuSZFVreAvnjCgfVIcn23sqBf4hr6" target="_blank" rel="noopener noreferrer">Here</a> are the slides we went through during the workshop.</p>
                                <p><a class="page-link-underline" href="https://drive.google.com/open?id=1G-gtEvIE7FVI3D5XpH_Tx3WZ1qbRo6QS" target="_blank" rel="noopener noreferrer">Get the code (.zip)</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>