<?php

function createFooterNavLink($name, $url)
{
    return (object)
    [
        'name' => $name,
        'url' => $url,
    ];
}

$footerNavLinks = array
(
    createFooterNavLink('home', '/'),
    createFooterNavLink('about', '/about/'),
    createFooterNavLink('events', '/events/'),
    createFooterNavLink('stash', '/stash/'),
    createFooterNavLink('workshops', '/workshops/'),
    createFooterNavLink('sitemap', '/sitemap.php'),
);

?>