 <?php
            session_start();

    
      include('../assets/include/db.php');

$target_dir = "../../images/avatar/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/avatar/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO testimonial (image,description, name, title) VALUES ('$dbpath','$_POST[Description]','$_POST[name]','$_POST[title]')";
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
