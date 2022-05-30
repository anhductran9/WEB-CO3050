<?php
$servername='localhost';
$username='root';
$password='18022000';
$dbname = "renglish";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:');
}