 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['updateservicetitle']!=$_POST['updateservicetitle']) {
$title=$_POST['updateservicetitle'];
}
else {
    $title=$_SESSION['updateservicetitle'];
}

if($_SESSION['updateservicesubtitle']!=$_POST['updateservicesubtitle']) {
$subtitle=$_POST['updateservicesubtitle'];
}
else {
    $subtitle=$_SESSION['updateservicesubtitle'];
}

if($_SESSION['updateservicedescription']!=$_POST['updateservicedescription']) {
$description=$_POST['updateservicedescription'];
}
else {
    $description=$_SESSION['updateservicedescription'];
}




$sql="UPDATE services SET title='$title',subtitle='$subtitle',description='$description' WHERE  id='$_POST[updateserviceid]'";
$run=mysqli_query($conn,$sql);
header('location:../services.php?action=done');
    
          ?>
