 <?php
            session_start();

    
      include('../assets/include/db.php');
$date=date('d-m-y');
$target_dir = "../../images/project/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/project/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO case_study_detail (v_id, title, image) VALUES ('$_POST[v_id]','$_POST[title]','$dbpath')";
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
