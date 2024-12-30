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


