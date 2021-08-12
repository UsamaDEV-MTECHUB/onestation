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
          $title	='';
          $detail		='';
          $happy_clients	='';	
          $skilled_experts		='';
          $finished_projects	='';
          $media_posts	='';

          $sql="SELECT * FROM about WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $detail		=$row['detail'];
            $happy_clients	=$row['happy_clients'];	
            $skilled_experts		=$row['skilled_experts'];
            $finished_projects	=$row['finished_projects'];
            $media_posts	=$row['media_posts'];
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg'); background-size: cover; background-position: center; object-fit: cover;background-repeat: no-repeat;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">About Onestation</h1>
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
              <li class="nav-item"><a class="nav-link active" href="about-us.php">About us</a></li>
                <li class="nav-item"><a class="nav-link " href="career.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="how_we_work.php">How we work</a></li>
                <li class="nav-item"><a class="nav-link" href="our-team.php">Our team</a></li>
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
          <div class="col-md-9">
            <div class="section-title text-center">
            <?php echo  $detail;?></div>
          </div>
        </div>
      </div>
    </section>
    <section class="space-pb popup-gallery overflow-hidden">
      <div class="container-fluid">
      <div class="row d-flex align-items-end">
      <?php
       

          $sqll="SELECT * FROM about_gallery ";
          $runl=mysqli_query($conn,$sqll);
          while($rowl=mysqli_fetch_assoc($runl)) {
           echo '
           <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
             <a class="portfolio-img" href="'.$rowl['image'].'"><img class="img-fluid" src="'.$rowl['image'].'" alt=""></a>
           </div>
           ';
          }



          ?>
</div>
        
        
      </div>
    </section>
<!----------------------    <section class="py-4 bg-transparant border">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="counter counter-02">
              <div class="counter-icon align-self-center">
                <i class="flaticon-emoji"></i>
              </div>
              <div class="counter-content align-self-center">
                <span class="timer" data-to="   <?php echo  $happy_clients;?>" data-speed="10000">   <?php echo  $happy_clients;?></span>
                <label>Happy Clients</label>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter counter-02">
              <div class="counter-icon">
                <i class="flaticon-trophy"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="   <?php echo  $skilled_experts;?>" data-speed="10000">   <?php echo   $skilled_experts;?></span>
                <label>Skilled Experts</label>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter counter-02">
              <div class="counter-icon">
                <i class="flaticon-strong"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="   <?php echo  $finished_projects;?>" data-speed="10000">   <?php echo  $finished_projects;?></span>
                <label>Finished Projects</label>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter counter-02">
              <div class="counter-icon">
                <i class="flaticon-icon-149196"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="   <?php echo  $media_posts;?>" data-speed="10000">   <?php echo   $media_posts;?></span>
                <label>Media Posts</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

--------------------->
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

      <section class="space-pb dark-background">
      <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">
           <h2 class="text-white">Looking to implement an idea for your business, we will turn it into reality</h2>
          <h6 class="text-white">Develop your own custom solution or boost marketing potential today with us</h6>
          <a href="services.php" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
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
