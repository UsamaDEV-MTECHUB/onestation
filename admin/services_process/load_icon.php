 <?php
            session_start();

    
      include('../assets/include/db.php');
echo '<div class="row text-center">';
$src='src';
 $sql="SELECT * FROM icon_pack";

                                    $run=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($run)) {
                                         echo '<div class="col-md-3 btn-group" >
                                         <label class="checkbox checkbox-primary btn btn-hover-light-primary">
                    <input type="checkbox" name="icon[]"  value="'.$row['id'].'" />
                    <span class="mr-2"></span>
                    <img src="../'.$row['image'].' " class=""  width="50px" />
                </label>                </div>';
                                        
                                    }
   
    echo '</div>';
          ?>
