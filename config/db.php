<?php

define('DB_HOST','localhost');
define('DB_NAME','test_store');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_CHARSET','utf8');

$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, DB_USER, DB_PASSWORD,
    array(
        PDO::ATTR_ERRMODE              =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE   =>  PDO::FETCH_ASSOC
    )
);