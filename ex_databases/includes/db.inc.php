<?php

require 'vendor/autoload.php';

// load in .env from root directory
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '\..\..');
$dotenv->load();

$DBSERV = "localhost";
$DBUSER = $_ENV['DBUSER'];
$DBPASS = $_ENV['PASSWORD'];
$DBNAME = $_ENV['DBNAME'];

$conn = mysqli_connect($DBSERV, $DBUSER, $DBPASS, $DBNAME);

?>