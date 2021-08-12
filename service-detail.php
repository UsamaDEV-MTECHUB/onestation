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
.nav1.active {
  
    display: inline-flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap;
    overflow-x: scroll;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
     
.example {border:0px solid blue;position:absolute;top:70px; left:260px;
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .example {position:absolute;top:70px; left:300px;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .example {position:absolute;top:70px; left:600px;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .example {position:absolute;top:70px; left:200px;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .example {position:absolute;top:70px; left:210px;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .example {position:absolute;top:70px; left:260px;}
}
            </style>
  </head>
  <body onload="get_cart();">

    <!--=================================
    header -->
 <?php
          include('include/header.php');
          ?>
    <?php
        $sql="SELECT * FROM services WHERE id='$_GET[s_id]'";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
      
      
      ?>
   <section class="header-inner header-inner-menu bg-overlay-black-30" style="background-image: url('images/header-inner/10.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal"><?php echo $row['title'];?></h1>
              <p class="text-white mb-0"><?php echo $row['subtitle'];?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav page-menu-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
                <li class="nav-item"><a class="nav-link" href="#backend">Backend</a></li>
                <li class="nav-item"><a class="nav-link" href="#frontend">Frontend</a></li>
                <li class="nav-item"><a class="nav-link" href="#architecture">Architecture</a></li>
                <li class="nav-item"><a class="nav-link" href="#delivering-results">Our Process </a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                 
                <li class="nav-item"><a class="nav-link" href="#case-studies">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> 
       <?php
        $sql="SELECT * FROM service_detail WHERE s_id='$_GET[s_id]'";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                            echo' 
                            <section id="overview" class="p-5 bg-light">
                              <div class="container">
                                <div class="row text-center justify-content-center">
                                  <div class="col-lg-10">
                                    <div class="section-title text-center">
                                      <h2>Overview</h2>
                                    '.$row['overview'].'
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="backend" class="pb-5 bg-light">
                              <div class="container">
                                <div class="row text-center justify-content-center">
                                  <div class="col-lg-10">
                                    <div class="section-title text-center">
                                      <h2>Backend</h2>
                                    '.$row['backend'].'
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                             <section id="frontend" class="pb-5 bg-light">
                              <div class="container">
                                <div class="row text-center justify-content-center">
                                  <div class="col-lg-10">
                                    <div class="section-title text-center">
                                      <h2>Frontend</h2>
                                    '.$row['frontend'].'
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                             <section id="architecture" class="pb-5 bg-light">
                              <div class="container">
                                <div class="row text-center justify-content-center">
                                  <div class="col-lg-10">
                                    <div class="section-title text-center">
                                      <h2>Architecture</h2>
                                    '.$row['architecture'].'
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            
                            ';
                                                    
                        }
      
      
      ?>
      
   
      <?php
                        }
      ?>
      <!--------<section id="technology" class="space-ptb bg-light">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Digital marketing services that help you grow.</h2>
              <p>Fortune 100 companies and established brands trust our enterprise software development.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          
            <div class="owl-carousel owl-carouselstyle-02 owl-loaded owl-drag" data-nav-arrow="false" data-nav-dots="false" data-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-space="30" data-autoheight="true">
              
              
              
              
            <div class="owl-stage-outer owl-height" style="height: 341.2px;"><div class="owl-stage" style="transform: translate3d(-2090px, 0px, 0px); transition: all 1s ease 0s; width: 3346px;"><div class="owl-item cloned" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-thunder"></i>
                    <h5 class="category-title mb-0">Asp.net web service</h5>
                  </div>
                  <p class="mb-0">When you decide you want to have a romantic meal for two, there are many steps that you need to perform in order for that to happen.</p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-author"></i>
                    <h5 class="category-title mb-0">Core PHP</h5>
                  </div>
                  <p class="mb-0">You need to determine the exact sequence of events and write it down. Begin with the outcome in mind. Write without stopping.</p>
                </div>
              </div></div><div class="owl-item" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-monitor"></i>
                    <h5 class="category-title mb-0">Ajax</h5>
                  </div>
                  <p class="mb-0">This is the beginning of creating the life that you want to live. Know what the future holds for you as a result of the choice you can make today. </p>
                </div>
              </div></div><div class="owl-item" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-mobile-phone"></i>
                    <h5 class="category-title mb-0">Android</h5>
                  </div>
                  <p class="mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
                </div>
              </div></div><div class="owl-item" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-thunder"></i>
                    <h5 class="category-title mb-0">Asp.net web service</h5>
                  </div>
                  <p class="mb-0">When you decide you want to have a romantic meal for two, there are many steps that you need to perform in order for that to happen.</p>
                </div>
              </div></div><div class="owl-item active" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-author"></i>
                    <h5 class="category-title mb-0">Core PHP</h5>
                  </div>
                  <p class="mb-0">You need to determine the exact sequence of events and write it down. Begin with the outcome in mind. Write without stopping.</p>
                </div>
              </div></div><div class="owl-item cloned active" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-monitor"></i>
                    <h5 class="category-title mb-0">Ajax</h5>
                  </div>
                  <p class="mb-0">This is the beginning of creating the life that you want to live. Know what the future holds for you as a result of the choice you can make today. </p>
                </div>
              </div></div><div class="owl-item cloned" style="width: 388.175px; margin-right: 30px;"><div class="item">
                <div class="category-box category-box-style-01">
                  <div class="category-icon">
                    <i class="flaticon-mobile-phone"></i>
                    <h5 class="category-title mb-0">Android</h5>
                  </div>
                  <p class="mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
                </div>
              </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
          </div>
        </div>
      </div>
    </section>---------->
      <section id="delivering-results" class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2>Smart strategy &amp; excellent performance</h2>
              <p>Process that guarantees high productivity and profitability for your solution.</p>
            </div>
          </div>
        </div>
  
        <div class="row">


<?php
                             $x=0;
                        $sqll="SELECT * FROM process WHERE s_id='$_GET[s_id]'"; 
                          $runl=mysqli_query($conn,$sqll);
                          $i = 0;
                              $allRows = mysqli_num_rows($runl);
                            while($rowl=mysqli_fetch_assoc($runl)) {
                              if($rowl['p_list_id']==0) {
                                continue;
                                
                            } else {
                                 $i++;
                           //       echo $allRows;
                              echo '<div class="col-md-3 col-11 text-center  p-3 d-inline">
                              <img src="';?>
                                  
                              <?php
                               $sql="SELECT * FROM icon_pack WHERE id='$rowl[icon_id]'"; 
                               $run=mysqli_query($conn,$sql);  
                               while($row=mysqli_fetch_assoc($run)) {
                                echo $row['image'];
                              }
                              ?>
                              
                              <?php
                              echo '" width="100px" class="bg-dark p-4 " style="border-radius:30px;"/>
                            <h6 class="text-center  text-dark mt-3 ">'.$rowl['title'].'</h6>
                            <p class="text-center  text-dark mt-3">'.$rowl['description'].'</p>';
                              if($i>=$allRows) {
                                echo '';
                              }
                              else {
                                echo '<span width="70px" class=" rounded-circle example" ><i class="fa fa-chevron-right text-primary fa-3x"></i></span>
                                ';
                              }

                            
                          echo '  </div>';

                            }
                                }?>

  
</div>

</div>
    </section>
      <section id="pricing" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2>Pricing &amp; Packages</h2>
              <p>Prices that guarantees high profitability for your solution.</p>
            </div>
          </div>
        </div>
  
        <div class="row">

        <?php 
                        
                        $sql="SELECT * FROM pricing WHERE s_id='$_GET[s_id]'";
                        $run=mysqli_query($conn,$sql);
                        while ($row=mysqli_fetch_assoc($run)) {
                        echo '
                        <div class="col-md-4 col-sm-12">
             <table class="table table-bordered  border-dark "> 
               <thead>
             <tr class=" bg-dark text-white text-center">
               <td><h3 class="   text-white text-center">'.$row['title'].'</h3><h6 class="bg-danger btn text-white text-center">'.$row['price'].' $</h6></td>
            </tr>
            </thead>
            <tbody>'; ?>

<?php 
                        
                        $sqll="SELECT * FROM pricing_detail WHERE p_id='$row[id]'";
                        $runl=mysqli_query($conn,$sqll);
                        while ($rowl=mysqli_fetch_assoc($runl)) {
                            echo '<tr>
                            <td><i class="fa fa-check text-success mr-4 ml-5"></i>'.$rowl['description'].'</td>
                            </tr>';
                        }
                        ?>

            
<?php  $x='hello';
                            echo ' 
<tr>
<td class="text-center"><a onclick="add_cart('.$row['id'].');" class="btn btn-dark text-white">Add to Cart</a></td>
</tr>
        </tbody>
             </table>
     
           </div>';
           
                        }?>

  
</div>

</div>
    </section>
     <section id="case-studies" class="">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-8">
            <div class="section-title">
              <h2><span class="text-primary">Our Latest Work!</span> </h2>
              <p class="lead">We love what we do. Our clients tell us the same thing.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- owl carousel -->
            <div class="owl-carousel text-left owl-loaded owl-drag" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1">
              
              
              
              
              
              
              
              
              
              
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2509px, 0px, 0px); transition: all 1s ease 0s; width: 8364px;">
                 
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
                    
                </div></div><div class="owl-nav "><button type="button" role="presentation" class="owl-prev"><i class="fas fa-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-arrow-right"></i></button></div>
              </div>
          </div>
          
          
        </div>
        </div>
       
    </section>
      <section id="contact-us" class="space-pb">
    
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="service-details">
               
              <h4 class="font-weight-bold mb-4">Please contact us via below from for more info</h4>
              <form  class="mt-4 row" action="contact.php" method="GET">
                <div class="form-group col-md-4 mb-4">
                  <input type="text" class="form-control" id="exampleInputName" name="fname" placeholder="Name" >
                </div>
                <div class="form-group col-md-4 mb-4">
                  <input type="text" class="form-control" id="exampleInputLname" name="lname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-4 mb-4">
                  <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email Address">
                </div>
                    <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" id="exampleInputEnquiry"  name="etype" placeholder="Enquiry Type" required>
                </div>
                <div class="form-group col-md-12 mb-4">
                  <textarea class="form-control" rows="5" id="exampleInputEnquiry" name="edetail" placeholder="Enquiry Description"></textarea>
                </div>
                
                
                <div class="form-group col-md-12 mb-0">
                  <button type="submit" class="btn btn-primary" name="donecontact">Send Message<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
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
    
<script> 
    
function add_cart(id) {

        $.ajax({
            type: "GET",
            url: 'cart/add.php',
            data:{id:id},
            success: function(response)
            {
   //   alert(response);
      swal({
  title:response,
 // text: response,
 buttons: {
        confirm : {text:'Close',className:'sweet-warning'},
        
    }
});
             get_cart();
           }
       });
    
  
    
        }
</script>
<style>
  .sweet-warning {
    background-color:#022d62;
    border-radius:40px;
  }
  .sweet-warning:hover {
    background-color:#ef3139;
    border-radius:40px;
  }
  </style>
  </body>
</html>
