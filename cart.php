<?php
  session_start();  
include('include/db.php');


$action=''; 

if(isset($_GET['del_cart_id'])) {
 
$sql="DELETE FROM cart WHERE id='$_GET[del_cart_id]'";
$run=mysqli_query($conn,$sql);  
echo '<script>windows.location.reload();</script>';
$_SESSION['cartfill']--;   
}


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
    
      
      <section class="bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');height:200px;z-index:-99999;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal mt-5">My Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class=" mt-2 p-4">
      <div class="container">
      <?php echo $action;?>
        
          <?php if ($_SESSION['cartisempty']==0) {?>
            <div class="row card shadow-lg mb-5">
         <?php
         echo ' <table class="table text-center table-bordered border-dark table-hover" >
         <tr class="h4">
 
      
      <th>Service Name</th>
      <th>Price (USD $)</th>
      <th>Action</th>
      </tr>';
         $_SESSION['total']=0;
         
$sql="SELECT * FROM cart WHERE user_ip='$_SESSION[myip]' AND purchase_status='0' ";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
   echo '<tr>
     '; ?>
         
         <?php 
         $sqll="SELECT id,title,price FROM pricing WHERE id='$row[item_id]'";
$runl=mysqli_query($conn,$sqll);
while($rowl=mysqli_fetch_assoc($runl)) { 

echo '<td>'.$rowl['price'].'</td>
         <td>'.$rowl['price'].' USD $</td>';
    $_SESSION['total']=$_SESSION['total']+$rowl['price'];
}
         
         ?>
         
         
      <?php echo'   <td><a  onclick="confirm_this('.$row['id'].');"  class="pointer" title="Confirm"><i class="fa fa-trash text-danger"></i></a></td>
      
         </tr>';
}
echo '   </table>';
         ?>
       



         
          
<div class="row col-12 text-right">
<div class="col-md-6 offset-md-5">
<h4 class="mb-4">Total : <?php echo $_SESSION['total'];?> (USD $)</h4>
<?php
         if ($_SESSION['total']==0) {
           echo ' <a class="btn btn-dark  btn-sm btn-round text-white ">Cart is Empty</a>
           ';
         } else {
           echo '<a href="cartsample.php"  class="btn btn-dark col-3 mb-4 btn-sm btn-round text-white ">check out</a>
           ';
         }
         ?>
</div>

</div>

         
      <?php echo '   </div>';}  else {
echo '
<div class="row">
<div class="col-md-6 mb-4 offset-md-3 mt-5">

<div class="alert  text-center alert-danger border-0  alert-dismissible fade show" role="alert">
<i class="fab fa-opencart text-danger fa-5x pt-3 pb-3"></i><br>
<strong class="mb-5 pb-4 h4 text-danger">Cart is Empty</strong>


 
</div>
</div>
</div>
';
      }?>
       
      
      </div>
    </section>
   
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body h4 text-center">
        <p>Confirm Delete ?</p>
        <p ></p>
        <div class="btn-group">
        <button  class="btn btn-primary btn-sm"  id="sample" onclick="del(this.value);">Confirm</button>
        <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
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

  //$('#myModal').modal('show');
  
  $('#myModal').modal({	backdrop: 'static', });
 
 $("#sample").attr('value', id);
   
 
    

   // if(confirm('Are you sure?')) {
    // window.location.href = "cart.php?del_cart_id="+id;
//    }
    
     
  
    
        }
function del(id) {
  window.location.href = "cart.php?del_cart_id="+id;
     
  
    
        }
</script>

  </body>
</html>
