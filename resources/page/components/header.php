<header class="hpadding-small vpadding-mid">
    <div class="content-width clearfix">
        <div class="header-lsu-logo">
            <a href="https://www.lsu.co.uk/society/techsoc/" target="_blank" rel="noopener noreferrer">
                <img width="96" height="120" src="/resources/images/branding/lsu-logo-black.png">
            </a>
        </div>
        <div class="text-right">
            <button class="header-nav-button reset-button">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
            </button>
        </div>
        <nav class="text-right">
            <?php

            require_once(ROOT . '/resources/page/content/header-nav-links.php');

            foreach ($headerNavLinks as $link)
            {
                echo "<a href=\"{$link->url}\">{$link->name}</a>";
            }
            
            echo "<a class=\"page-link-underline\" href=\"code-and-chill\" style=\"--theme: var(--code-and-chill);--mono: var(--code-and-chill)\">code and chill</a>";

            ?>
        </nav>
    </div>
</header>