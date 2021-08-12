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
          

          $sql="SELECT * FROM how_we_work WHERE id='1'";
          $run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $title	=$row['title'];
            $heading		=$row['heading'];
            $description      	=$row['description'];
          
          }



          ?>
    
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg';z-index:9999);">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">how we work</h1>
              <p class="text-white mb-0"><?php echo  $title;?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav" style="z-index:9;">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <ul class="nav">
              <li class="nav-item"><a class="nav-link " href="about-us.php">About us</a></li>
                <li class="nav-item"><a class="nav-link " href="career.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link active" href="how_we_work.php">How we work</a></li>
                <li class="nav-item"><a class="nav-link" href="our-team.php">Our team</a></li>
                <li class="nav-item"><a class="nav-link" href="mission-vision.php">Mission and vision</a></li>
                <li class="nav-item"><a class="nav-link" href="our-value.php">Our values</a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="space-ptb" style="z-index:-9999;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
              <h2><?php echo  $heading;?></h2>
              <p class="mb-4"><?php echo  $description;?></p>
             </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-4 mb-sm-0">
            <img class="img-fluid border-radius" src="images/about/10.jpg" alt="">
          </div>
          <div class="col-sm-6">
            <img class="img-fluid border-radius" src="images/about/11.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="space-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title is-sticky" style="top: 135.8px;">
              <h2>Smart strategy &amp; excellent performance</h2>
              <p class="mb-4 mb-md-5">Process that guarantees high productivity and profitability for your solution.</p>
              <a href="contact.php" class="btn btn-light-round btn-round">Let's Start Project<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-info feature-info-style-08">
              <div class="feature-info-inner">

              <?php
              
          $sqll="SELECT * FROM how_we_work_detail ";
          $runl=mysqli_query($conn,$sqll);
          while($rowl=mysqli_fetch_assoc($runl)) {
          echo '    <div class="feature-info-item">
          <div class="feature-info-number"><span>'.$rowl['id'].'</span></div>
          <div class="feature-info-content">
            <h5 class="mb-3 feature-info-title">'.$rowl['title'].'</h5>
            <p class="mb-0">'.$rowl['description'].'</p>
          </div>
        </div>
     ';
          }
              ?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="section-title text-center">
              <h2>Choose the plan that works for you</h2>
              <p>Our pricing works for enterprises of all sizes. Starting at just $19 per month</p>
            </div>
          </div>
        </div>
        <div class="container">
        <div class="row">
        <?php 
                        
                        $sql="SELECT * FROM pricing limit 3";
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


             
       
<?php    echo ' 
<tr>
<td class="text-center"><a onclick="add_cart('.$row['id'].');" class="btn btn-dark text-white pointer">Add to Cart</a></td>
</tr>
        </tbody>
             </table>
     
           </div>';
           
                        }?>
        
       
          </div>
      
      </div>
  
      </div>
    </section>     <?php
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
