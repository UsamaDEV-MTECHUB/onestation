<?php
session_start();
include('../assets/include/db.php');


if(isset($_GET['update'])) {
 
$sql="UPDATE career_posts SET title='$_GET[title]',description='$_GET[description]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../career.php?action=done');
}}
   
          ?>
