<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc</title>
        
        <meta name="description" content="TechSoc is Loughborough's Technology Society.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .scroll-arrow
            {
                position: absolute;
                bottom: 3em;
                left: 50%;
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

            .title-container
            {
                padding-top: 152px;
                padding-bottom: 152px;
            }
            
            .logo-container
            {
                position: relative;
                display: table;
                margin-left: auto;
                margin-right: auto;
                line-height: 0;
                background-color: var(--black);
            }
            
            #logo-background
            {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
            }
            
            .techsoc-logo
            {
                max-width: 100%;
                position: relative;
                z-index: 1;
            }
            
            .scroll-indicator.scrolled
            {
                opacity: 0;
                transition: opacity 0.5s;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script src="/resources/external/paper.js"></script>
        
        <script type="text/paperscript" canvas="logo-background">
            // Modified version of: http://paperjs.org/features/#symbols
            
            function onMouseMove(e){return mouseVector=-(view.center-e.point),!1}function onFrame(e){vector+=(mouseVector-vector)/30;for(var o=0;count>o;o++){var t=project.activeLayer.children[o],n=t.bounds.size,i=vector.length/10*n.width/10/10;t.position+=vector.normalize(i)+t.data.vector,keepInView(t)}}function keepInView(e){var o=e.position,t=view.bounds;if(!o.isInside(t)){var n=e.bounds;o.x>t.width+5&&(o.x=-e.bounds.width),o.x<-n.width-5&&(o.x=t.width),o.y>t.height+5&&(o.y=-n.height),o.y<-n.height-5&&(o.y=t.height)}}for(var count=20,path=new Path.Circle({center:[0,0],radius:10,fillColor:"#4ac0de",strokeColor:"#4ac0de"}),symbol=new Symbol(path),i=0;count>i;i++){var center=Point.random()*view.size,placed=symbol.place(center);placed.scale(i/count+.001),placed.data.vector=new Point({angle:360*Math.random(),length:i/count*Math.random()/5})}var vector=new Point({angle:45,length:0}),mouseVector=vector.clone();
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
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="title-container full-height cell-row">
            <div class="cell l12 cell-middle hpadding-small">
                <div class="logo-container">
                    <canvas id="logo-background" resize></canvas>
                    <img class="techsoc-logo" src="/resources/images/branding/techsoc-logo-white.png" width="500">
                </div>
                <h2 class="text-centered vpadding-small">Loughborough University's <span class="text-theme">Tech and Coding</span> Society</h2>
                <p class="text-centered"><a href="https://www.lsu.co.uk/society/techsoc/" target="_blank" rel="noopener noreferrer"><button>Join!</button></a></p>
                <div class="scroll-indicator">
                    <svg width="26" height="26" class="scroll-arrow" viewBox="0 0 9.5249998 9.5250002">
                        <g class="arrow" transform="translate(0 -287.47)" fill="none" stroke="var(--theme)" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2.6458 292.77 2.1167 2.6458 2.1167-2.6458" stroke-width="1.2"></path>
                            <path d="m4.7625 295.41v-6.35" stroke-width="1.2"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bordered-section hpadding-small vpadding-mid">
            <div class="content-text-width text-centered">
                <h2 class="underlined">About Us</h2>
                <div class="column-container section">
                    <div class="column l4 s6 padding-small">
                        <div class="card bg-white">
                            <div class="card-content hpadding-small vpadding-regular">
                                <i class="fas fa-code fa-3x text-theme"></i>
                            </div>
                            <div class="card-content hpadding-small clearfix">
                                <h4>Learn</h4>
                            </div>
                        </div>
                    </div>
                    <div class="column l4 s6 padding-small">
                        <div class="card bg-white">
                            <div class="card-content hpadding-small vpadding-regular">
                                <i class="fas fa-desktop fa-3x text-theme"></i>
                            </div>
                            <div class="card-content hpadding-small clearfix">
                                <h4>Create</h4>
                            </div>
                        </div>
                    </div>
                    <div class="column l4 s6 padding-small">
                        <div class="card bg-white">
                            <div class="card-content hpadding-small vpadding-regular">
                                <i class="fas fa-trophy fa-3x text-theme"></i>
                            </div>
                            <div class="card-content hpadding-small clearfix">
                                <h4>Achieve</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <p>The Loughborough Technology Society is a great way to meet like-minded people. You can work on any ideas or projects you have and we can help you get access to anything you may need.</p>
                    <p>If you know nothing about computers, electronics or technology and would like to learn more then definitely come along. We can help you get started and point you in the right direction of the tools and resources you need.</p>
                </div>
                <div class="section">
                    <a href="/about/"><button>View About Page!</button></a>
                </div>
            </div>
        </div>
        <div class="hpadding-small vpadding-xlarge">
            <div class="content-text-width text-centered">
                <h2 class="underlined">Keep Up-to-Date</h2>
                <p>By joining the Loughborough Technology Society, you will be invited to our Discord and receive emails about upcoming events and sessions.</p>
                <p><a class="button" href="https://www.facebook.com/lborotechsoc/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i> Facebook</a><a class="button" href="https://twitter.com/lborotechsoc" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i> Twitter</a><a class="button" href="https://discord.gg/N7KxW2G" target="_blank" rel="noopener noreferrer"><i class="fab fa-discord"></i> Discord</a></p>
            </div>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>