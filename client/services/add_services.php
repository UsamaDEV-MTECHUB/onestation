 <?php
            session_start();

    
      include('../assets/include/db.php');

$sql="INSERT INTO services (s_cat_id,title,subtitle,description,futher_detail,process_detail) VALUES ('$_POST[service_category]','$_POST[title]','$_POST[subtitle]','$_POST[description]','0','0')";
$run=mysqli_query($conn,$sql);
     $sid='';
     $sql_s_id="SELECT id from services WHERE title='$_POST[title]'";
     $run_s_id=mysqli_query($conn,$sql_s_id);
     while($row_s_id=mysqli_fetch_assoc($run_s_id)) {
      $sid= $row_s_id['id'];
   
     }
     $sql="INSERT INTO service_detail(s_id,s_cat_id) VALUES('$sid','$_POST[service_category]')";
$run=mysqli_query($conn,$sql);
     $sql="INSERT INTO process (s_id) VALUES('$sid')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
  




          ?>
