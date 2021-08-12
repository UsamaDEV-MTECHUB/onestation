 <?php
            session_start();
if(isset( $_SESSION['email'])) {
    
}
else {
     header('Location:login.php');
}
          include('assets/include/db.php');
if(isset($_GET['action'])) {
    $action='
    <div class="container pt-5">
    <div class="alert alert-success alert-dismissible fade show  text-center p-4" role="alert">
  <strong>Record Created!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
';
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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Services</h5>
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											
											<li class="breadcrumb-item">
												<a  class="text-muted">Services Process</a>
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
                        
						<div class="d-flex flex-column-fluid">
                   
							<div class="container table-responsive" id="box"  >
							
                                
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
         
        <script>
            
            
            
             var x='<div class="row"><div class="col-12 text-center"> <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div></div>';
            
        $(document).ready(function(){
     
          //  document.getElementById('box').innerHTML=x; 
       //     setTimeout(function() { load_service(); }, 1000);
      load_process();
            
      
});
        function load_process()  {
        $("#box").load("services_process/load.php");     
        }
            
            
          function adds_service()  {
            
           if( fetch('services/add_services.php',{
                method:"POST",
                body : new FormData(document.getElementById('kt_login_singin_form'))   
            }))
           {
                
               $("#kt_login_singin_form").each(function(){
            $(this).find('input').val("");
            $(this).find('textarea').val("");
      })
            $('#showservice').modal('hide'); 
            load_service();
           }     
        }
            
            
            
        function del_service(id)  {
          var value=id;
            if(confirm("Confimm delete id = "+value)) {
    $.ajax({
            type: 'GET',
            data: {id:value},	
			url: 'services/del_services.php',
			success: function(data){
				load_service();
			}
		});
  }
       } 
          function edit(id)  {
          var value=id;
               $("#showAjaxResults").html(x);
                  $('#edit').modal('show');
              $.ajax({
            type: 'GET',
            data: {id:value},	
			url: 'services_futhur_detail/edit.php',
			success: function(data){
         
				$("#showAjaxResults").html(data);
                $('#edit').modal('show');
			}
		});
               
              
       } 
        
        
        </script>
	</body>
</html>