<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-12449328-20a1-47fc-b841-c3d49340691b"></div>
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-3">
              <a href="index.php" style="border:0px solid red;"><img class="img-fluid" src="images/logo.png" alt="logo"></a>
            </div>
            <div class="col-sm-9 text-sm-right mt-4 mt-sm-0">
              <ul class="list-unstyled mb-0 social-icon">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
          <hr class="my-4 my-sm-5 pb-0">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
              <?php
          $sql="SELECT id,title FROM services limit 5";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            echo '<li><a href="service-detail.php?s_id='.$row['id'].'">'.$row['title'].'</a></li>';
          }



          ?>
              <li><a href="services.php">See All Services</a></li>  
              </ul>
             
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="about-us.php">About</a></li>
                <li><a href="how_we_work.php">How we work</a></li>
                <li><a href="our-team.php">Leadership Team</a></li>
                
                <li><a href="case-study.php">Case Studies</a></li>
              
                <li><a href="career.php">Careers <span class="badge badge-success ml-2">We're hiring</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
            <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                
                
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="pricing.php">Pricing And Plans</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="footer-contact-info ">
              <h5 class="text-primary mb-3">Contact OneStation</h5>
              <div class="contact-address">
                <div class="contact-item">
                  <p class="col-md-3">Address:</p>
                  <p>6580 Allison Turnpike Creminfort, AUS 32808</p>
                </div>
                <div class="contact-item">
                    <p class="col-md-3">Phone:</p>
                  <h4 class="mb-0 font-weight-bold"><a href="tel:+(704) 279-1249">+(704) 279-1249</a></h4>
                </div>
                 
                <div class="contact-item">
                   <p class="col-md-3"><img src="images/wp.png" width="40px"/></p>
                  <a class="text-dark mb-0 font-weight-bold h4" href="https://wa.me/923455122987">+(704) 279-1249</a>
                </div>
                <div class="contact-item">
                   <p class="col-md-3">Email:</p>
                  <a class="text-dark" href="index.php#">letstalk@onestation.com</a>
                </div>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-sm-5 py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <p class="mb-0">©Copyright 2020 <a href="index.php">OneSation</a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>   
