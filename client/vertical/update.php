 <?php
session_start();
include('../assets/include/db.php');


$sql="UPDATE vertical SET heading='$_POST[heading]',title='$_POST[title]',overview_heading='$_POST[overview_heading]',overview_detail='$_POST[overview_detail]',result_title='$_POST[result_title]',result_description='$_POST[result_description]' WHERE  id='$_POST[id]'";
$run=mysqli_query($conn,$sql);
header('location:../vertical.php?action=done');
    
          ?>
