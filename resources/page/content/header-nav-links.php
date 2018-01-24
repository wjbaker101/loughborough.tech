<?php

function createHeaderNavLink($name, $url)
{
    return (object)
    [
        'name' => $name,
        'url' => $url,
    ];
}

$headerNavLinks = array
(
    createHeaderNavLink('home', '/'),
    createHeaderNavLink('about', '/about/'),
    createHeaderNavLink('events', '/events/'),
    createHeaderNavLink('stash', '/stash/'),
    createHeaderNavLink('workshops', '/workshops/'),
);

?>