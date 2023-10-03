<?php
session_start();
$server="localhost";
$username="root";
$password="";

// Create a database connection
$connection=mysqli_connect($server,$username,$password);

// Check for connection success
if(!$connection){
    die("connection to this database failed due to".musqli_connect_error());
}
?>