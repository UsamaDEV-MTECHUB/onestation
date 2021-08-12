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
							<a href="service_category.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-list-alt fa-3x text-white mb-4"></i><br>
							service Category</a>
						
							<a href="services.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-list fa-3x text-white mb-4"></i><br>
								Services list</a>
						
							<a href="services_process.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-tasks fa-3x text-white mb-4"></i><br>
								Process </a>
							<a href="pricing.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-money-check fa-3x text-white mb-4"></i><br>
								Pricing</a>
						
							
						
							<a href="aboutus.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-question-circle fa-3x text-white mb-4"></i><br>
								About Us</a>
						
							<a href="career.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-graduation-cap fa-3x text-white mb-4"></i><br>
								Career</a>
						
							<a href="howwework.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-handshake fa-3x text-white mb-4"></i><br>
								How we work</a>
						
						
							<a href="our_team.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-users fa-3x text-white mb-4"></i><br>
								Our Team</a>
						
						
							<a href="our_team.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-key fa-3x text-white mb-4"></i><br>
								Values</a>
						
						
							<a href="awards_and_nominees.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-award fa-3x text-white mb-4"></i><br>
								Awards and Nominees</a>
						
						
							<a href="testimonial.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-quote-left fa-3x text-white mb-4"></i><br>
								Testimonial</a>
						
							<a href="vertical.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-ruler-vertical fa-3x text-white mb-4"></i><br>
								Veritcals</a>
						
							<a href="OrderSummaries.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-shopping-cart fa-3x text-white mb-4"></i><br>
								Order Summaries</a>
						
							<a href="contact.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-user fa-3x text-white mb-4"></i><br>
								contact</a>
						
							<a href="case_study_detail.php" class="col-3 ml-5 mr-5 mb-5 text-center  btn text-white bg-primary text-center">
								<i class="menu-icon fas fa-list fa-3x text-white mb-4"></i><br>
								Case Studies List</a>
						
						
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