<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE mission_and_vision SET title='$_GET[title]',heading='$_GET[heading]',description='$_GET[description]',vision='$_GET[vision]',mission='$_GET[mission]',happy_clients='$_GET[happy_clients]',skilled_experts='$_GET[skilled_experts]',finished_projects='$_GET[finished_projects]',media_posts='$_GET[media_posts]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../visionandmission.php?action=done');
}
    
          ?>
