<?php
$connection = mysqli_connect('localhost', ' ', 'PASS');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, ' ');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
//Shakti Saurav
}