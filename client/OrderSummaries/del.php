 <?php
            session_start();

    
      include('../assets/include/db.php');
$sql="DELETE FROM order_summary WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
    if($run) {
        
    }
          ?>
