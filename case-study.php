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
      .owl-carousel .nav-btn{
  height: 47px;
  position: absolute;
  width: 26px;
  cursor: pointer;
  top: 100px !important;
}

.owl-carousel .owl-prev.disabled,
.owl-carousel .owl-next.disabled{
pointer-events: none;
opacity: 0.2;
}

.owl-carousel .prev-slide{
  background: url(nav-icon.png) no-repeat scroll 0 0;
  left: -33px;
}
.owl-carousel .next-slide{
  background: url(nav-icon.png) no-repeat scroll -24px 0px;
  right: -33px;
}
.owl-carousel .prev-slide:hover{
 background-position: 0px -53px;
}
.owl-carousel .next-slide:hover{
background-position: -24px -53px;
}   
      </style>
    </head>
    
  <body>

    <!--=================================
    header -->
 <?php
          include('include/header.php');
          

          $sql="SELECT * FROM case_study_front_page WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $description		=$row['description'];
            
         
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Case Studies</h1>
              <p class="text-white mb-0"><?php echo  $title;?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
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
                    <span class="timer" data-to="491" data-speed="10000">491</span>
                    <label>Projects Complete</label>
                  </div>
                </div>
              </div>
            </div>
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
            <div class="owl-carousel text-left owl-loaded owl-drag" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1">
              
              
                <div class="owl-stage-outer">
                <div class="owl-stage   " style="transform: translate3d(-1900px, 0px, 0px); transition: all 1s ease 0s; width: 7600px;">
                    <?php
                       $sqll="SELECT * FROM case_study_detail ";
          $runl=mysqli_query($conn,$sqll);
          while($rowl=mysqli_fetch_assoc($runl)) {
              if($rowl['id']=='') {
                  continue;
              }
              else {
               
          echo '<div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="items">
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
    <section class="space-pb dark-background">
      <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">
          <h2 class="text-white">Looking to implement an idea for your business, we will turn it into reality</h2>
          <h6 class="text-white">Develop your own custom solution or boost marketing potential today with us</h6>
          <a href="contact.php" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
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
                
$( document ).ready(function() {
     $('.owl-carousel').owlCarousel({
    margin: 10,
    nav: true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
});
        
     
      </script>

  </body>
</html>
