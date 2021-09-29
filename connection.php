<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

$con=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$con) {
    die(' Please Check Your Connection'.mysqli_error($con));
} else {
    printf("Connected to the database");
}
?>