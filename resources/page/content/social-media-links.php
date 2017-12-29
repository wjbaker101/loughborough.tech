<?php

function createSocialMediaLink($name, $url, $icon)
{
    return (object)
    [
        'name' => $name,
        'url' => $url,
        'icon' => $icon,
    ];
}

$socialMediaLinks = array
(
    createSocialMediaLink('Facebook', 'https://www.facebook.com/lborotechsoc', 'fa-facebook'),
    createSocialMediaLink('Twitter', 'https://twitter.com/lborotechsoc', 'fa-twitter'),
    //createSocialMediaLink('Instagram', 'https://www.instagram.com/lborotechsoc/', 'fa-instagram'),
    createSocialMediaLink('GitHub', 'https://github.com/wjbaker101/loughborough.tech/', 'fa-github'),
    createSocialMediaLink('Discord', 'https://discord.gg/N7KxW2G', 'fa-discord'),
);

?>