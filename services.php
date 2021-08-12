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
  </head>
  <body onload="get_cart();"> 

    <!--=================================
    header -->
 <?php
          include('include/header.php');
          ?>
    
      
      <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Services</h1>
              <p class="text-white mb-0">Award-winning website design &amp; creative digital agency services</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="space-ptb">
      <div class="container">
        <div class="row">
            <?php 
                        
                        $sql="SELECT id, title,description FROM services";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo '<div class="col-lg-4 fadeinupbig col-md-6 mb-4">
            <div class="feature-info feature-info-style-02">
              <div class="feature-info-icon">
                <i class="flaticon-data"></i>
                <h5 class="mb-0 ml-4 feature-info-title">'.$row['title'].'</h5>
              </div>
              <div class="feature-info-content">
                <p class="mb-0">'.substr($row['description'],0,120).'...</p>
                <a href="service-detail.php?s_id='.$row['id'].'" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
              <div class="feature-info-bg-img" style="background-image: url(images/feature-info/01.jpg);"></div>
            </div>
          </div>';
                        }
                            ?>
          
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
    

  </body>
</html>
