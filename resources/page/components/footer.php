<?php

require_once(ROOT . '/resources/page/content/footer-nav-links.php');
require_once(ROOT . '/resources/page/content/social-media-links.php');

$date = (new DateTime())->format("Y");

$navHTML = '';

foreach ($footerNavLinks as $link)
{
    $navHTML .= "<li><a class=\"page-link\" href=\"{$link->url}\">{$link->name}</a></li>";
}

$socialMediaHTML = '';

foreach ($socialMediaLinks as $link)
{
    $socialMediaHTML .= "<li><a class=\"page-link\" href=\"{$link->url}\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fab {$link->icon} fa-fw\"></i> {$link->name}</a></li>";
}

?>

<footer>
    <div class="navigation bg-light-grey padding-small">
        <div class="content-width text-centered">
            <h3>Navigation</h3>
            <ul class="nav-container clearfix">
                <?= $navHTML ?>
            </ul>
            <h3>Social Media</h3>
            <ul class="nav-container clearfix">
                <?= $socialMediaHTML ?>
            </ul>
        </div>
    </div>
    <div class="copyright bg-dark-grey">
        <div class="content-width hpadding-small vpadding-small clearfix">
            <p class="float-l">Copyright &copy; 2016-<?= $date; ?></p>
            <p class="float-r">Loughborough Technology Society</p>
        </div>
    </div>
</footer>