<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Sitemap</title>
        
        <meta name="description" content="View all content from the Loughborough Technology website.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style></style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Sitemap</h1>
        <div class="vmargin-small padding-small">
            <div class="content-text-width">
                <h2 class="">Major Pages:</h2>
                <ul>
                    <li><a class="page-link" href="/">Homepage</a></li>
                    <li><a class="page-link" href="/about/">About</a></li>
                    <li><a class="page-link" href="/events/">Society Events</a></li>
                    <li><a class="page-link" href="/stash/">Stash</a></li>
                    <li><a class="page-link" href="/workshops/">Workshops</a></li>
                </ul>
            </div>
        </div>
        <div class="bordered-section vmargin-small padding-small">
            <div class="content-text-width">
                <h2 class="">Event Pages:</h2>
                <ul>
                    <li><a class="page-link" href="/code-and-chill/">Code and Chill Sessions</a></li>
                </ul>
            </div>
        </div>
        <div class="vmargin-small padding-small">
            <div class="content-text-width">
                <h2 class="">External Pages:</h2>
                <ul>
                    <?php
                    
                    require_once(ROOT . '/resources/page/utils/nav-links.php');

                    for ($i = 0; $i < count($socialMediaLinks); ++$i)
                    {
                        echo "<li><a class=\"page-link\" href=\"{$socialMediaLinks[$i]->url}\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab {$socialMediaLinks[$i]->icon} fa-fw\"></i> {$socialMediaLinks[$i]->name}</a></li>";
                    }
                    
                    ?>
                    <li><a class="page-link" href="https://www.lsu.co.uk/society/techsoc/" target="_blank" rel="noopener noreferrer">LSU Site</a></li>
                    <li><a class="page-link" href="https://github.com/wjbaker101/loughborough.tech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-github fa-fw"></i> GitHub</a></li>
                </ul>
            </div>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>