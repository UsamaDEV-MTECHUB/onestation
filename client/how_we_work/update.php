<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE how_we_work SET title='$_GET[title]',heading='$_GET[heading]',description='$_GET[description]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../howwework.php?action=done');
}
    
          ?>
