 <?php
            session_start();

    
      include('../assets/include/db.php');
$date=date('d-m-y');
$target_dir = "../../images/blog/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/blog/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO blogs (b_id, title, description, image, publish_date ) VALUES
('$_POST[b_id]','$_POST[title]','$_POST[description]','$dbpath','$date')";
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
