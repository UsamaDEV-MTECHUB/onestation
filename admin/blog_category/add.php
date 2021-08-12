 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="INSERT INTO blog_category (name) VALUES ('$_POST[name]')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
 




          ?>
