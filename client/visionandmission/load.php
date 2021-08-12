 <?php
            session_start();

    
      include('../assets/include/db.php');
    ?>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor0' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
<?php

$sql="SELECT * FROM mission_and_vision";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
       
    echo '
    <form class="card p-5 col-12  " id="updateaboutform"  action="visionandmission/update.php" method="GET" enctype="multipart/form-data">
    <h2 class=" p-4 mb-5 border-bottom">Update Vision and Mission</h2>
    <div class="row">
   <div class="col-md-6">
    <div class="form-group ">
    <label class=" font-weight-bolder text-dark"> Title</label>
    <input class="form-control h-auto py-4 rounded-lg d-none" type="text" id="id" name="id" value="'.$row['id'].'" required="">
    <input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" value="'.$row['title'].'" required="">
   <div class="fv-plugins-message-container"></div>
         </div>
    <div class="form-group ">
    <label class=" font-weight-bolder text-dark"> Heading</label>
    <input class="form-control h-auto py-4 rounded-lg " type="text" id="heading" name="heading" value="'.$row['heading'].'" required="">
   <div class="fv-plugins-message-container"></div>
         </div>
                        
    <div class="form-group ">
    <label class=" font-weight-bolder text-dark"> Vision</label>
    <input class="form-control h-auto py-4 rounded-lg " type="text" id="vision" name="vision" value="'.$row['vision'].'" required="">
   <div class="fv-plugins-message-container"></div>
         </div>
                        
    <div class="form-group ">
    <label class=" font-weight-bolder text-dark"> Mission</label>
    <input class="form-control h-auto py-4 rounded-lg " type="text" id="mission" name="mission" value="'.$row['mission'].'" required="">
   <div class="fv-plugins-message-container"></div>
         </div>
                        

         </div>
              
                
              <div class="col-md-6">
              <div class="form-group ">
         <label class="font-weight-bolder text-dark">  description</label>
   <textarea id="editor0"  name="description">'.$row['description'].'</textarea>
         
      <div class="fv-plugins-message-container"></div>
              </div>
              <div class="row">

         <div class="form-group col">
         <label class=" font-weight-bolder text-dark"> Happy clients</label>
         <input class="form-control h-auto py-4 rounded-lg " type="text" id="happy_clients" name="happy_clients" value="'.$row['happy_clients'].'"  required="">
      <div class="fv-plugins-message-container"></div>
              </div>
                             
         <div class="form-group col">
         <label class=" font-weight-bolder text-dark"> Skilled Experts</label>
         <input class="form-control h-auto py-4 rounded-lg " type="text" id="happy_clients" name="skilled_experts" value="'.$row['skilled_experts'].'"  required="">
      <div class="fv-plugins-message-container"></div>
              </div>
                             

         <div class="form-group col">
         <label class=" font-weight-bolder text-dark"> Finished Projects</label>
         <input class="form-control h-auto py-4 rounded-lg " type="text" id="finished_projects" name="finished_projects" value="'.$row['finished_projects'].'"  required="">
      <div class="fv-plugins-message-container"></div>
              </div>
                             
         <div class="form-group col">
         <label class=" font-weight-bolder text-dark"> Media Posts</label>
         <input class="form-control h-auto py-4 rounded-lg " type="text" id="media_posts" name="media_posts" value="'.$row['media_posts'].'"  required="">
      <div class="fv-plugins-message-container"></div>
              </div>
                             
        
         </div>
         
              </div>
              </div>
                        
   
              <div class="pb-lg-0 pb-5 col-12 text-center">
              <button  id="update_about" type="submit" class="btn btn-primary  font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
           
           </div>
                        
								
                            </form>';
}
          ?>
