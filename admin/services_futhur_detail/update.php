 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['updateservicefuthurdetailoverview']!=$_GET['updateservicefuthurdetailoverview']) {
$overview=$_GET['updateservicefuthurdetailoverview'];
}
else {
    $overview=$_SESSION['updateservicefuthurdetailoverview'];
}


if($_SESSION['updateservicefuthurdetailbackend']!=$_GET['updateservicefuthurdetailbackend']) {
$backend=$_GET['updateservicefuthurdetailbackend'];
}
else {
    $backend=$_SESSION['updateservicefuthurdetailbackend'];
}


if($_SESSION['updateservicefuthurdetailfrontend']!=$_GET['updateservicefuthurdetailfrontend']) {
$frontend=$_GET['updateservicefuthurdetailfrontend'];
}
else {
    $frontend=$_SESSION['updateservicefuthurdetailfrontend'];
}

if($_SESSION['updateservicefuthurdetailarchitecture']!=$_GET['updateservicefuthurdetailarchitecture']) {
$architecture=$_GET['updateservicefuthurdetailarchitecture'];
}
else {
    $architecture=$_SESSION['updateservicefuthurdetailarchitecture'];
}



$sql="UPDATE service_detail SET overview='$overview',backend='$backend',frontend='$frontend',architecture='$architecture' WHERE  id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'dome';
    $sqll="UPDATE services SET futher_detail = 1 WHERE  id='$_GET[id]'";
    $runl=mysqli_query($conn,$sqll);
}
header('location:../services_futhur_detail.php?action=done');
    
          ?>
