<?php
          include('include/db.php');
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
          include('include/script.php');
       
          ?>
  </head>
  <body>

    <!--=================================
    header -->
    <?php
          include('include/header.php');
          ?>
    
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h1>Client Login</h1>
            </div>
          </div>
        </div>
        <div class="row justify-content-lg-around position-relative pt-5">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky" style="top: 80px;">
              <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
              <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pr-lg-5">
            <div class="p-4 p-md-5 bg-white shadow">
              <h3>Need assistance? please fill the form</h3>
              <form class="mt-4" action="contact.php" method="GET">
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="exampleInputName" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="exampleInputLname"  name="lname" placeholder="Last Name" required>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail"  name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="exampleInputEnquiry"  name="etype" placeholder="Enquiry Type" required>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control" id="exampleInputEnquiry-Description"  name="edetail"  placeholder="Enquiry Description" rows="5" required></textarea>
                </div>
                
                <div class="form-group mb-0">
                  <button type="submit" class="btn btn-primary" name="donecontact">Send Massage<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-bg-logo">
            <i class="fas fa-comment"></i>
          </div>
        </div>
      </div>
    </section>


      <?php
          include('include/footer.php');
          ?> <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
 
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
         <?php
          include('include/footer_script.php');
          ?> 
    
    <script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("donecontact") > -1) {
      swal({
  title:'Query Submitted',
  text: 'You will be contacted Soon by Admin',
  icon:'success',
  buttons: {
        confirm : {text:'Close',className:'sweet-warning'},
        
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
