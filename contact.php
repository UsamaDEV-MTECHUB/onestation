<?php
          include('include/db.php');
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
          include('include/script.php');
                 
            $arr = array(
            'properties' => array(
                array(
                    'property' => 'email',
                    'value' => $_GET['email']
                ),
                array(
                    'property' => 'firstname',
                    'value' => $_GET['fname']
                ),
                array(
                    'property' => 'lastname',
                    'value' => $_GET['lname']
                ),
                array(
                    'property' => 'phone',
                    'value' => $_GET['phone']
                )
                ,
                array(
                    'property' => 'message',
                    'value' => $_GET['edetail']
                )
                ,
                array(
                    'property' => 'service',
                    'value' => $_GET['lead_status']
                )
            )
        );
	

	
   $post_json = json_encode($arr);
 //  	print_r($post_json);
	
	
	
   $hapikey = '3847c818-db88-4dca-944a-fe9f70423a1b';
   $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
   $ch = @curl_init();
   @curl_setopt($ch, CURLOPT_POST, true);
   @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
   @curl_setopt($ch, CURLOPT_URL, $endpoint);
   @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
   @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = @curl_exec($ch);
   $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $curl_errors = curl_error($ch);
   @curl_close($ch);
   //echo "curl Errors: " . $curl_errors;
   //echo "\nStatus code: " . $status_code;
   //echo "\nResponse: " . $response;
   
   if($status_code=='200') {
	   //header('location:index.php?action=done');
	    //echo '<script>alert("done");</script>';
   }
          if(isset($_GET['contact'])) {
            $sql="INSERT INTO contact(fname,lname,email,etype,edetail) VALUES('$_GET[fname]','$_GET[lname]','$_GET[email]','$_GET[etype]','$_GET[edetail]')";
            $run=mysqli_query($conn,$sql);
            if($run) {
          //    echo '<script>alert("done");</script>';
            }
   
          }
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
              <h1>Contact us</h1>
              <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
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
                  <input type="text" class="form-control" id="exampleInputEnquiry"  name="phone" placeholder="Phone" required>
                </div>
             <div class="form-group mb-3">
                 <select name="lead_status"  class="form-control">
                     <option>Select Service Type</option>
                     <?php
                     
                      $sql="SELECT id ,title from services";
            $run=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($run)) {
                echo '<option value="'.$row['title'].'" >'.$row['title'].'</option>';
            }
                     ?>
                     
                 </select>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control" id="exampleInputEnquiry-Description"  name="edetail"  placeholder="Type your Query here" rows="5" required></textarea>
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
