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
          

 $sql="SELECT * FROM blogs WHERE id ='$_GET[id]'";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        $id=$row['id'];
 $image=$row['image'];
 $title=$row['title'];
 $description=$row['description'];
 $b_id=$row['b_id'];
                        }


          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h3 class="text-white font-weight-normal"><?php echo $title;?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
      
       <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          
        </div>
        <div class="row">
            
            <?php 
                        
                        $sql="SELECT * FROM blogs WHERE id ='$_GET[id]' ";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo ' 
                        <div class="col-md-12 col-lg-12 mb-4">
            <div class="blog-post blog-post-sticky">
              <div class="blog-post-image">
                <img class="w-100" src="'.$row['image'].'" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="comingsoon.php" class="btn btn-light-round btn-round text-primary">
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
                    <a href="blog.php?id='.$row['id'].'">'.$row['publish_date'].'</a>
                  </div>
                </div>
                <div class="blog-post-details">
                  
                    <p>'.$row['description'].'</p>
                </div>
              </div>
            </div>
          </div>
                      ';
                        }
                            ?> 
          
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
    

  </body>
</html>
