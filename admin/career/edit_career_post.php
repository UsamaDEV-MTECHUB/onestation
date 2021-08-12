 <?php
session_start();
include('../assets/include/db.php');
include('../assets/include/script.php');


$id='';
$title='';
$description='';
$sql="SELECT * FROM career_posts WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
	$title=$row['title'];
	$description=$row['description'];
}

echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" action="career/update_career_post.php" method="GET" enctype="multipart/form-data">
<div class="modal-body" id="servicearea">
<div class="form-group ">
<label class=" font-weight-bolder text-dark"> Title</label>
<input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="id" name="id" value="'.$id.'" required="">
<input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" value="'.$title.'" required="">
<div class="fv-plugins-message-container"></div>
	 </div>
				
							
	 <div class="form-group ">
	 <label class="font-weight-bolder text-dark">  Description</label>
<textarea  class="form-control" rows=10  name="description">'.$description.'</textarea>
	 
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
