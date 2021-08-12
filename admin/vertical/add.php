 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="INSERT INTO vertical (heading,title,overview_heading,overview_detail,result_title,result_description) VALUES ('$_POST[heading]','$_POST[title]','$_POST[overview_heading]','$_POST[overview_detail]','$_POST[result_title]','$_POST[result_description]')";
$run=mysqli_query($conn,$sql);
if($run) {
    echo 'done';
}
else {
    echo 'error';
}
 




          ?>
