<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE case_study_front_page SET title='$_GET[title]',heading='$_GET[heading]',description='$_GET[description]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../case_study_front_page.php?action=done');
}
    
          ?>
