<?php
$dbhost = "localhost" ;
$dbuser = "root";
$dbpass = "";
$dbname = "khata";
session_start();
date_default_timezone_set('Asia/Kolkata'); //fun is used to set default timezone
#######################################################
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
    die("connection failed");
}
