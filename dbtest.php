<?php
$dbhost = 'mysql.php-test-1.dns21.socgen';
$dbport = 3306;
$dbuser = 'mysql';
$dbpwd = 'sanjay123';
$dbname = 'sampledb';

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
