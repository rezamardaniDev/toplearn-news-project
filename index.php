<?php

// session start
session_start();

//initial config
define('BASE_PATH', __DIR__);
define('CURRENT_DOMAIN', currentDomain() . '/project/');
define('DISPLAY_ERROR', true);

// database config
define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// helpers
function protocol()
{
    return stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
}

function currentDomain()
{
    return protocol() . $_SERVER['HTTP_HOST'];
}

function asset(string $src)
{
    $domain = trim(CURRENT_DOMAIN, '/ ');
    $src = $domain . '/' . trim($src, '/');
    return $src;
}

function url(string $url)
{
    $domain = trim(CURRENT_DOMAIN, '/ ');
    $src = $domain . '/' . trim($url, '/');
    return $src;
}

function currentUrl()
{
    return currentDomain() . $_SERVER['REQUEST_URI'];
}