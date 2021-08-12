 <?php
session_start();
include('../assets/include/db.php');

$title='';

$sql="SELECT * FROM pricing WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
 $id=$row['id'];
 $s_id=$row['s_id'];
 $title=$row['title'];
 $price=$row['price'];

}
echo '<form class="form fv-plugins-bootstrap fv-plugins-framework" id="updateserviceform" novalidate="novalidate" action="pricing/update_title.php" method="GET" enctype="multipart/form-data">
								<!--begin::Title-->
								
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Name</label>
									<input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="updatepricingid" name="updatepricingid"  value="'.$_SESSION['updatepricingid']=$id.'">
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="updatepricingtitle" name="updatepricingtitle"  value="'.$_SESSION['updatepricingtitle']=$title.'">
								<div class="fv-plugins-message-container"></div>
                                </div>
                               
						      
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Price</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="updatepricingtitle" name="updatepricingprice"  value="'.$_SESSION['updatepricingprice']=$price.'">
								<div class="fv-plugins-message-container"></div>
                                </div>
                               
								<div class="form-group ">
								<label class=" font-weight-bolder text-dark"> Select Service</label>
			  <select name="updatepricings_id" class="form-control h-auto py-4 rounded-lg " required>'; ?>
						<?php
		  $sqll="SELECT id,title FROM services";
		  $runl=mysqli_query($conn,$sqll);
		  while($rowl=mysqli_fetch_assoc($runl)) {
			  if($rowl['id']==$s_id) {
				echo '
				<option value="'.$_SESSION['updatepricings_id']=$rowl['id'].'" selected >'.$rowl['title'].'</option>
				';
			  }
			  else {
				echo '
				<option value="'.$_SESSION['updatepricings_id']=$rowl['id'].'"  >'.$rowl['title'].'</option>
				';
			  }
			  
			}
			  ?> <?php echo '
		  </select>
							<div class="fv-plugins-message-container"></div>
							</div>
						 
						
								<div class="pb-lg-0 pb-5 col-12">
									<button  id="updatepricing" type="submit" class="btn btn-primary col-12 font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
								
								</div>
							<div></div></form>';

    
          ?>
