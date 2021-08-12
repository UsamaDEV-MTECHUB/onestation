 <?php
            session_start();
if(isset( $_SESSION['email'])) {
    
}
else {
     header('Location:login.php');
}
          include('assets/include/db.php');
if(isset($_GET['del'])) {
    $sql="DELETE FROM contact WHERE id='$_GET[del]'";
    $run=mysqli_query($conn,$sql);
    if($run) 
    {
      $action='<div class="container pt-5">
      <div class="alert alert-success alert-dismissible fade show " role="alert">
    <strong>Record Updated!</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  </div>';
    }
}
else {
    $action='';
}
          ?>
<!DOCTYPE html>

<html lang="en">
	
<head>
		 <?php
          include('assets/include/script.php');
          ?>
   
	</head>
	
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        
		<?php
          include('assets/include/header.php');
          ?>
	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<?php
          include('assets/include/websidebar.php');
          ?>
                
    			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					
                    <?php
          include('assets/include/webheader.php');
          ?>
            		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<?php echo $action;?>
						<div class="subheader py-6 py-lg-8 " >
							
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                
								<div class="d-flex align-items-center flex-wrap mr-1">
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<h5 class="text-dark font-weight-bold my-1 mr-5">Company</h5>
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											
											<li class="breadcrumb-item">
												<a  class="text-muted">Contact</a>
											</li>
											
										</ul>
									</div>
								</div>
                                <div class="card-toolbar">
											<!--end::Dropdown-->
											<!--begin::Button-->
											
											<!--end::Button-->
										</div>
							</div>
						</div>
                        
						<div class="row">
                   
							<div class="container col-12" id="box"  >
							<?php
              echo '<div class="datatable datatable-default datatable-primary datatable-loaded">
              <table class="table-bordered table-hover datatable-sm datatable-table  text-center datatable-sm "  style="display: block;">
                 <thead class="datatable-head bg-light-primary text-primary">
                    <tr class="datatable-row p-5" >
               
                       <th class="datatable-cell  datatable-cell-sort " style="width:50px" >  Id </th>
                       <th  class="datatable-cell datatable-cell-sort " style="width:150px;"  >  name </th>
                       <th  class="datatable-cell datatable-cell-sort " style="width:150px;"  >  Email </th>
                       <th  class="datatable-cell datatable-cell-sort " style="width:150px;"  >  Enquiry type </th>
                       <th  class="datatable-cell datatable-cell-sort " style="width:150px;"  >  Enquiry Description </th>
           
                       <th  class="datatable-cell datatable-cell-sort  " style="width:100px">  Action </th>
                    </tr>
                 </thead>
                 <tbody style="" class="datatable-body ">';
           
           $sql="SELECT * FROM contact";
           $run=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($run)) {
               echo '
                    <tr  class="datatable-row p-0" >
                       <td class="datatable-cell datatable-toggle-detail " style="width:50px" >  '.$row['id'].' </td>
                       <td class="datatable-cell datatable-toggle-detail" style="width:150px;" >  '.$row['fname'].' '.$row['lname'].' </td>
                       <td class="datatable-cell datatable-toggle-detail" style="width:150px;" >  '.$row['email'].'  </td>
                       <td class="datatable-cell datatable-toggle-detail" style="width:150px;" >  '.$row['etype'].'  </td>
                       <td class="datatable-cell datatable-toggle-detail" style="width:150px;" >  '.$row['edetail'].'  </td>
                    
                       <td class="datatable-cell datatable-toggle-detail  "style="width:100px">';  
                     
                           echo '
                       <a href="contact.php?del='.$row['id'].'" class="btn btn-sm btn-clean btn-icon mr-1 border" title="Delete"><i class="fas fa-trash fa-1x"></i>	</a>
                        </td>
                     </tr>
                    
               ';
           }
           echo '  </tbody>
              </table>
           
                 
           </div>';
               
                     ?> 
							</div>
            
						</div>
							</div>
							</div>
				</div>
		</div>
	<!-- Button trigger modal -->
		
        <?php
          include('assets/include/footer_script.php');
          ?>
 	</body>
</html>