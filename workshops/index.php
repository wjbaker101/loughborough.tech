<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Workshops</title>
        
        <meta name="description" content="View descriptions, resources and photos of past TechSoc hosted workshops.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .workshops-container img
            {
                height: 150px;
            }
            
            .modal
            {
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                display: none;
                position: fixed;
                background-color: rgba(0, 0, 0, 0.2);
                z-index: 11;
            }
            
            .modal.is-open
            {
                display: table;
            }
            
            .modal.is-open .card
            {
                margin-top: 4em;
                animation: modal-appear 0.5s;
            }
            
            @keyframes modal-appear
            {
                from
                {
                    transform: translateY(2em);
                }
                
                to
                {
                    transform: translateY(0);
                }
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js" defer></script>
        
        <script>
            window.addEventListener('load', () =>
            {
                MicroModal.init(
                {
                    disableScroll: true,
                    onClose: close,
                    onOpen: open,
                });
            });
        </script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Workshops</h1>
        <div class="workshops-container content-width hpadding-small vpadding-mid">
            <?php include('resources/get-workshops.php'); ?>
        </div>
        <?php include('sessions/get-sessions.php'); ?>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>