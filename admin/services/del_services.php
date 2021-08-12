 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="DELETE FROM services WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
$sql_ser="DELETE FROM service_detail WHERE s_id='$_GET[id]'";
$run_ser=mysqli_query($conn,$sql_ser);
$sql_p="DELETE FROM process WHERE s_id='$_GET[id]'";
$run_p=mysqli_query($conn,$sql_p);
    if($run_p) {
        $sqll="UPDATE services SET futher_detail = 0,process_detail=0 WHERE  id='$_GET[id]'";
        $runl=mysqli_query($conn,$sqll);
    }
          ?>
