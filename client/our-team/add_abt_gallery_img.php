 <?php
            session_start();

    
      include('../assets/include/db.php');

$target_dir = "../../images/team/";
$target_file = $target_dir . basename($_FILES["icon"]["name"]);
 if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
     $dbpath='images/team/'.basename($_FILES["icon"]["name"]);
$sql="INSERT INTO  our_heros (image,name,title,fb_link,twitter_link,linkedin_link) VALUES ('$dbpath','$_POST[name]','$_POST[title]','$_POST[fb]','$_POST[twitter]','$_POST[linkedin]')";
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
