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
          

          $sql="SELECT * FROM mission_and_vision WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $description      	=$row['description'];
            $vision      	=$row['vision'];
            $mission       	=$row['mission'];
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Vision and Mission</h1>
              <p class="text-white mb-0"><?php echo  $title;?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav" style="z-index:9999;">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <ul class="nav">
              <li class="nav-item"><a class="nav-link " href="about-us.php">About us</a></li>
                <li class="nav-item"><a class="nav-link " href="career.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="how_we_work.php">How we work</a></li>
                <li class="nav-item"><a class="nav-link" href="our-team.php">Our team</a></li>
                <li class="nav-item"><a class="nav-link active" href="mission-vision.php">Mission and vision</a></li>
                <li class="nav-item"><a class="nav-link" href="our-value.php">Our values</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-pt">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
              <h2><?php echo  $heading;?></h2>
              <p><?php echo  $description;?></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-6 mb-4 mb-sm-0">
            <div class="feature-info feature-info-style-02 bg-dark text-white">
              <div class="feature-info-icon">
                <i class="flaticon-eye text-white"></i>
                <h4 class="mb-0 ml-4 feature-info-title text-white">Our Vision</h4>
              </div>
              <div class="feature-info-content">
                <p class="mb-0"><?php echo  $vision;?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-info feature-info-style-02 bg-primary text-white">
              <div class="feature-info-icon">
                <i class="flaticon-target text-white"></i>
                <h4 class="mb-0 ml-4 feature-info-title text-white">Our Mission</h4>
              </div>
              <div class="feature-info-content">
                <p class="mb-0"><?php echo  $mission;?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section>
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-sm-12">
            <img class="img-fluid" src="images/bg/07.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb">
      <div class="container">
        <div class="row d-lg-flex align-items-center justify-content-center pb-4 pb-md-5">
          <div class="col-lg-6">
            <h2 class="mb-3 mb-lg-0">Three reasons why you should choose our service</h2>
          </div>
          <div class="col-lg-6 text-lg-right">
            <a href="contact.php" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-07">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/blog/01.jpg" alt="">
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Mission and vision</h4>
                <p>Our Vision &amp; Mission are both helping our team to achieve the goal. We identify the clients' requirements and provide the best solutions.</p>
                <a href="mission-vision.php" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-07">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/blog/02.jpg" alt="">
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Our challenges</h4>
                <p>We take pride in helping our clients deliver marvelous results when it comes to their projects. From data to performance, we’ve got you covered.</p>
                <a href="mission-vision.php" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-info feature-info-style-07">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/blog/03.jpg" alt="">
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Meet the our team</h4>
                <p>Meet our institute leaders and the hard-working personalities who deliver innovative concepts to corporations like yours.</p>
                <a href="our-team.php" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
 
    <section class="space-pb">
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
