
<header class="header default">
      <div class="topbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-4 d-inline-block py-1">
                  <a href="mailto:letstalk@onestation.com"><i class="far fa-envelope mr-2 fa-flip-horizontal text-primary"></i>letstalk@onestation.com</a>
                </div>
                <div class="mr-4  d-inline-block  ">
                  <a href="tel:704-279-1249"><i class="fas fa-phone text-primary mr-2"></i>+(704) 279-1249</a>
                </div> 
                  <div class="mr-auto d-inline-block py-1">
                  <a href="#"><i class="fas fa-map-marker-alt text-primary mr-2"></i>6580 Allison Turnpike Creminfort, AL 32808</a>
                </div>
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    
                            <li class="mt-3"><a href="cart.php" ><i class="fa fa-shopping-cart fa-1x" style="font-size:20px;"></i>
                          <span  id="icon_red"></span></a>
                      </li>
                     
                    
                           <li class="header-search nav-item mt-3">
                <div class="search ">
                  <a class="search-btn not_click" href="javascript:void(0);"></a>
                  <div class="search-box not-click border border-dark shadow">
                    <form  method="get" action="search.php">
                      <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                      <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                    </form>
                  </div>
                </div>
              </li>
                    <!-- <li class="mt-3"><a href="comingsoon.php" >News & Media</a></li> -->
                    <!-------<li class="mt-3"><a href="comingsoon.php" >FAQ</a></li>------->
                     
                      
                      
                   
                  </ul>
                   
           
              
         
         
         
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
        <div class="container-fluid">
            <style>
                #topx{border-bottom: 0px solid red;}
               #topx:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
            </style>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand topx" href="index.php">
            <img class="img-fluid" src="images/logo.png" alt="logo">
          </a>
          <style>
               #top{border-bottom: 0px solid red;}
               #top:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
               
  
               #top1{border-bottom: 0px solid red;}
               #top1:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
  
               #top2{border-bottom: 0px solid red;}
               #top2:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
  
               #top3{border-bottom: 0px solid red;}
               #top3:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
  
               #top4{border-bottom: 0px solid red;}
               #top4:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
  
               #top5{border-bottom: 0px solid red;}
               #top5:hover{border-bottom: 3px solid red;
  border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  border-image-slice: 1}
  
              
          </style>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item     ">
                <a class="nav-link "  href="index.php" id="top">Home</a>
                
              </li>
              <li class="nav-item  mega-menu ">
                <a class="nav-link" href="services.php"  id="top1">Services</a>
                <ul class="dropdown-menu megamenu">
                  <li> 
                    <div class="row" style="padding: 25px;">
                      <div class="col-sm-6 col-lg-3">
                        <h6 class="mb-3 nav-title">Services At Onestation</h6>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a href="services.php">All Services</a></li>
                          <li><a href="#">Service By Industry</a></li>
                           
                        </ul>
                      </div>
                        
                        <?php 
                        
                        $sql="SELECT * FROM service_category";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                            ?>
                        
                        
                      <div class="col-sm-6 col-lg-3">
                        <h6 class="mb-3 nav-title"><?php echo $row['name'];?></h6>
                        <ul class="list-unstyled mt-lg-3">
                                                               
 
                        <?php 
                        
                        $sqll="SELECT id,s_cat_id, title FROM services WHERE s_cat_id='$row[id]'";
                        $runl=mysqli_query($conn,$sqll);
                        while ($rowl=mysqli_fetch_assoc($runl)) {
                        echo '<li><a href="service-detail.php?s_id='.$rowl['id'].'">'.$rowl['title'].'</a></li>';
                        }
                            ?>
                        
                          
                
                        </ul>
                      </div>
                      <?php
                        }
                        ?>
                    </div>
                  </li>
                </ul>
              </li>
              
              <li class="dropdown nav-item ">
                <a  href="#" class="nav-link" data-toggle="dropdown"  id="top2">Company</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="about-us.php">About Us<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="career.php">Careers<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="how_we_work.php">How We Work<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="our-team.php">Our Team<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="mission-vision.php">Mission Vision<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="our-value.php">Our Value<i class="fas fa-arrow-right"></i></a></li>
                   
                </ul>
              </li>
               
              <li class="dropdown nav-item  ">
                <a href="#" class="nav-link"   id="top3" >Verticals</a>
                <ul class="dropdown-menu">
                <?php
           $sql2="SELECT id,heading FROM vertical ";
           $run2=mysqli_query($conn,$sql2);
           while($row2=mysqli_fetch_assoc($run2)) {
           
            echo '
            <li><a class="dropdown-item" href="vertical.php?id='.$row2['id'].'">'.$row2['heading'].'<i class="fas fa-arrow-right"></i></a></li>
                  
            ';
           
           }
          ?>
     </ul>
              </li>
              <li class="nav-item  " >
                <a class="nav-link" href="case-study.php"  id="top4">Portfolio</a>
                
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="contact.php"  id="top5">Contact</a>
                
              </li>
              
               
                </ul>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
    </header> 