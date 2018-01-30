<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Introduction to Docker</title>
        
        <meta name="description" content="The Introduction to Docker workshop, hosted by The Loughborough Technology Society.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style></style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Introduction to Docker</h1>
        <div class="bordered-section">
            <div class="content-width hpadding-small vpadding-mid">
                <div class="card cell-row bg-white">
                    <div class="card-content vpadding-regular">
                        <div class="v-card-content cell l3 s12 cell-middle hpadding-small text-centered">
                            <img src="/resources/images/technologies/docker.png" width="150">
                        </div>
                        <div class="v-card-content cell l9 s12 hpadding-small cell-middle">
                            <p><small>SAT, 2nd DEC 2017</small></p>
                            <p>Reduce your workload with Docker. Docker allows you to create environments that will be consistent across different platforms, so you won't have to install all those dependencies yourself.</p>
                            <p>Click <a class="page-link-underline" href="https://drive.google.com/open?id=0B9CDy1rp7c80aFhwazB6bWtEUVE" target="_blank" rel="noopener noreferrer">here</a> to get the slides!</p>
                        </div>
                    </div>
                    <div class="card-content hpadding-small text-right">
                        <p><a href="/workshops/"><button>&larr; Return to Workshops</button></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-text-width hpadding-small vpadding-mid">
            <h2>Helpful Resources</h2>
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
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>