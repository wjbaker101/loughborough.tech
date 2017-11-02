<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | About</title>
        
        <?php displayHead(); ?>
        
        <style>
            .committee
            {
                max-width: 750px;
                margin: 0 auto;
            }
            
            .committee-container
            {
                width: 175px;
                display: inline-block;
                vertical-align: top;
                margin-top: 2em;
            }
            
            .face-container
            {
                width: 150px;
                height: 150px;
                max-width: 100%;
                max-height: 100%;
                display: inline-block;
                border: 1px solid #fff;
                box-shadow: 0 0 0 1px #4ac0de;
                border-radius: 50%;
                overflow: hidden;
            }
            
            .face-container .face
            {
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            
            .face-container .face.olly { background-image: url(/resources/images/committee/olly.jpg); }
            .face-container .face.jakub { background-image: url(/resources/images/committee/jakub.jpg); }
            .face-container .face.vinay { background-image: url(/resources/images/committee/vinay.jpg); }
            .face-container .face.irina { background-image: url(/resources/images/committee/irina.jpg); }
            .face-container .face.jas { background-image: url(/resources/images/committee/jas.jpg); }
            .face-container .face.amanvir { background-image: url(/resources/images/committee/amanvir.jpg); }
            .face-container .face.will { background-image: url(/resources/images/committee/will.jpg); }
            .face-container .face.josh { background-image: url(/resources/images/committee/josh.jpg); }
            
            .committee-container .description
            {
                margin-top: 2em;
                padding-top: 1em;
                border-top: 1px solid #4ac0de;
            }
            
            .committee-container .description .name
            {
                font-size: 1.25em;
                font-weight: bold;
            }
            
            .committee-container .description .role
            {
                text-transform: uppercase;
                color: #4ac0de;
            }
        </style>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section">
                    <h1 class="text-centered">About the Society</h1>
                </section>
                <section class="committee section vpadding-mid text-centered">
                    <h2>Committee</h2>
                    <article class="committee-container">
                        <div class="face-container"><div class="face olly"></div></div>
                        <div class="description">
                            <p class="name">Olly Pethick</p>
                            <p class="role">CHAIR</p>
                            <p class="course">Computer Science</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face jakub"></div></div>
                        <div class="description">
                            <p class="name">Jakub Holewik</p>
                            <p class="role">SECRETARY</p>
                            <p class="course">Computer Science and AI</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face vinay"></div></div>
                        <div class="description">
                            <p class="name">Vinay Longia</p>
                            <p class="role">MATHEMATICS</p>
                            <p class="course">Computer Science and AI</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face irina"></div></div>
                        <div class="description">
                            <p class="name">Irina Gongu</p>
                            <p class="role">Events Coordinator</p>
                            <p class="course">ITMB</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face jas"></div></div>
                        <div class="description">
                            <p class="name">Jasmeen Tatani</p>
                            <p class="role">Media Officer</p>
                            <p class="course">Computer Science and AI</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face amanvir"></div></div>
                        <div class="description">
                            <p class="name">Amanvir Dhoot</p>
                            <p class="role">HARDWARE OFFICER</p>
                            <p class="course">Computer Science</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face will"></div></div>
                        <div class="description">
                            <p class="name">Will Baker</p>
                            <p class="role">SOFTWARE OFFICER</p>
                            <p class="course">Computer Science</p>
                        </div>
                    </article>
                    <article class="committee-container">
                        <div class="face-container"><div class="face josh"></div></div>
                        <div class="description">
                            <p class="name">Josh Wilkinson</p>
                            <p class="role">Innovation and Projects Officer</p>
                            <p class="course">Computer Science</p>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>