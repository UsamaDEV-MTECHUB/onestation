<?php
          include('include/db.php');
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <?php
          include('include/script.php');
          
          $search = "%".$_GET['search']."%";
          
          ?>
  </head>
  <body>

    <!--=================================
    header -->
    <?php
          include('include/header.php');
          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg';z-index:-9999);">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Search</h1>
              <p class="text-white font-weight-normal">Showing results in "Company about ,Services or in Veritcals"</p>
           
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="overview" class="p-5 bg-light">
                              <div class="container">
                                <div class="row text-left justify-content-center">
                                  <div class="col-lg-10">
                                    <div class="section-title text-left">
                                    <h2>About</h2>
                                    <?php 
                        
                        $sql="SELECT * FROM about WHERE title like '$search' OR detail like '$search' ";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                          
                          echo '<p>&nbsp;</p><p>'.substr($row['title'],0,100).' ...........</p><p> '.substr(strip_tags($row['detail']),0,100).'  ........</p>';
                        echo ' <a href="about-us.php" class="mt-3 btn btn-dark btn-round text-white btn-sm">See more</a>
                        ';
                        }
                        
                        ?>
                                    
                 
                                       
                                  </div>
                                  </div>
                                  <div class="col-lg-10">
                                    <div class="section-title text-left">
                                      <h2>Career</h2>
                                      <?php 
                        
                        $sql1="SELECT * FROM career_posts WHERE title like '$search' OR description like '$search' ";
                        $run1=mysqli_query($conn,$sql1);
                        while ($row1=mysqli_fetch_assoc($run1)) {
                          
                          echo '<p>&nbsp;</p><p>'.substr($row1['title'],0,100).'</p><p> '.substr(strip_tags($row1['description']),0,100).'  ........</p>';
                        echo ' <a href="career.php" class="mt-3 btn btn-dark btn-round text-white btn-sm">See more</a>
                        ';
                        }
                        
                        ?>
                                </div>
                                    <div class="section-title text-left">
                                      <h2>Services </h2>
                                      <?php 
                        
                        $sql2="SELECT * FROM services WHERE title like '$search' OR description like '$search' OR subtitle like '$search' ";
                        $run2=mysqli_query($conn,$sql2);
                        while ($row2=mysqli_fetch_assoc($run2)) {
                          
                          echo '<p>&nbsp;</p><p>'.substr($row2['title'],0,100).'</p><p> '.substr(strip_tags($row2['description']),0,100).'  ........</p>';
                        echo ' <a href="service-detail.php?s_id='.$row2['id'].'" class="mt-3 btn btn-dark btn-round text-white btn-sm">See more</a>
                        ';
                        }
                        
                        ?>
                                    </div>
                                    <div class="section-title text-left">
                                      <h2>Industry Verticals </h2>
                 
                                      <?php 
                        
                        $sql3="SELECT * FROM vertical WHERE title like '$search' OR overview_detail like '$search' OR heading like '$search' ";
                        $run3=mysqli_query($conn,$sql3);
                        while ($row3=mysqli_fetch_assoc($run3)) {
                          
                          echo '<p>&nbsp;</p><p>'.substr($row3['heading'],0,100).'</p><p> '.substr(strip_tags($row3['title']),0,100).'  ........</p>';
                        echo ' <a href="vertical.php?s_id='.$row3['id'].'" class="mt-3 btn btn-dark btn-round text-white btn-sm">See more</a>
                        ';
                        }
                        
                        ?>
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
