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
    (object)["name" => "stash", "url" => "/stash/"]
);

$socialMediaLinks = array
(
    (object)["icon" => "fa-facebook", "url" => "https://facebook.com/lsuhack"],
    (object)["icon" => "fa-twitter", "url" => "https://twitter.com/lsuhack"],
    (object)["icon" => "fa-github", "url" => "https://github.com/lsuhack"]
);

initialise();

/**
 * Sets up initial variables and settings before page is rendered.
 */
function initialise()
{
    
}

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
    
    $links = ""; // Stores the HTML code for the website links
    for ($i = 0; $i < count($navLinks); ++$i)
    {
        // Creates each link in the format:
        // <a href="url">name</a>
        $links .= "<a href=" . $navLinks[$i]->url . ">" . $navLinks[$i]->name . "</a>";
    }
    
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
    
    $links = ""; // Stores the HTML code for the website links
    for ($i = 0; $i < count($navLinks); ++$i)
    {
        // Creates each link in the format:
        // <a href="url">name</a>
        $links .= "<a href=" . $navLinks[$i]->url . " class='hover-text-theme'>" . $navLinks[$i]->name . "</a>";
    }
    
    $socialLinks = ""; // Stores the HTML code for the social media links
    for ($i = 0; $i < count($socialMediaLinks); ++$i)
    {
        // Creates each link in the format:
        // <a href="url"><i class="fa fa-icon"></i></a>
        $socialLinks .= "<a href=\"" . $socialMediaLinks[$i]->url . "\" target=\"_blank\"><i class=\"fa " . $socialMediaLinks[$i]->icon . "\"></i></a>";
    }
    
    $year = (new DateTime())->format("Y");
    
    $html = <<<EOT
        <footer role="footer" class="hpadding-small vpadding-mid">
            <div class="content-width text-centered">
                <section class="section navigation">
                    ${links}
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