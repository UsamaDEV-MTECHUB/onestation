 <?php
session_start();
include('../assets/include/db.php');

$title='';

$sql="SELECT * FROM vertical WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
 $id=$row['id'];
 $heading=$row['heading'];
 $title=$row['title'];
 $overview_heading=$row['overview_heading'];
 $overview_detail=$row['overview_detail'];
 $result_title=$row['result_title'];
 $result_description=$row['result_description'];


}
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" id="updateserviceform" novalidate="novalidate" action="vertical/update.php" method="post" enctype="multipart/form-data">
								<!--begin::Title-->
								
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Heading</label>
									<input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="id" name="id" value="'.$id.'" required>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="heading" name="heading" value="'.$heading.'"  required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
					
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Title</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title"  value="'.$title.'" required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
					
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Overview heading</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="overview_heading" name="overview_heading"  value="'.$overview_heading.'"  required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
					
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Overview detail</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="overview_detail" name="overview_detail" value="'.$overview_detail.'"  required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
					
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Result title</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="result_title" name="result_title" value="'.$result_title.'"  required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
								
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Result description</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="result_description" name="result_description" value="'.$result_description.'"  required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
                               
						      
						 
						
								<div class="pb-lg-0 pb-5 col-12">
									<button  id="update_service" type="submit" class="btn btn-primary col-12 font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
								
								</div>
							<div></div></form>';

    
          ?>
