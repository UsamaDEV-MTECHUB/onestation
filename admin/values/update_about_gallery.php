<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE vision_detail SET title='$_POST[title]',description='$_POST[description]' WHERE  id='$_POST[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../values.php?action=done');
}
 
          ?>
