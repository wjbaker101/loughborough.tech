<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Hacking with Amazon Alexa</title>
        
        <meta name="description" content="The Hacking with Amazon Alexa workshop, hosted by The Loughborough Technology Society.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style></style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Hacking with Amazon Alexa</h1>
        <div class="bordered-section">
            <div class="content-width hpadding-small vpadding-mid">
                <div class="card cell-row bg-white">
                    <div class="card-content vpadding-regular">
                        <div class="v-card-content cell l3 s12 cell-middle hpadding-small text-centered">
                            <img src="/resources/images/technologies/amazon-alexa.png" width="150">
                        </div>
                        <div class="v-card-content cell l9 s12 hpadding-small cell-middle">
                            <p><small>SAT, 21st OCT 2017</small></p>
                            <p>Learn to create your first skill for Amazon Alexa, the voice service that powers Amazon Echo.</p>
                            <p>Click <a class="page-link-underline" href="https://drive.google.com/open?id=0B9CDy1rp7c80SmdoNUNkc3ZfTkU" target="_blank" rel="noopener noreferrer">here</a> to get the slides!</p>
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
                <li><a class="page-link-underline" href="https://console.aws.amazon.com/lambda/home?region=us-east-1#/functions" target="_blank" rel="noopener noreferrer">Direct link to AWS Lambda</a> (Using us-east-1)</li>
                <li><a class="page-link-underline" href="https://developer.amazon.com/alexa-skills-kit" target="_blank" rel="noopener noreferrer">Amazon Developer Alexa Skills Kit</a></li>
            </ul>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>