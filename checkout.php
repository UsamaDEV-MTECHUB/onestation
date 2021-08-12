<?php
  session_start();  
include('include/db.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
include('include/script.php');

?>
<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
</head>
  <body>

    <!--=================================
    header -->
 <?php
include('include/header.php');
?>
    
      
      <section class="bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');height:200px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal mt-5">Checkout </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="space-ptb">
      <div class="container">
      <div class="row">
      <div class="col-lg-7 col-md-7 offset-md-3">
            <div class="p-4 p-md-5 bg-white shadow">
              <form class="mt-4">
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control"  id="LastName" name="LastName" placeholder="Last Name">
                </div>
                
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount (USD)">
                </div>
                <div id="dropin-container"></div>
                <br>
                <br>
                <!----------
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="exampleInputEnquiry" placeholder="Enquiry Type">
                </div>-->
              
               
                <div class="form-group mb-0">
                  <button type="submit" class="btn btn-primary">Pay with BrainTreet<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
            </div>
          </div>

      </div>
      </div>
    </section>
      <section class="space-pb dark-background">
      <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">
          <h2 class="text-white">Looking to implement an idea for your business, we will turn it into reality</h2>
          <h6 class="text-white">Develop your own custom solution or boost marketing potential today with us</h6>
          <a href="service.php#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
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
   <script> 
    
function add_cart(id) {

        $.ajax({
            type: "GET",
            url: 'cart/add.php',
            data:{id:id},
            success: function(response)
            {
       alert(response);
             get_cart();
           }
       });
    
  
    
        }
function confirm_this(id) {

    if(confirm('Are you sure')) {
     window.location.href = "cart.php?del_cart_id="+id;
    }
    
     
  
    
        }
</script>

  </body>
</html>
