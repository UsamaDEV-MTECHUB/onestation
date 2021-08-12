 <?php
            session_start();

    
      include('../assets/include/db.php');

$target_dir = "../../images/gallery/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/gallery/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO about_gallery (image) VALUES ('$dbpath')";
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
