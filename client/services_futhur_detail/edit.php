 <?php
session_start();
include('../assets/include/db.php');
include('../assets/include/script.php');

$overview='';
$backend='';
$frontend='';
$architecture='';

$sql="SELECT * FROM service_detail WHERE id='$_GET[id]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
 $overview=$row['overview'];
$backend=$row['backend'];
$frontend=$row['frontend'];
$architecture=$row['architecture'];
}
echo '<form class=" col-12" id="updateserviceform " novalidate="novalidate" action="services_futhur_detail/update.php" method="GET" enctype="multipart/form-data">
						
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Overview</label>
                                    <input class="form-control d-none" type="text" name="id" value="'.$_SESSION['updateservicefuthurdetailid']=$id.'" />
							<textarea id="editor" name="updateservicefuthurdetailoverview">'.$_SESSION['updateservicefuthurdetailoverview']=$overview.'</textarea>
									
								<div class="fv-plugins-message-container"></div>
                                </div>
							
                        
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Backend</label>
							<textarea id="editor1"  name="updateservicefuthurdetailbackend">'.$_SESSION['updateservicefuthurdetailbackend']=$backend.'</textarea>
									
								<div class="fv-plugins-message-container"></div>
                                </div>
							
                        
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Frontend</label>
							<textarea id="editor2"   name="updateservicefuthurdetailfrontend">'.$_SESSION['updateservicefuthurdetailfrontend']=$frontend.'</textarea>
									
								<div class="fv-plugins-message-container"></div>
                                </div>
							
                        
								<div class="form-group ">
									<label class="font-weight-bolder text-dark">  Architecture</label>
							<textarea id="editor3"  name="updateservicefuthurdetailarchitecture">'.$_SESSION['updateservicefuthurdetailarchitecture']=$architecture.'</textarea>
									
								<div class="fv-plugins-message-container"></div>
                                </div>
							<div class="pb-lg-0 pb-5 col-12 text-center">
									<button  id="update_service" type="submit" class="btn btn-primary  font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
								
								</div>
                            </form>';

    
          ?>
