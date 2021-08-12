<?php
$server = 'localhost';
$username ='root';
$password ='';
$db='sample_onestation';
$conn =mysqli_connect($server,$username,$password,$db);
 if(!$conn) {
     echo 'error';
 }
?>