<?php
	ini_set('display_errors',1);
	error_reporting(-1);
	define('DB_HOST', 'getenv("DB_HOST")');
    define('DB_USER', 'getenv("DB_USER")');
    define('DB_PASSWORD', 'getenv("DB_PASSWORD")');
    define('DB_DATABASE', 'getenv("DB_DATABASE")');
?>
