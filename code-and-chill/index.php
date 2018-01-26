<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Code and Chill</title>
        
        <meta name="description" content="Our fortnightly event Code and Chill where we go through an Advanced and Beginners topic, but mainly chilling whilst coding!">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            body > header
            {
                background-color: transparent;
                color: var(--white);
            }
            
            body > header.scrolling
            {
                background-color: var(--white);
                color: var(--black);
            }
            
            .title-image
            {
                background-image: url(/resources/images/photos/code-and-chill-title-image.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            
            .title-image::before
            {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                background-color: var(--code-and-chill);
                opacity: 0.7;
                z-index: -1;
            }
            
            .session-brand-image
            {
                max-width: 150px;
                max-height: 75px;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script>
            window.addEventListener('load', () => techSoc.scrollIndicator.init('.arrow-scroll-indicator', 'var(--white)'));
        </script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="title-image full-height cell-row">
            <div class="cell cell-middle hpadding-small text-centered">
                <div class="header-height"></div>
                <img class="section" src="/resources/images/branding/code-and-chill-white.png" width="270">
                <div class="content-width column-container section">
                    <div class="column l4 s12">&nbsp;</div>
                    <div class="next-session-details column l4 s12 text-white">
                        <h3 class="card-content">Next Session:</h3>
                        <div class="column-container card-content">
                            <div class="column l6 m12">
                                <h4>
                                    <i class="far fa-calendar fa-fw"></i>
                                    TBC
                                </h4>
                            </div>
                            <div class="column l6 m12">
                                <h4>
                                    <i class="fas fa-map-marker-alt fa-fw"></i>
                                    <!--EHB J205-->TBC
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow-scroll-indicator"></div>
            </div>
        </div>
        <div class="bordered-section hpadding-small vpadding-large">
            <div class="content-text-width">
                <h2>What is Code and Chill?</h2>
                <p>Join us for our fortnightly Code and Chill Sessions, where you can either learn a new programming language, or get help with a personal project/coursework!</p>
                <p>Free food and drinks, as well as music, will be available at the venue for your entertainment.</p>
                <p>So come over, relax, and learn something new!</p>
                <p><em><strong>Important:</strong> Please bring your own laptops and devices as there are no computers available at this venue!</em></p>
            </div>
        </div>
        <div class="content-width hpadding-small vpadding-large">
            <?php include('resources/get-sessions.php'); ?>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>