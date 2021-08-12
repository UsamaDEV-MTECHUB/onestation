<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE our_team SET title='$_GET[title]',heading='$_GET[heading]',projects_completed='$_GET[projects_completed]',description='$_GET[description]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../our_team.php?action=done');
}
    
          ?>
