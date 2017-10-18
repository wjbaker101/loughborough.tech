<?php

/**
 * Creates an array of links.
 * Used for the header and footer navigation
 */
$navLinks = array
(
    (object)["name" => "home", "url" => "/"],
    (object)["name" => "about", "url" => "/about/"],
    (object)["name" => "events", "url" => "/events/"],
    (object)["name" => "stash", "url" => "/stash/"],
);

$socialMediaLinks = array
(
    (object)["icon" => "fa-facebook", "url" => "https://www.facebook.com/lborotechsoc"],
    (object)["icon" => "fa-twitter", "url" => "https://twitter.com/lborotechsoc"],
    (object)["icon" => "fa-instagram", "url" => "https://www.instagram.com/lborotechsoc/"],
    (object)["icon" => "fa-github", "url" => "https://github.com/wjbaker101/loughborough.tech/"],
    (object)["icon" => "discord-logo", "url" => "https://discord.gg/N7KxW2G"],
);

/**
 * Displays defualt HTML tags inside <head></head> tags.
 */
function displayHead()
{
    $html = ``;

    $html = <<<EOT
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="/resources/style/css/webstyle.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="/resources/scripts/webjs.js"></script>
EOT;
    
    echo $html;
}

/**
*
* Displays HTML for the page header.
*/
function displayHeader()
{
    global $navLinks; //Gets the navigation links from the global variable
    
    // Creates each link in the format:
    // <a href="url">name</a>
    function createHeaderLinkHTML($navLink)
    {
        return "<a href='{$navLink->url}'>{$navLink->name}</a>";
    }
    
    $links = "";
    for ($i = 0; $i < count($navLinks); ++$i)
    {
        $links .= createHeaderLinkHTML($navLinks[$i]);
    }
    
    $links .= "<a href='https://lsu.co.uk/elections/vote/811' class='page-link-underline'>elections!</a>";
    
    $html = <<<EOT
        <header role="header" class="hpadding-small vpadding-mid bg-white">
            <div class="content-width clearfix">
                <div class="header-lsu-logo">
                    <a href="https://www.lsu.co.uk/society/lsuhack/">
                        <img width="96" height="120" src="/resources/images/lsu-logo-black.png">
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
                    ${links}
                </nav>
            </div>
        </header>
EOT;
    
    echo $html;
}

/**
*
* Displays HTML for the page footer.
*/
function displayFooter()
{
    global $navLinks, $socialMediaLinks; //Gets the navigation and social media links from the global variables
    
    // Creates each link in the format:
    // <a href="url" class="hover-text-theme">name</a>
    function createFooterLinkHTML($navLink)
    {
        return "<a href='{$navLink->url}' class='hover-text-theme'>{$navLink->name}</a>";
    }
    
    $links = "";
    for ($i = 0; $i < count($navLinks); ++$i)
    {
        $links .= createFooterLinkHTML($navLinks[$i]);
    }
    
    // Creates each link in the format:
    // <a href="url"><i class="fa fa-icon"></i></a>
    function createFooterSocialLinkHTML($socialLink)
    {
        return "<a class='hover-text-theme' href='{$socialLink->url}' target='_blank' rel='nofollow'><i class='fa {$socialLink->icon}'></i></a>";
    }
    
    $socialLinks = "";
    for ($i = 0; $i < count($socialMediaLinks); ++$i)
    {
        $socialLinks .= createFooterSocialLinkHTML($socialMediaLinks[$i]);
    }
    
    $year = (new DateTime())->format("Y");
    
    $html = <<<EOT
        <footer role="footer" class="hpadding-small vpadding-mid">
            <div class="content-width text-centered">
                <section class="section navigation">
                    <p>${links}</p>
                    <p>${socialLinks}</p>
                </section>
                <section class="section copyright">
                    <p>Copyright &copy; 2016-${year} Loughborough Technology Society</p>
                    <p>
                        <span>Website by William Baker</span><br>
                        <span>Logo by Henry White</span>
                    </p>
                </section>
            </div>
        </footer>
EOT;
    
    echo $html;
}

?>