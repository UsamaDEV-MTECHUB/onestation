 <?php
            session_start();

    
      include('../assets/include/db.php');
    ?>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor12' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
     <form class="form fv-plugins-bootstrap fv-plugins-framework" id="add_abt_gallery_img" novalidate="novalidate" action="javascript:void(0);">
      <div class="modal-body" >
     
        
								<!--begin::Title-->
								<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Title</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" id="title" name="title" required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Category</label>
                                <select name="b_id"  class="form-control h-auto py-4 rounded-lg " >
                                    <?php
                                    
                                    $sql="SELECT * FROM blog_category";
                                    $run=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($run)) {
                                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                    }
                                    ?>
                        
                                </select>	<div class="fv-plugins-message-container"></div>
                                </div>
					
								<div class="form-group ">
                                    
									<label class=" font-weight-bolder text-dark"> Image</label>
									<input class="form-control h-auto py-4 rounded-lg " type="file" id="icon" name="icon" required>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
					<div class="form-group ">
									<label class=" font-weight-bolder text-dark"> Description</label>
                        <textarea name="description" id="editor12" class="form-control" rows="5"></textarea>
								<div class="fv-plugins-message-container"></div>
                                </div>
					
								
						
								
								<!--end::Action-->
							<input type="hidden"><div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="add_abt_gallery_img();">Add</button>
      </div></form>
   