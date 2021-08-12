<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE career SET title='$_GET[title]',heading='$_GET[heading]',projects_completed='$_GET[projects_completed]',description='$_GET[description]' WHERE id=1";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../career.php?action=done');
}
    
          ?>
