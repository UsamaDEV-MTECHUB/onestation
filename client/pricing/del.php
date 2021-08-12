 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="DELETE FROM pricing WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
    if($run) {
        echo 'done';
    }
$sqll="DELETE FROM pricing_detail WHERE p_id='$_GET[id]'";
$runl=mysqli_query($conn,$sqll);
    if($runl) {
        echo 'done';
    }
          ?>
