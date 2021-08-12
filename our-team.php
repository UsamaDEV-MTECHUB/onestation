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
          

          $sql="SELECT * FROM our_team WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $projects_completed	=$row['projects_completed'];
            $description      	=$row['description'];
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Meet Our Team</h1>
              <p class="text-white mb-0"><?php echo  $title;?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <ul class="nav">
              <li class="nav-item"><a class="nav-link " href="about-us.php">About us</a></li>
                <li class="nav-item"><a class="nav-link " href="career.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="how_we_work.php">How we work</a></li>
                <li class="nav-item"><a class="nav-link active" href="our-team.php">Our team</a></li>
                <li class="nav-item"><a class="nav-link" href="mission-vision.php">Mission and vision</a></li>
                <li class="nav-item"><a class="nav-link" href="our-value.php">Our values</a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title">
              <h2 class="mb-3"><?php echo  $heading;?></h2>
              <p><?php echo  $description;?></p>
            </div>
            <a href="about-us.php" class="btn btn-light-round btn-round w-space">Know More About<i class="fas fa-arrow-right pl-3"></i></a>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-sm-6">
                <img class="img-fluid border-radius mb-4 mt-4" src="images/about/05.jpg" alt="">
                <img class="img-fluid border-radius mb-4 mb-sm-0" src="images/about/06.jpg" alt="">
              </div>
              <div class="col-sm-6">
                <img class="img-fluid border-radius mb-4" src="images/about/07.jpg" alt="">
                <div class="counter counter-03">
                  <div class="counter-content">
                    <span class="timer" data-to="<?php echo  $projects_completed;?>" data-speed="10000"><?php echo  $projects_completed;?></span>
                    <label>Projects Complete</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section class="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
              <h2>Meet our heroes</h2>
              <p class="lead">Our team is friendly, talkative, and fully reliable.</p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
        
          

          $sql1="SELECT * FROM our_heros";
          $run1=mysqli_query($conn,$sql1);
          while($row1=mysqli_fetch_assoc($run1)) {
           echo ' <div class="col-xl-2 col-md-3 col-sm-4 col-6">
           <div class="team">
             <div class="team-bg"></div>
             <div class="team-img">
               <img class="img-fluid" src="'.$row1['image'].'" alt="">
             </div>
             <div class="team-info">
               <a href="our-team.php" class="team-name">'.$row1['name'].'</a>
               <p>'.$row1['title'].'</p>
               <ul class="list-unstyled">
                 <li><a href="'.$row1['fb_link'].'"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="'.$row1['twitter_link'].'"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="'.$row1['linkedin_link'].'"><i class="fab fa-linkedin-in"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
        ';
          }



          ?>
          </div>
      </div>
    </section>


    <section class="space-ptb">
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
