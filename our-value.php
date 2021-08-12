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
          

          $sql="SELECT * FROM value WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $description      	=$row['description'];
            $video_link      	=$row['video_link'];
         
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Our Values</h1>
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
                <li class="nav-item"><a class="nav-link" href="mission-vision.php">Mission and vision</a></li>
                <li class="nav-item"><a class="nav-link active" href="our-value.php">Our values</a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb pb-md-5 bg-dark">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10 text-center text-white">
            <h2 class="text-white mb-4"><?php echo  $title;?></h2>
            <p class="mb-0"> <?php echo  $description;?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-dark-half-sm">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="position-relative">
              <img class="img-fluid border-radius" src="images/blog/01.jpg" alt="">
              <a class="icon-btn icon-btn-lg icon-btn-all-center btn-animation popup-youtube" href="<?php echo  $video_link;?>"><i class="fas fa-play fa-1x"></i>
              </a>
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
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>01</span>
                <h5 class="mb-0 ml-4 feature-info-title">We know your business already</h5>
              </div>
              <p class="mt-4 mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>02</span>
                <h5 class="mb-0 ml-4 feature-info-title">Building context – not just code</h5>
              </div>
              <p class="mt-4 mb-0">What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>03</span>
                <h5 class="mb-0 ml-4 feature-info-title">We are responsive and flexible</h5>
              </div>
              <p class="mt-4 mb-0">This is perhaps the single biggest obstacle that all of us must overcome in order to be successful.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>04</span>
                <h5 class="mb-0 ml-4 feature-info-title">10 years experience – and counting</h5>
              </div>
              <p class="mt-4 mb-0">To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>05</span>
                <h5 class="mb-0 ml-4 feature-info-title">Making the decision</h5>
              </div>
              <p class="mt-4 mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>06</span>
                <h5 class="mb-0 ml-4 feature-info-title">Clarity – developing the Vision</h5>
              </div>
              <p class="mt-4 mb-0">Having clarity of purpose and a clear picture of what you desire, is probably the single most important.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-number mb-0">
                <span>07</span>
                <h5 class="mb-0 ml-4 feature-info-title">Focus – having a plan</h5>
              </div>
              <p class="mt-4 mb-0">So, make the decision to move forward. Commit your decision to paper, just to bring it into focus.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="space-pb our-clients">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-4 mb-4 mb-md-0">
            <h5 class="text-primary mb-0">Awards and Nominees</h5>
          </div>
          <div class="col-xl-9 col-md-8">
            <div class="owl-carousel owl-loaded owl-drag" data-nav-arrow="false" data-items="4" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
              
              
              
              
              
              
            <div class="owl-stage-outer owl-height" style="height: 25.2875px;"><div class="owl-stage" style="transform: translate3d(-1081px, 0px, 0px); transition: all 1s ease 0s; width: 3028px;">
           
            <?php
           $sql2="SELECT * FROM award ";
           $run2=mysqli_query($conn,$sql2);
           while($row2=mysqli_fetch_assoc($run2)) {
            if($row2['image']=='') {
              continue;
            }else {
            echo '
            <div class="owl-item cloned" style="width: 176.25px; margin-right: 40px;">
            <div class="item">
                <img class="img-fluid w-75 grayscale" src="'.$row2['image'].'" alt="">
              </div>
            </div>
            ';
           }
           }
          ?>
            

          </div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
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
