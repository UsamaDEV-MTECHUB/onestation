<?php
session_start();
include('../assets/include/db.php');


if(isset($_POST['update'])) {
    echo $_SESSION['pre_icon'];
   echo  $newicon='images/gallery/'.basename($_FILES["icon"]["name"]);
    if($_SESSION['pre_icon']==$newicon) {
        echo 'file are same ';
        header('location:../aboutus.php?action=done');
     }
    else {
        echo 'file are diff '; 

        unlink('../../'.$_SESSION['pre_icon']);

        $target_dir = "../../images/gallery/";
        $target_file = $target_dir . basename($_FILES["icon"]["name"]);
         if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
             $dbpath='images/gallery/'.basename($_FILES["icon"]["name"]);
        $sql="UPDATE about_gallery  SET image='$dbpath' WHERE  id='$_POST[id]'";
        $run=mysqli_query($conn,$sql);
        if($run) { 
            header('location:../aboutus.php?action=done'); 
            echo 'done';
        }
        else {
            echo 'error';
        }
          } else {
            echo "Sorry, there was an error uploading your file.";
          }

    }
}

/*
$sql="UPDATE about SET title='$_GET[title]',detail='$_GET[detail]',happy_clients='$_GET[happy_clients]',skilled_experts='$_GET[skilled_experts]',finished_projects='$_GET[finished_projects]',media_posts='$_GET[media_posts]' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    header('location:../aboutus.php?action=done');
}
  */  
          ?>
