<?php

if (empty( $_REQUEST['src'] )) {
    exit;
}

require_once 'vendor/autoload.php';

// Set the time the cache is cleaned (Since the image generation) to one month (2592000/60/60/24=30)
define( 'FILE_CACHE_MAX_FILE_AGE', 2592000 );

// Use the default system cache dir so your project's folder stays clean.
define ('FILE_CACHE_DIRECTORY', sys_get_temp_dir());

// Quality set to 100%
define( 'DEFAULT_Q', 100 );

// known external sites (flickr,imgur etc...)
define( 'ALLOW_EXTERNAL', true );

// probably you don't want to turn this on
define( 'ALLOW_ALL_EXTERNAL_SITES', false );

// Start timthumb.
timthumb::start();
