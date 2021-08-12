 <?php
session_start();
include('../assets/include/db.php');
include('../assets/include/script.php');

$overview='';
$backend='';
$frontend='';
$architecture='';

$sql="SELECT * FROM testimonial WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
 $image=$row['image'];
 $description=$row['description'];
 $name=$row['name'];
 $title=$row['title'];
}
$_SESSION['pre_icon']=$image;
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" action="testimonial/update_about_gallery.php" method="POST" enctype="multipart/form-data">
<div class="modal-body" id="servicearea">

						  <!--begin::Title-->
						  
						  <div class="form-group ">
						
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
						  <label>Testimonial</label>
											  <input class="form-control h-auto py-4 rounded-lg " type="text" id="Description" name="description" value="'.$description.'"  required>
										  <div class="fv-plugins-message-container"></div>
										  </div>
							  
										  <div class="form-group ">
						  <label>Name</label>
											  <input class="form-control h-auto py-4 rounded-lg " type="text" id="name" name="name" value="'.$name.'"  required>
										  <div class="fv-plugins-message-container"></div>
										  </div>
							  
										  <div class="form-group ">
						  <label>Title</label>
											  <input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" value="'.$title.'"  required>
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
