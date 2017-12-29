<?php

require_once(ROOT . '/resources/page/content/footer-nav-links.php');
require_once(ROOT . '/resources/page/content/header-nav-links.php');

$date = (new DateTime())->format("Y");

?>

<footer>
    <div class="navigation bg-light-grey padding-small">
        <div class="content-width cell-row text-centered">
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h3>Navigation</h3>
                <ul>
                    <?php
                    
                    foreach ($footerNavLinks as $link)
                    {
                        echo "<li><a class=\"page-link\" href=\"{$link->url}\">{$link->name}</a></li>";
                    }
                    
                    ?>
                </ul>
            </div>
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h3>Social Media</h3>
                <ul>
                    <?php
                    
                    foreach ($socialMediaLinks as $link)
                    {
                        echo "<li><a class=\"page-link\" href=\"{$link->url}\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab {$link->icon} fa-fw\"></i> {$link->name}</a></li>";
                    }
                    
                    ?>
                </ul>
            </div>
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h2>Committee</h2>
                <!--<ul>
                    <li>Olly Pethick</li>
                    <li>Jakub Holewik</li>
                    <li>Vinay Longia</li>
                    <li>Irina Gongu</li>
                    <li>Jasmeen Tatani</li>
                    <li>Amanvir Dhoot</li>
                    <li>Will Baker</li>
                    <li>Josh Wilkinson</li>
                </ul>-->
            </div>
        </div>
    </div>
    <div class="copyright bg-dark-grey">
        <div class="content-width hpadding-small vpadding-small clearfix">
            <p class="float-l">Copyright &copy; 2016-<?= $date; ?></p>
            <p class="float-r">Loughborough Technology Society</p>
        </div>
    </div>
</footer>