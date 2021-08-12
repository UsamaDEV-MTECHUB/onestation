 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['updatepricingtitle']!=$_GET['updatepricingtitle']) {
    echo $title=$_GET['updatepricingtitle'];
}
else {
    echo $title=$_SESSION['updatepricingtitle'];
}

if($_SESSION['updatepricingprice']!=$_GET['updatepricingprice']) {
    echo $price=$_GET['updatepricingprice'];
}
else {
  echo   $price=$_SESSION['updatepricingprice'];
}

if($_SESSION['updatepricings_id']!=$_GET['updatepricings_id']) {
    echo $sid=$_GET['updatepricings_id'];
}
else {
  echo   $sid=$_SESSION['updatepricings_id'];
}
echo $_GET['updatepricingid'];


$sql="UPDATE pricing SET s_id='$sid',title='$title',price='$price' WHERE id='$_GET[updatepricingid]'";
$run=mysqli_query($conn,$sql);
if($run) {
  echo 'done';
}
header('location:../pricing.php?action=done');
    
          ?>
