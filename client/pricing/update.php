 <?php
            session_start();

    
      include('../assets/include/db.php');


   
    $p_list_id=1;
    echo $p_id=$_POST['p_id'];
    
    $description=$_POST['description'];
    
    $sql_del="DELETE FROM pricing_detail WHERE p_id=$p_id";
    $run_del=mysqli_query($conn,$sql_del);
   
if($run_del) {
  echo 'done';
}
  
    foreach ($description as $key => $value) {
    
      $sql="INSERT INTO pricing_detail(p_id,p_list_id,description) VALUES ('$p_id','$p_list_id','$value')";
      $run=mysqli_query($conn,$sql);
      if($run) {
          echo 'done';
          $p_list_id++;
      }  echo $value.'<br>';
      //  echo $description[$key].'<br>';
       // echo $icon[$key].'<br>';
    }
    header('location:../pricing.php?action=done');

// $sql_u="UPDATE services SET process_detail=1 WHERE id=$s_id";
 //       $run_u=mysqli_query($conn,$sql_u);
  
   





          ?>
