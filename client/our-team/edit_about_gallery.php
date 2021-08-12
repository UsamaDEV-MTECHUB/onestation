 <?php
session_start();
include('../assets/include/db.php');
include('../assets/include/script.php');

$overview='';
$backend='';
$frontend='';
$architecture='';

$sql="SELECT * FROM our_heros WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $name=$row['name'];
    $title=$row['title'];
    $fb_link=$row['fb_link'];
    $twitter_link=$row['twitter_link'];
    $linkedin_link=$row['linkedin_link'];
 $image=$row['image'];
}
$_SESSION['pre_img']=$image;
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" action="our-team/update_about_gallery.php" method="POST" enctype="multipart/form-data">
<div class="modal-body" id="servicearea">

						  <!--begin::Title-->
						  
						  <div class="form-group ">
						
						 <label class=" font-weight-bolder text-dark">  Current Image:</label>
						 <img src="../'.$_SESSION['pre_img'].'" class="col-3"/> <div class="fv-plugins-message-container"></div>
						  </div><br>
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Image :</label>
							  <input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="id" name="id" value="'.$id.'" required>
							  <input class="form-control h-auto py-4 rounded-lg " type="file" id="icon" name="icon" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Name :</label>
							  <input class="form-control h-auto py-4 rounded-lg " type="text" id="name" name="name" value="'.$name.'" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Title :</label>
							  <input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" value="'.$title.'" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Title :</label>
							  <input class="form-control h-auto py-4 rounded-lg " type="text" id="fb_link" name="fb_link"  value="'.$fb_link.'" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Title :</label>
							  <input class="form-control h-auto py-4 rounded-lg " type="text" id="twitter_link" name="twitter_link" value="'.$twitter_link.'" required>
							  <div class="fv-plugins-message-container"></div>
						  </div>
			  
						  <div class="form-group ">
						  <label class=" font-weight-bolder text-dark">  Update Title :</label>
							  <input class="form-control h-auto py-4 rounded-lg " type="text" id="linkedin_link" name="linkedin_link" value="'.$linkedin_link.'" required>
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
