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

https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=37