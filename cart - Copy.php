<?php
  session_start();  
include('include/db.php');

if(isset($_GET['del_cart_id'])) {
 
$sql="DELETE FROM cart WHERE id='$_GET[del_cart_id]'";
$run=mysqli_query($conn,$sql);   
}

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
    
      
      <section class="bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');height:200px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal mt-5">Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="space-ptb">
      <div class="container">
        <div class="row">
     <table class="table text-center border-dark table-hover" >
            <tr>
         <th>id</th>
         <th>Service Name</th>
         <th>Price</th>
         <th>Action</th>
         </tr>
         <?php
         $_SESSION['total']=0;
         
$sql="SELECT * FROM cart WHERE user_ip='$_SESSION[myip]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
   echo '<tr>
         <td>'.$row['id'].'</td>'; ?>
         
         <?php 
         $sqll="SELECT id,title,price FROM pricing WHERE id='$row[item_id]'";
$runl=mysqli_query($conn,$sqll);
while($rowl=mysqli_fetch_assoc($runl)) { 

echo '<td>'.$rowl['title'].'</td>
         <td>'.$rowl['price'].'</td>';
    $_SESSION['total']=$_SESSION['total']+$rowl['price'];
}
         
         ?>
         
         
      <?php echo'   <td><a  onclick="confirm_this('.$row['id'].');" title="Confirm"><i class="fa fa-trash"></i></a></td>
      
         </tr>';
}
         ?>
         <tr >
         <td class="h6" colspan="2  ">Total</td>
         <td class="h6" colspan="1 " ><?php echo $_SESSION['total'];?></td>
         <?php
         if ($_SESSION['total']==0) {
           echo '<td class="h6" colspan="1 " > <a class="btn btn-dark  btn-sm btn-round text-white ">Cart is Empty</a></td>
           ';
         } else {
           echo '<td class="h6" colspan="1 " > <a href="checkout.php" class="btn btn-dark  btn-sm btn-round text-white ">check out</a></td>
           ';
         }
         ?>
         </tr>
            </table>
       
          </div>
      
      </div>
    </section>
      <section class="space-pb dark-background">
      <div class="container">
        <div class="bg-dark text-center rounded py-5 px-3">          <h2 class="text-white">Looking to implement an idea for your business, we will turn it into reality</h2>
          <h6 class="text-white">Develop your own custom solution or boost marketing potential today with us</h6>
          <a href="service.php#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
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
       alert(response);
             get_cart();
           }
       });
    
  
    
        }
function confirm_this(id) {

    if(confirm('Are you sure')) {
     window.location.href = "cart.php?del_cart_id="+id;
    }
    
     
  
    
        }
</script>

  </body>
</html>
