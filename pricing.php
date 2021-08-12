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
  <body onload="get_cart();">

    <!--=================================
    header -->
 <?php
include('include/header.php');
?>
    
      
      <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Pricing</h1>
              <p class="text-white mb-0">Award-winning website design &amp; creative digital agency services with best pricing</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="space-ptb">
      <div class="container">
        <div class="row">
        <?php 
                        
                        $sql="SELECT * FROM pricing";
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
