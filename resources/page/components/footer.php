<?php $date = (new DateTime())->format("Y"); ?>

<footer>
    <div class="navigation bg-light-grey padding-small">
        <div class="content-width cell-row text-centered">
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h3>Navigation</h3>
                <ul>
                    <?php
                    
                    require_once(ROOT . '/resources/page/utils/nav-links.php');

                    for ($i = 0; $i < count($navLinks); ++$i)
                    {
                        echo "<li><a class=\"page-link\" href=\"{$navLinks[$i]->url}\">{$navLinks[$i]->name}</a></li>";
                    }
                    
                    ?>
                </ul>
            </div>
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h3>Social Media:</h3>
                <ul>
                    <?php
                    
                    require_once(ROOT . '/resources/page/utils/nav-links.php');

                    for ($i = 0; $i < count($socialMediaLinks); ++$i)
                    {
                        echo "<li><a class=\"page-link\" href=\"{$socialMediaLinks[$i]->url}\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab {$socialMediaLinks[$i]->icon} fa-fw\"></i> {$socialMediaLinks[$i]->name}</a></li>";
                    }
                    
                    ?>
                </ul>
            </div>
            <div class="v-card-content cell l4 m12 hpadding-small vpadding-small">
                <h2>Committee:</h2>
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