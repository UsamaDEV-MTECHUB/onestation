<?php
  session_start();         
include('include/db.php');
 $_SESSION['myip']=session_id();
 

if(isset($_GET['action'])) {
  $action='<div class="alert alert-success text-center border-0" role="alert">
  <h4 class="alert-heading">Transaction  Successful!</h4>
  <p>You will be contacted by Admin </p>
  <hr>
  <p class="mb-0">Thank you for Purchasing.Go to <a href="index.php">home<a></p>
  </div>';   
  
  }
  
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
          include('include/script.php');
          ?>
  </head>
  <body     onload="get_cart();">

    <!--=================================
    header -->
 <?php
          include('include/header.php');
          ?>
      <!--=================================
    header -->

    <!--=================================
    banner -->
    <section class="banner">
      <div class="swiper-container">
        <div class="swiper-wrapper h-700 h-sm-500">
          <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-70 " style="background-image:url(images/slider/banner.jpg); background-size: cover; background-position: top center;">
            <div class="swipeinner container"  >
              <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 text-center">
                  <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">We Grow Brands With Result-Driven Marketing Strategies</h1>
                  <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Custom digital marketing strategies & services to help your business reach its full potential..</h6>
                  <a class="btn btn-primary border border-0 btn-round mx-0 mx-md-5  text-white " data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.75s" href="contact.php">Get a Proposal<i class="fas fa-arrow-right pl-3"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-70" style="background-image:url(images/slider/banner.jpg); background-size: cover; background-position: top center;">
            <div class="swipeinner container">
              <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 text-center">
                  <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Your Trusted Digital Partner To Boost Business Growth</h1>
                  <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Get ahead of your competitors with our cutting-edge software solutions.</h6>
                  <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.75s" href="services.php">Get a proposal<i class="fas fa-arrow-right pl-3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"><i class="fas fa-arrow-left icon-btn"></i></div>
        <div class="swiper-button-next"><i class="fas fa-arrow-right icon-btn"></i></div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    client-logo -->
    <!-- <section class="mt-n5 z-index-9 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="our-clients our-clients-style-02 bg-dark">
              <div class="client-title pl-4">
                <h5 class="text-white">Our Clients</h5>
                <div class="svg-item bg-white border">
                </div>
              </div>
              <div class="brand-logo pl-4">
                <div class="owl-carousel testimonial-center  owl-nav-bottom-center" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
                  


                  <?php
           //$sql2="SELECT * FROM award ";
           //$run2=mysqli_query($conn,$sql2);
           //while($row2=mysqli_fetch_assoc($run2)) {
            //if($row2['image']=='') {
              //continue;
            //}else {
            //echo '
            //<div class="item">
            //<img class="img-fluid center-block mx-auto" src="'.$row2['image'].'" alt="">
          //</div>

            
            //';
           //}
          // }
          ?>
                </div>
              </div>
              <div class="client-btn">
                <a href="case-study.php" class="btn btn-dark btn-round text-white  ">Case Studies<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    client-logo  -->
   <!--=================================
    Service -->
    <section class="space-ptb bg-light position-relative">
      <div class="container">
        <div class="row">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center">
              <h2  >Core Services</h2>
              <p class="lead  ">We offer a plethora of digital solutions to help you build a profound position on digital landscape.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <?php 
                        
                        $sql="SELECT id, title,description FROM services";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo '<div class="col-md-3 fadeinupbig col-sm-12 mb-4">
                        
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
        </div>
      </div>
      </div>
    </section>
    <!--=================================
    Service -->
    <!--=================================
    Company Category -->
    <section class="space-ptb ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center">
              <h2  >We excel in our work to uplift your business performance</h2>
              <p class="lead  ">We have vast experience in building cost-effective and result-oriented software solutions for several industries.</p>
            </div>
          </div>
        </div>
        <div class="row mb-3 text-center">
          <div class="col-sm-12">
            <div class="category category-grid-style-01">
                <div class="category-item_1">
                        <div class="category-icon">
                          <i class="flaticon-vertical"></i>
                        </div>
                        <a href="#" class="category-title"></a>
                      </div>
            <?php 
                        
                        $sql="SELECT id,heading FROM vertical";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo ' 
                        <div class="category-item">
                        <div class="category-icon">
                          <i class="flaticon-vertical"></i>
                        </div>
                        <a href="vertical.php?id='.$row['id'].'" class="category-title">'.$row['heading'].'</a>
                      </div>
                      ';
                        }
                            ?> 
            
           
               <div class="clearfix"></div>
              <div class="show-more-cat">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Company Category -->

 

    <!--=================================
    Service -->
    <section class="space-ptb bg-dark  dark-background category category-list-style-01">
      <div class="container">
        <div class="row align-items-center pb-4 pb-md-5">
          <div class="col-lg-6">
            <h2 class="text-white mb-2 mb-lg-0">We excel in our work to uplift your business performance. </h2>
          </div>
          <div class="col-lg-6">
            <p class="lead text-white mb-0">We have vast experience in building cost-effective and result-oriented software solutions for several industries.</p>
          </div>
        </div>
        <div class="row">
        <?php 
                        
                        $sql="SELECT id,heading FROM vertical";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo ' 
                        <div class=" text-white col-sm-6 col-lg-3 mt-4 mt-lg-0">
                     <a href="vertical.php?id='.$row['id'].'" class="text-white ">'.$row['heading'].'</a>
                      </div>
                      ';
                        }
                            ?> 
          
          
          
        </div>
        <div class="row mt-4 mt-md-5">
          <div class="col-12 d-md-flex justify-content-center align-items-center">
            <p class="mb-3 mb-md-0 mx-0 mx-md-3 text-white">We provide solutions for all types of big industries</p>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Service -->

 

   
    <!--=================================
    Counter
    <section class="bg-dark py-5">
      <div class="container">
        <div class="row">
        <?php 
                        
                        $sql="SELECT * FROM about";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo ' 
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                          <div class="counter-icon">
                            <i class="flaticon-emoji"></i>
                          </div>
                          <div class="counter-content">
                            <span class="timer" data-to="'.$row['happy_clients'].'" data-speed="10000">'.$row['happy_clients'].'</span>
                            <label>Happy Clients</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                          <div class="counter-icon">
                            <i class="flaticon-trophy"></i>
                          </div>
                          <div class="counter-content align-self-center">
                          <span class="timer" data-to="'.$row['skilled_experts'].'" data-speed="10000">'.$row['skilled_experts'].'</span>
                          <label>Skilled Experts</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                          <div class="counter-icon">
                            <i class="flaticon-strong"></i>
                          </div>
                          <div class="counter-content">
                          <span class="timer" data-to="'.$row['finished_projects'].'" data-speed="10000">'.$row['finished_projects'].'</span>
                          <label>Finished Projects</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                          <div class="counter-icon">
                            <i class="flaticon-icon-149196"></i>
                          </div>
                          <div class="counter-content">
                          <span class="timer" data-to="'.$row['media_posts'].'" data-speed="10000">'.$row['media_posts'].'</span>
                          <label>Media Posts</label>
                          </div>
                        </div>
                      </div>
                      ';
                        }
                            ?> 
     
        </div>
      </div>
    </section>
    =================================
    Counter -->

    <!--=================================
    Articles -->
   <!--  <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center">
              <h2>Latest news and inspirational stories</h2>
              <p>Check out our latest blog posts, articles, client success stories and essential announcement.</p>
            </div>
          </div>
        </div>
        <div class="row"> -->
            
            <?php 
                        
                        //$sql="SELECT * FROM blogs limit 1";
                        //$run=mysqli_query($conn,$sql);
                       // while ($row=mysqli_fetch_assoc($run)) {
                       // echo ' 
                       // <div class="col-md-7 col-lg-8 mb-4">
            //<div class="blog-post blog-post-sticky">
              //<div class="blog-post-image">
                //<img class="img-fluid" src="'.$row['image'].'" alt="">
              //</div>
              //<div class="blog-post-content">
                //<div class="blog-post-info">
                 // <div class="blog-post-author">
                    //<a href="blog_detail.php" class="btn btn-light-round btn-round text-primary">
                    //';
                    ?>
            
              <?php
                                    
                                   // $sqll="SELECT * FROM blog_category WHERE id='$row[b_id]'";
                                   // $runl=mysqli_query($conn,$sqll);
                                   // while($rowl=mysqli_fetch_assoc($runl)) {
                                           // echo $rowl['name'];
                                        
                                        
                                    //}
                                    ?>
            
                      <?php  //echo '
                       // </a>
                  //</div>
                  //<div class="blog-post-date">
                    //<a href="blog_detail.php?id='.$row['id'].'">'.$row['publish_date'].'</a>
                  //</div>
               // </div>
                //<div class="blog-post-details">
                  //<h5 class="blog-post-title">
                   //<a href="blog_detail.php">'.substr($row['description'],0,200).'..</p>
                //</div>
              //</div>
           // </div>
         // </div>
                     // ';
                       // }
                            ?> 
          
         <!--  <div class="col-md-5 col-lg-4"> -->
              
               
            <?php 
                        
                        //$sql="SELECT * FROM blogs limit 2 offset 1";
                        //$run=mysqli_query($conn,$sql);
                        //while ($row=mysqli_fetch_assoc($run)) {
                        //echo '<div class="blog-post mb-4">
              ///<div class="blog-post-image">
                //<img class="img-fluid" src="'.$row['image'].'" alt="">
              //</div>
              //<div class="blog-post-content">
               // <div class="blog-post-info">
                 // <div class="blog-post-author">
    //<a href="blog_detail.php?id='.$row['id'].'" class="btn btn-light-round btn-round text-primary">';?>
              
               <?php
                                    
                                   // $sqll="SELECT * FROM blog_category WHERE id='$row[b_id]'";
                                   // $runl=mysqli_query($conn,$sqll);
                                   // while($rowl=mysqli_fetch_assoc($runl)) {
                                        //    echo $rowl['name'];
                                        
                                        
                                   // }
                                    ?>
              <?php //echo '
             // </a>
                 // </div>
                  //<div class="blog-post-date">
                   // <a  href="blog_detail.php?id='.$row['id'].'">'.$row['publish_date'].'</a>
                 // </div>
                //</div>
                //<div class="blog-post-details">
                  //<h5 class="">
                   // <a href="blog_detail.php?id='.$row['id'].'">'.substr($row['description'],0,50).'..</a>
                  //</h5>
                //</div>
             // </div>
           //</div>
         // ';
                       // }
                          //  ?> 
          
              
            
          <!--   </div>
        </div>
        <hr class="m-0 mt-4">
        <div class="row mt-4 mt-md-5">
          <div class="col-12 d-md-flex justify-content-center align-items-center text-center">
            <p class="mb-3 mb-md-0 mx-0 mx-md-3 text-light">We have articles on a range of topics</p>
            <a href="blog.php" class="btn btn-primary-round btn-round mx-0 mx-md-3">View all Blogs<i class="fas fa-arrow-right pl-3"></i></a>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    Articles -->

    <!--=================================
    Action Box -->
    <section class="space-pb dark-background bg-dark">
      <div class="container">
        <div class=" text-center rounded py-5 px-3">
          <h2 class="text-white">Looking to implement an idea for your business, we will turn it into reality</h2>
          <h6 class="text-white">Develop your own custom solution or boost marketing potential today with us</h6>
          <a href="contact.php" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
      </div>
    </section>
    <!--=================================
    Action Box -->

    <!--=================================
    footer-->
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("action") > -1) {
      swal({
  title:'Order Placed',
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
