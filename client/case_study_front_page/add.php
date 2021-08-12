 <?php
            session_start();

    
      include('../assets/include/db.php');

$target_dir = "../../images/services/icon/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/services/icon/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO services (title,subtitle,description,icon,futher_detail) VALUES ('$_POST[title]','$_POST[subtitle]','$_POST[description]','$dbpath','0')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }




          ?>
