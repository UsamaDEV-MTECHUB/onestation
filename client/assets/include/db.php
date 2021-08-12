<?php
$server = 'localhost';
$username ='one_user';
$password ='mtechub123';
$db='onestation';
$conn =mysqli_connect($server,$username,$password,$db);
 if(!$conn) {
     echo 'error';
 }
?>