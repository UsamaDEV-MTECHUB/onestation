 <?php
session_start();
include('../assets/include/db.php');
include('../assets/include/script.php');

$overview='';
$backend='';
$frontend='';
$architecture='';

$sql="SELECT * FROM blogs WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
 $image=$row['image'];
 $title=$row['title'];
 $description=$row['description'];
 $b_id=$row['b_id'];
}
$_SESSION['pre_icon']=$image;
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" action="blog/update_about_gallery.php" method="POST" enctype="multipart/form-data">
<div class="modal-body" id="servicearea">

						  <!--begin::Title-->
						  
						  <div class="form-group ">
						<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Title</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" value="'.$title.'" required>
								<div class="fv-plugins-message-container"></div>
                                </div>
						 <label class=" font-weight-bolder text-dark">  Current Image:</label>
						 <img src="../'.$_SESSION['pre_icon'].'" class="col-3"/> <div class="fv-plugins-message-container"></div>
						  </div><br>
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Image :</label>
							  <input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="id" name="id" value="'.$id.'" required>
							  <input class="form-control h-auto py-4 rounded-lg " type="file" id="icon" name="icon" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  <div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Category</label>
                                <select name="b_id"  class="form-control h-auto py-4 rounded-lg " >'; ?>
  <?php
                                    
                                    $sqll="SELECT * FROM blog_category";
                                    $runl=mysqli_query($conn,$sqll);
                                    while($rowl=mysqli_fetch_assoc($runl)) {
                                        if ($b_id==$rowl['id']) {
                                        echo '<option value="'.$rowl['id'].'" selected>'.$rowl['name'].'</option>';    
                                        }
                                        else {
                                            echo '<option value="'.$rowl['id'].'">'.$rowl['name'].'</option>';
                                        }
                                        
                                    }
                                    ?>
<?php

echo ' </select>	<div class="fv-plugins-message-container"></div>
                                </div>
             	<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Description</label>
                        <textarea name="description" id="editor"  class="form-control" rows="5">'.$description.'</textarea>
								<div class="fv-plugins-message-container"></div>
                                </div>
			  
						  
				  
						  
						  <!--end::Action-->
					  <input type="hidden"><div></div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <input type="submit" class="btn btn-primary" name="update" vlaue="Update">
</div></form>';

    
          ?>
