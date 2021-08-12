 <?php
            session_start();
if(isset( $_SESSION['email'])) {
     header('Location:index.php');
}
else {
    
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
		
        <div class="flex-row-fluid flex-center d-flex">
						<!--begin::Signin-->
						<div class="login-form col-md-6  col-lg-3 col-12 card p-5 shadow">
							<!--begin::Form-->
							<form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_singin_form" novalidate="novalidate" action="assets/include/login_check.php">
								<!--begin::Title-->
								<div class="pb-5 pb-lg-17 text-center">
                                    <a  class="brand-logo">
							<img src="../images/logo.png" />
						</a>
									<h3 class="font-weight-bolder text-dark font-size-h1-lg mt-3">Client login</h3>
									
								</div>
								<div class="form-group ">
									<label class="font-size-h6 font-weight-bolder text-dark"> Email</label>
									<input class="form-control h-auto py-4 rounded-lg " type="text" name="email" >
								<div class="fv-plugins-message-container"></div>
                                </div>
						<div class="form-group fv-plugins-icon-container">
									<label class="font-size-h6 font-weight-bolder text-dark"> Password</label>
									<input class="form-control h-auto  py-4 rounded-lg " type="password" name="password" >
								<div class="fv-plugins-message-container"></div>
                                </div>
						
								<div class="pb-lg-0 pb-5 col-12">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary col-12 font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" name="submit">Login</button>
								
								</div>
                                <div class="form-group fv-plugins-icon-container">
									<label class="font-size-h6 font-weight-bolder text-dark"> New User : </label>
                                    <a href="register.php" >Create New Account</a>
								<div class="fv-plugins-message-container"></div>
                                </div>
								<!--end::Action-->
							<input type="hidden"><div></div></form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
		<?php
          include('assets/include/footer_script.php');
          ?>
        
          <script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("loginResult") > -1) {
      swal({
  title:'Error',
  text: 'Wrong Password',
  icon:'warning',
  buttons: {
        confirm : {text:'Close',className:'sweet-warning'},
        
    }
});
    }  if (window.location.href.indexOf("user_create") > -1) {
      swal({
  title:'Account Created',
  text: 'you can now login',
  icon:'success',
  buttons: {
        confirm : {text:'Let me login',className:'sweet-warning'},
        
    }
});
    }
  });
</script>
<style>
  .sweet-warning {
    background-color:#022d62;
    border-radius:40px;
  }
  .sweet-warning:hover {
    background-color:#ef3139;
    border-radius:40px;
  }
  </style>
	</body>
</html>