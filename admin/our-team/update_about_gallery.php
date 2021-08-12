<?php
session_start();
include('../assets/include/db.php');


if(isset($_POST['update'])) {
    echo $_SESSION['pre_img'];
   echo  $newicon='images/gallery/'.basename($_FILES["icon"]["name"]);
    if($_SESSION['pre_img']==$newicon) {
        echo 'file are same ';
        header('location:../our_team.php?action=done');
     }
    else {
        echo 'file are diff '; 

        unlink('../../'.$_SESSION['pre_icon']);

        $target_dir = "../../images/team/";
        $target_file = $target_dir . basename($_FILES["icon"]["name"]);
         if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
             $dbpath='images/team/'.basename($_FILES["icon"]["name"]);
        $sql="UPDATE our_heros  SET image='$dbpath',name='$_POST[name]',title='$_POST[title]',fb_link='$_POST[fb_link]',twitter_link='$_POST[twitter_link]',linkedin_link='$_POST[linkedin_link]' WHERE  id='$_POST[id]'";
        $run=mysqli_query($conn,$sql);
        if($run) { 
            header('location:../our_team.php?action=done'); 
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
