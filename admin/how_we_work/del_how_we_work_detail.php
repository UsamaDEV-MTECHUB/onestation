 <?php
            session_start();

    
      include('../assets/include/db.php');

   

$sql="DELETE FROM how_we_work_detail WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
    if($run) {
        echo 'done';
    }
          ?>
