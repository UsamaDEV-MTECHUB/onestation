 <?php
            session_start();

    
      include('../assets/include/db.php');


   
    $p_list_id=1;
    $p_id=$_POST['p_id'];
     $description=$_POST['description'];
    
    
    foreach ($description as $key => $value) {
    
        $sql="INSERT INTO pricing_detail (p_id,p_list_id,description) VALUES ('$p_id','$p_list_id','$value')";
        $run=mysqli_query($conn,$sql);
        if($run) {
            echo 'done';
            $p_list_id++;
        }
            
    }
 $sql_u="UPDATE pricing SET pricing_detail=1 WHERE id=$p_id";
       $run_u=mysqli_query($conn,$sql_u);
    
    
   





          ?>
