<?php
session_start();
include('../assets/include/db.php');



$sql="UPDATE about SET title='$_GET[title]',detail='$_GET[detail]',happy_clients='$_GET[happy_clients]',skilled_experts='$_GET[skilled_experts]',finished_projects='$_GET[finished_projects]',media_posts='$_GET[media_posts]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../aboutus.php?action=done');
}
    
          ?>
