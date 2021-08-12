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
          




          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Blogs</h1>
              <p class="text-white mb-0">We have articles on a range of topics</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      
       <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center">
              <h2>Latest news and inspirational stories</h2>
              <p>Check out our latest blog posts, articles, client success stories and essential announcement.</p>
            </div>
          </div>
        </div>
        <div class="row">
            
            <?php 
                        
                        $sql="SELECT * FROM blogs limit 1";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo ' 
                        <div class="col-md-7 col-lg-8 mb-4">
            <div class="blog-post blog-post-sticky">
              <div class="blog-post-image">
                <img class="img-fluid" src="'.$row['image'].'" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="blog_detail.php?id='.$row['id'].'" class="btn btn-light-round btn-round text-primary">
                    ';
                    ?>
            
              <?php
                                    
                                    $sqll="SELECT * FROM blog_category WHERE id='$row[b_id]'";
                                    $runl=mysqli_query($conn,$sqll);
                                    while($rowl=mysqli_fetch_assoc($runl)) {
                                            echo $rowl['name'];
                                        
                                        
                                    }
                                    ?>
            
                      <?php  echo '
                        </a>
                  </div>
                  <div class="blog-post-date">
                    <a href="blog_detail.php?id='.$row['id'].'">'.$row['publish_date'].'</a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="blog-post-title">
                    <a href="blog_detail.php?id='.$row['id'].'">'.substr($row['description'],0,200).'..</p>
                </div>
              </div>
            </div>
          </div>
                      ';
                        }
                            ?> 
          
          <div class="col-md-5 col-lg-4">
              
               
            <?php 
                        
                        $sql="SELECT * FROM blogs limit 1000 offset 1";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo '<div class="blog-post mb-4">
              <div class="blog-post-image">
                <img class="img-fluid" src="'.$row['image'].'" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="blog_detail.php?id='.$row['id'].'" class="btn btn-light-round btn-round text-primary">';?>
              
               <?php
                                    
                                    $sqll="SELECT * FROM blog_category WHERE id='$row[b_id]'";
                                    $runl=mysqli_query($conn,$sqll);
                                    while($rowl=mysqli_fetch_assoc($runl)) {
                                            echo $rowl['name'];
                                        
                                        
                                    }
                                    ?>
              <?php echo '
              </a>
                  </div>
                  <div class="blog-post-date">
                    <a  href="blog_detail.php?id='.$row['id'].'">'.$row['publish_date'].'</a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="">
                    <a href="blog_detail.php?id='.$row['id'].'">'.substr($row['description'],0,50).'..</a>
                  </h5>
                </div>
              </div>
            </div>
          ';
                        }
                            ?> 
          
              
            
            </div>
        </div>
        <hr class="m-0 mt-4">
       
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
    

  </body>
</html>
