 <?php
            session_start();

    
      include('../assets/include/db.php');

      

      $sqll="SELECT * FROM testimonial WHERE id='$_GET[id]'";
      $runl=mysqli_query($conn,$sqll);
      while($rowl=mysqli_fetch_assoc($runl)) {
          if($rowl['id']==$_GET['id']) {
             unlink('../../'.$rowl['image']);
          }
      }


$sql="DELETE FROM testimonial WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
    if($run) {
        echo 'done';
    }
          ?>
