 <?php
            session_start();

    
      include('../assets/include/db.php');


   
    $p_list_id=1;
    $s_id=$_POST['s_id'];
    $title=$_POST['title'];
    $icon=$_POST['icon'];
    $description=$_POST['description'];
    
    
    foreach ($title as $key => $value) {
    
        $sql="INSERT INTO process(s_id,p_list_id,title,description,icon_id) VALUES ('$s_id','$p_list_id','$value','$description[$key]','$icon[$key]')";
        $run=mysqli_query($conn,$sql);
        if($run) {
            echo 'done';
            $p_list_id++;
        }
            
    }

 $sql_u="UPDATE services SET process_detail=1 WHERE id=$s_id";
        $run_u=mysqli_query($conn,$sql_u);
    
    
   





          ?>
