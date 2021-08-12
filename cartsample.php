<?php
  session_start();  
include('include/db.php');
if($_SESSION['total']==0) {
  header('location:cart.php');
}

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
              <h1 class="text-white font-weight-normal mt-5">CHECKOUT</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="space-ptb">
      <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 offset-md-3">
            <div class="p-4 p-md-5 bg-white shadow">
         
              <form class="mt-4" action="payment.php" name="form1" method="post" onsubmit="check_paypal();" enctype="multipart/form-data">
                <div class="form-group mb-3" id="check_response"></div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="firstname" name="firstname" onkeyup="check();" placeholder="First Name">
                </div>
              
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="lastname" name="lastname" onkeyup="check();" placeholder="Last Name">
                </div>
              
              
                <div class="form-group mb-3">
                  <label for ="amount" >Amount ($)</label>
                  <input type="text" class="form-control" id="amount" name="amount" value="<?php echo  $_SESSION['total'];?>" Readonly>
                </div>
                <div id="drop" class="text-center"></div>
                <div id="dropin-container" class="text-center">
           
                </div>
                <br>
                <br>
                <div class="form-group mb-0">
                  <button type="submit" id="submit" class="btn btn-primary " disabled>Pay With Braintree<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
                <div class="form-group mt-3">
                <img src="images/We-Accept.png" width="450px"/> 
              </div>
              </form>
            </div>
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
<script>
      
      $(document).ready(function(){
     
     document.getElementById('drop').innerHTML='<div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div>'; 


});
 z='<p class="text-danger text-center">All fields are required</p>';
function check() {
  fname=document.getElementById('firstname').value;
  lname=document.getElementById('lastname').value;
  if(fname.length===0) {
    document.getElementById('check_response').innerHTML=z;
  }
  if(lname.length===0) {
    document.getElementById('check_response').innerHTML=z;
  }
  else if(fname.length!=0 && lname.length!=0) {
  //  alert(card);
    document.getElementById('check_response').innerHTML='';
    document.getElementById('submit').removeAttribute('disabled');
  }
}

$.ajax({
    url:'token.php',
    type:'GET',
    dataType:"json",
    success:function(data) {
     
       braintree.setup(data,'dropin',{container:'dropin-container'});
       setTimeout(function() {  document.getElementById('drop').innerHTML=''; }, 2500);
      
 //   document.getElementsById('dropin-container').innerHTML=data;
    }
  });


 
</script>

  </body>
</html>
