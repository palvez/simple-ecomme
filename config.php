<?php
    $user = getenv("DB_USER");
    $password = getenv("DB_PASSWORD");
    $dbhost = getenv("DB_HOST");
    $dbdatabase = getenv("DB_DATABASE");
	ini_set('display_errors',1);
	error_reporting(-1);
    define('DB_HOST', '"$dbhost"');
    define('DB_USER', '"$user"');
    define('DB_PASSWORD', '"$user"');
    define('DB_DATABASE', '"$dbdatabase"');
?>
