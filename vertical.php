<?php
          include('include/db.php');
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
          include('include/script.php');
          ?>
          <style>
              .owl-carousel .owl-item img {
  -webkit-transform-style: flat;
  -moz-transform-style: flat;
  -ms-transform-style: flat;
  -o-transform-style: flat;
  transform-style: flat;
}

          </style>
          <script>
              $(document).ready(function() {
  var owl = $('#banner');  
  owl.owlCarousel({
    items: 1,
    loop: true,
  }); 
});
          </script>
  </head>
  <body>

    <!--=================================
    header -->
 <?php
          include('include/header.php');
          

          $sql="SELECT * FROM vertical WHERE id='$_GET[id]'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $overview_heading		=$row['overview_heading'];
            $overview_detail		=$row['overview_detail'];
            $result_title		=$row['result_title'];
            $result_description		=$row['result_description'];
           
         
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal"><?php echo  $heading;?></h1>
              <p class="text-white mb-0"><?php echo  $title;?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
                <li class="nav-item"><a class="nav-link" href="#delivering-results">Delivering Results </a></li>
                <li class="nav-item"><a class="nav-link " href="#client-success">Client Success </a></li>
                <li class="nav-item"><a class="nav-link" href="#case-studies">Case Studies</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="overview" class="space-ptb bg-light">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center">
              <h2>Overview</h2>
              <h4 class="text-dark"><?php echo  $overview_heading;?></h4>
            </div>
            <p class="mb-0"><?php echo  $overview_detail;?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="delivering-results" class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2>Smart strategy &amp; excellent performance</h2>
              <p>Process that guarantees high productivity and profitability for your solution.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                <i class="flaticon-idea-1"></i>
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Data Analysis</h5>
                <p class="mb-0">We conduct thorough data collection and analysis of your institution’s current strengths and differentiators.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                <i class="flaticon-diamond"></i>
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Making a plan</h5>
                <p class="mb-0">We will work together with you to develop a plan that is actionable, feasible and tailored to your needs.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-info feature-info-style-05 text-center">
              <div class="feature-info-icon">
                <i class="flaticon-rocket"></i>
              </div>
              <div class="feature-info-content">
                <h5 class="feature-info-title">Deliver Result</h5>
                <p class="mb-0">Our role in this step is to provide expertise where needed, to augment select initiatives as desired.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="space-ptb bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-7 mb-4 mb-md-0">
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="section-title mb-4">
                  <h2>Delivering Results</h2>
                  <p><?php echo  $result_title;?></p>
                </div>
                <p class="mb-0"><?php echo  $result_description;?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 offset-lg-1 align-items-center">
            <div class="mb-4">
              <span class="display-4 text-primary font-weight-bold">81%</span>
              <h6 class="text-light font-weight-normal">A totally new way to grow your business</h6>
              <hr class="light-bg">
            </div>
            <div class="mb-4">
              <span class="display-4 text-primary font-weight-bold">Improved</span>
              <h6 class="text-light font-weight-normal">We are adding extra value for your business</h6>
              <hr class="light-bg">
            </div>
            <div>
              <span class="display-4 text-primary font-weight-bold">Increased</span>
              <h6 class="text-light font-weight-normal mb-0">Award-winning website design &amp; creative digital agency services</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="space-ptb" id="client-success">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-12 text-center">
            <div class="owl-carousel testimonial owl-loaded owl-drag" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
              
              
            <div class="owl-stage-outer owl-height" style="height: 332.4px;">
            <div class="owl-stage" style="transform: translate3d(-2220px, 0px, 0px); transition: all 1s ease 0s; width: 6660px;">
          <?php
           $sql1="SELECT * FROM testimonial ";
           $run1=mysqli_query($conn,$sql1);
           while($row1=mysqli_fetch_assoc($run1)) {
             if($row1['title']=='') {
               continue;
             }else {
            echo '
            <div class="owl-item cloned" style="width: 1110px;">
            <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-avatar shadow">
                    <img class="img-fluid rounded-circle" src="'.$row1['image'].'" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>'.$row1['description'].'</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="mb-1">'.$row1['title'].'   </h6>
                      <span>'.$row1['name'].'</span>
                    </div>
                  </div>
                </div>
              </div></div>
            ';}
           }
          ?>
          
           
              
           </div>
        </div>
      </div>
    </section>
    <section id="case-studies" class="space-ptb">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-8">
            <div class="section-title">
              <h2><span class="text-primary">What's next?</span> our latest client stories</h2>
              <p class="lead">We love what we do. Our clients tell us the same thing.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- owl carousel -->
            <div class="owl-carousel text-left owl-loaded owl-drag"  data-items="3" id="banner" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1">
              
              
              
              
              
              
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1900px, 0px, 0px); transition: all 1s ease 0s; width: 7600px;">
                
                <?php
                       $sqll="SELECT * FROM case_study_detail ";
          $runl=mysqli_query($conn,$sqll);
          while($rowl=mysqli_fetch_assoc($runl)) {
              if($rowl['id']=='') {
                 
              }
              else {
               
          echo '<div class="owl-item " style="width: 350px; margin-right: 30px;"><div class="items">
                <div class="case-study ">
                  <div class="case-study-img case-study-lg bg-holder" style="background-image: url('.$rowl['image'].');">
                  </div>
                  <div class="case-study-info">
                    <a class="case-study-title font-weight-bold" >'.$rowl['title'].'</a>
                    <span class="case-study-services text-white">'.$rowl['v_id'].'</span>
                  </div>
                </div>
              </div></div>';
            
              } }
                    ?>
                
               </div></div>  </div>
        </div>
      </div>
      </div>
    </section>
    <section class="space-pb mt-5" id="contact-us">
      <div class="container">
        <div class="row dark-background">
          <div class="col-sm-6 col-lg-6 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 font-weight-normal feature-info-title">Careers</h4>
                <p>Walkout 10 years into your future and feel how it feels to carry on doing the same thing.</p>
                <a href="career.php" class="btn btn-primary-round btn-round text-white">View Positions<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
            </div>
          </div>
       
          <div class="col-lg-6">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 font-weight-normal feature-info-title">Contact</h4>
                <p>I want you to think about how you will feel in 10 years if you continue doing the exact same things.</p>
                <a href="contact.php" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
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
    

  </body>
</html>
