 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="INSERT INTO pricing (s_id,title,price,pricing_detail) VALUES ('$_POST[s_id]','$_POST[title]','$_POST[price]','0')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
 




          ?>
