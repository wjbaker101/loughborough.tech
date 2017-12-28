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
            
            .scroll-arrow
            {
                position: absolute;
                bottom: 3em;
                left: 50%;
                transform: translateX(-50%);
                animation: bounce 5s infinite;
            }
            
            .scroll-indicator.scrolled
            {
                opacity: 0;
                transition: opacity 0.5s;
            }
            
            @keyframes bounce
            {
                0% { transform: translateY(0) translateX(-50%) }
                5% { transform: translateY(1em) translateX(-50%) }
                10% { transform: translateY(0) translateX(-50%) }
                15% { transform: translateY(1em) translateX(-50%) }
                20% { transform: translateY(0) translateX(-50%) }
            }
            
            .session-brand-image
            {
                max-width: 150px;
                max-height: 75px;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script>
            window.addEventListener('load', () =>
            {
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
            });
        </script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="title-image full-height cell-row">
            <div class="cell cell-middle hpadding-small text-centered">
                <img src="/resources/images/branding/code-and-chill-white.png" width="270">
                <h4 class="text-white">Next Session: TBC</h4>
                <h4 class="text-white">Location: <!--EHB J205-->TBC</h4>
                <div class="scroll-indicator">
                    <svg width="26" height="26" class="scroll-arrow" viewBox="0 0 9.5249998 9.5250002">
                        <g class="arrow" transform="translate(0 -287.47)" fill="none" stroke="var(--white)" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2.6458 292.77 2.1167 2.6458 2.1167-2.6458" stroke-width="1.2"></path>
                            <path d="m4.7625 295.41v-6.35" stroke-width="1.2"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bordered-section hpadding-small vpadding-large">
            <div class="content-text-width text-centered">
                <h2 class="underlined">What is Code and Chill?</h2>
                <p>Come and see what the society has to offer and learn something new. We will simply be coding in a room with Netflix/Music in the background.</p>
                <p><strong>Please bring your own laptops and devices as there are no computers available at this venue!</strong></p>
                <p>View each session's topics below:</p>
            </div>
        </div>
        <div class="content-width hpadding-small vpadding-large">
            <?php include('resources/get-sessions.php'); ?>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>