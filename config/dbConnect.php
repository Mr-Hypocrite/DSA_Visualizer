<?php

    try {
        $dir = $_SERVER['DOCUMENT_ROOT'];

        require $dir.'/vendor/autoload.php';

        $dotenv = Dotenv\Dotenv::createImmutable($dir);
        $dotenv->load();

        $userName = $_ENV['userName'];
        $password = $_ENV['password'];
        $database = $_ENV['database'];
        $port = $_ENV['port'];
        $host = $_ENV['host'];

        $con = pg_connect("host=". $host .  " port=" . $port . " dbname=" . $database . " user=" . $userName . " password=" . $password . " sslmode=require");
    } catch (Error $e) {
        echo "Couldn't connect to the database, Error: $e";
    }
?>