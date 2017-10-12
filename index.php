<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc</title>
        
        <?php displayHead(); ?>
        
        <style>
            .title-container
            {
                width: 100%;
                height: calc(100vh - 152px);
                margin-top: 152px;
                display: table;
            }
            
            .logo-container
            {
                max-width: 500px;
                max-height: 302px;
                margin: 0 auto;
                position: relative;
            }
            
            #logo-background
            {
                width: 100%;
                height: calc(100% - 10px); /* -10px to prevent "black area under logo" issue */
                position: absolute;
                left: 0;
                z-index: -1;
                background-color: #000;
            }
            
            .logo-container .logo
            {
                z-index: 1;
                pointer-events: none;
            }
            
            .title-container strong
            {
                text-decoration: underline;
                color: #4ac0de;
            }
            
            .scroll-indicator
            {
                color: #4ac0de;
            }
            
            .scroll-indicator.scrolled .arrow
            {
                opacity: 0;
                transition: opacity 0.5s;
            }
            
            .page
            {
                margin-top: 0;
            }
            
            .discord-logo
            {
                width: 14px;
                height: 13px;
                display: inline-block;
                vertical-align: middle;
                background-image: url('/resources/images/discord-logo.svg');
            }
        </style>
        
        <script src="/resources/external/paper.js"></script>
        
        <script type="text/paperscript" canvas="logo-background">
            // The amount of symbol we want to place;
            var count = 20;

            // Create a symbol, which we will use to place instances of later:
            var path = new Path.Circle({
                center: [0, 0],
                radius: 10,
                fillColor: '#4ac0de',
                strokeColor: '#4ac0de'
            });

            var symbol = new Symbol(path);

            // Place the instances of the symbol:
            for (var i = 0; i < count; i++) {
                // The center position is a random point in the view:
                var center = Point.random() * view.size;
                var placed = symbol.place(center);
                placed.scale(i / count + 0.001);
                placed.data.vector = new Point({
                    angle: Math.random() * 360,
                    length : (i / count) * Math.random() / 5
                });
            }

            var vector = new Point({
                angle: 45,
                length: 0
            });

            var mouseVector = vector.clone();

            function onMouseMove(event) {
                mouseVector = -(view.center - event.point);
                return false; // Prevent touch scrolling
            }

            // The onFrame function is called up to 60 times a second:
            function onFrame(event) {
                vector = vector + (mouseVector - vector) / 30;

                // Run through the active layer's children list and change
                // the position of the placed symbols:
                for (var i = 0; i < count; i++) {
                    var item = project.activeLayer.children[i];
                    var size = item.bounds.size;
                    var length = (vector.length / 10 * size.width / 10) / 10;
                    
                    item.position += vector.normalize(length) + item.data.vector;
                    keepInView(item);
                }
            }

            function keepInView(item) {
                var position = item.position;
                var viewBounds = view.bounds;
                if (position.isInside(viewBounds))
                    return;
                var itemBounds = item.bounds;
                if (position.x > viewBounds.width + 5) {
                    position.x = -item.bounds.width;
                }

                if (position.x < -itemBounds.width - 5) {
                    position.x = viewBounds.width;
                }

                if (position.y > viewBounds.height + 5) {
                    position.y = -itemBounds.height;
                }

                if (position.y < -itemBounds.height - 5) {
                    position.y = viewBounds.height
                }
            }
        </script>
        
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
    <body id="top">
        <?php displayHeader(); ?>
        <div class="title-container">
            <div class="cell cell-middle hpadding-small text-centered">
                <div class="logo-container">
                    <canvas id="logo-background" resize></canvas>
                    <img class="logo" src="/resources/images/title-logo.png" width="500">
                </div>
                <h3 class="vpadding-small">Loughborough University's <strong>Tech and Coding</strong> Society</h3>
                <p><a href="https://www.lsu.co.uk/society/lsuhack/" target="_blank"><button>Join</button></a></p>
                <p class="scroll-indicator vpadding-regular">
                    <svg width="26" height="26" viewBox="0 0 9.5249998 9.5250002">
                        <g class="arrow" transform="translate(0 -287.47)" fill="none" stroke="#4ac0de" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2.6458 292.77 2.1167 2.6458 2.1167-2.6458" stroke-width="1.2"/>
                            <path d="m4.7625 295.41v-6.35" stroke-width="1.2"/>
                        </g>
                    </svg>
                </p>
            </div>
        </div>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section text-centered vpadding-mid">
                    <div class="content-text-width">
                        <h2>About Us</h2>
                        <p>The Loughborough Technology Society is a great way to meet like-minded people. You can work on any ideas or projects you have and we can help you get access to anything you may need.</p>
                        <p>If you know nothing about computers, electronics or technology and would like to learn more then definitely come along. We can help you get started and point you in the right direction of the tools and resources you need.</p>
                    </div>
                </section>
                <section class="section text-centered vpadding-mid">
                    <div class="content-text-width">
                        <h2>Keep up-to-date!</h2>
                        <p>By joining the Loughborough Technology Society, you will be invited to our internal Slack Channel and receive emails about upcoming events and sessions.</p>
                        <p>Feel free to stay up-to-date with us on social media or shoot us a facebook message if you have any questions!</p>
                        <p>
                            <a href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="nofollow"><button><i class="fa fa-facebook"></i> Facebook</button></a>
                            <a href="https://twitter.com/lborotechsoc" target="_blank" rel="nofollow"><button><i class="fa fa-twitter"></i> Twitter</button></a>
                            <a href="https://discord.gg/N7KxW2G" target="_blank" rel="nofollow"><button><i class="discord-logo"></i> Discord</button></a>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>