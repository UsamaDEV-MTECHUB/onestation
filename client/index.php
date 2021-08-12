 <?php
            session_start();
if(isset( $_SESSION['email'])) {
    
}
else {  
     header('Location:login.php');
}
          include('assets/include/db.php');
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
			
						<div class="subheader py-6 py-lg-8 " >
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<div class="d-flex align-items-center flex-wrap mr-1">
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item">
												<a href="#" class="text-muted">home</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex flex-column-fluid">
							<div class="container">
						<div class="row offset-md-2">
							
							<a href="OrderSummaries.php" class="col-8 p-5 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-shopping-cart fa-3x text-white mb-4"></i><br>
								My Order Summaries</a>
						
						
						
						</div>
							</div>
						</div>
							</div>
							</div>
				</div>
		</div>
		
		<?php
          include('assets/include/footer_script.php');
          ?>
	</body>
</html>