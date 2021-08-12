 <?php
session_start();
include('../assets/include/db.php');

if($_SESSION['updateblogcategoryname']!=$_POST['updateblogcategoryname']) {
$name=$_POST['updateblogcategoryname'];
}
else {
    $name=$_SESSION['updateblogcategoryname'];
}



$sql="UPDATE blog_category SET name='$name' WHERE  id='$_POST[updateservicecategoryid]'";
$run=mysqli_query($conn,$sql);
header('location:../blog_category.php?action=done');
    
          ?>
