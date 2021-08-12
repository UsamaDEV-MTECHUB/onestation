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
          $heading			='';
          $projects_completed	='';	
          $description 		='';
          

          $sql="SELECT * FROM career WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $projects_completed	=$row['projects_completed'];
            $description      	=$row['description'];
          
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/02.jpg';z-index:-9999);">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Careers</h1>
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
                <li class="nav-item"><a class="nav-link active" href="career.php">Careers</a></li>
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
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="row no-gutters d-flex align-items-end mb-4 mb-sm-2">
              <div class="col-sm-8 pr-sm-2 mb-4 mb-sm-0">
                <img class="img-fluid border-radius" src="images/about/08.jpg" alt="">
              </div>
              <div class="col-sm-4">
                <div class="counter counter-03 py-5">
                  <div class="counter-content">
                    <span class="timer" data-to="<?php echo  $projects_completed;?>" data-speed="1000"><?php echo  $projects_completed;?></span>
                    <label>Projects Complete </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-sm-6">
                <img class="img-fluid border-radius" src="images/about/09.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-xl-5">
            <h2 class="mb-4"><?php echo  $heading;?></h2>
            <?php echo  $description;?>
          </div>
        </div>
      </div>
    </section>
    
    <section class="space-ptb bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6">
            <h2 class="mb-3 mb-lg-0">Four reasons why you should choose our service</h2>
          </div>
          <div class="col-lg-6 text-lg-right">
            <a href="contact.php" class="btn btn-white-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
          </div>
        </div>
        <div class="row mt-4 mt-lg-5">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/feature-info/01.jpg" alt="">
              </div>
              <div class="feature-info-number mb-0">
                <span>01</span>
                <h5 class="mb-0 ml-4 feature-info-title">We know your business already</h5>
              </div>
              <p class="mt-4 mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/feature-info/02.jpg" alt="">
              </div>
              <div class="feature-info-number mb-0">
                <span>02</span>
                <h5 class="mb-0 ml-4 feature-info-title">Building context – not just code</h5>
              </div>
              <p class="mt-4 mb-0">What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/feature-info/03.jpg" alt="">
              </div>
              <div class="feature-info-number mb-0">
                <span>03</span>
                <h5 class="mb-0 ml-4 feature-info-title">We are responsive and flexible</h5>
              </div>
              <p class="mt-4 mb-0">This is perhaps the single biggest obstacle that all of us must overcome in order to be successful.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-info feature-info-style-06">
              <div class="feature-info-img">
                <img class="img-fluid" src="images/feature-info/04.jpg" alt="">
              </div>
              <div class="feature-info-number mb-0">
                <span>04</span>
                <h5 class="mb-0 ml-4 feature-info-title">10 years experience – and counting</h5>
              </div>
              <p class="mt-4 mb-0">To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <section class="space-ptb">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
              <h2>Current career opportunities at Hi-soft</h2>
              <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
            <div class="accordion" id="career-opportunities">

<?php 


$sqls="SELECT * FROM career_posts  ";
$runs=mysqli_query($conn,$sqls);
while($rows=mysqli_fetch_assoc($runs)) {
  $row1= $rows['id'].'sdf';
  echo '<div class="card">
  <div class="accordion-icon card-header" id="'.$row1.'s">
    <h4 class="mb-0">
    <button class="btn collapsed" type="button"  data-target="#'.$row1.'" aria-expanded="false" aria-controls="security-manager">'. $rows['title'].'</button>
    </h4>
  </div>
  <div id="'.$row1.'" class="" aria-labelledby="'.$row1.'s" data-parent="#career-opportunities" style="">
    <div class="card-body">
      '. $rows['description'].'<br> <a href="contact.php" class="btn btn-light-round mt-3 btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
  </div>
</div>';

}

?>


            </div>
          </div>
        </div>
        <div class="row mt-4 mt-md-5">
          <div class="col text-center">
            <p>Don’t see a role that fits? Send us your resume.</p>
            <a href="contact.php" class="btn btn-primary btn-round text-white w-space">Contact Us<i class="fas fa-arrow-right pl-3"></i></a>
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
