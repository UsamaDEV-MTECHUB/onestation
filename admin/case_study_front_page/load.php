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

$sql="SELECT * FROM case_study_front_page";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
       
    echo '
    <form class="card p-5 col-12  " id="updateaboutform"  action="case_study_front_page/update.php" method="GET" enctype="multipart/form-data">
    <h2 class=" p-4 mb-5 border-bottom">Update Case Study Front Page </h2>
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
                        
   
                        
              

         </div>
              
                
              <div class="col-md-6">
              <div class="form-group ">
         <label class="font-weight-bolder text-dark">  description</label>
   <textarea id="editor0"  name="description">'.$row['description'].'</textarea>
         
      <div class="fv-plugins-message-container"></div>
              </div>
         
              </div>
              </div>
                        
   
              <div class="pb-lg-0 pb-5 col-12 text-center">
              <button  id="update_about" type="submit" class="btn btn-primary  font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" >Update</button>
           
           </div>
                        
								
                            </form>';
}
          ?>
