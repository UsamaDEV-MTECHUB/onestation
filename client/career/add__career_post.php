 <?php
            session_start();

    
      include('../assets/include/db.php');


  
$sql="INSERT INTO career_posts(title, description) VALUES ('$_POST[title]','$_POST[description]')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}



          ?>
