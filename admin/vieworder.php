 <?php
            session_start();
            
          include('assets/include/db.php');  
if(isset( $_SESSION['email'])) {
    
}
else {
     header('Location:login.php');
}


$sql="SELECT * FROM order_summary WHERE id='$_GET[orderid]'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
        $id=$row['id'];
        $my_ip=$row['my_ip'];
        $date=$row['date'];
        $transaction_id=$row['transaction_id'];
        $name=$row['c_firstName'].' '.$row['c_lastName'];
        $amount=$row['transaction_amount'];
        
          
 
}
          ?>
<!DOCTYPE html>

<html lang="en">
	
<head>
		 <?php
          include('assets/include/script.php');
          ?>
	</head>
	
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        
		<?php
          include('assets/include/header.php');
          ?>
	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<?php
          include('assets/include/websidebar.php');
          ?>
                
    			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					
                    <?php
          include('assets/include/webheader.php');
          ?>
            		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			
						<div class="subheader py-6 py-lg-8 " >
							
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                
								<div class="d-flex align-items-center flex-wrap mr-1">
									<div class="d-flex align-items-baseline flex-wrap mr-5">
                  <div class="card-toolbar mr-5">
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a class="btn btn-primary font-weight-bolder " href="OrderSummaries.php">
											<i class="fas fa-arrow-left fa-1x"></i> Go back  </a>
											<!--end::Button-->
										</div>	
										
										<h5 class="text-dark font-weight-bold my-1 mr-5">Order Detail</h5>
											
                    
                   
									</div>
								</div>
                            
							</div>
						</div>
                        
						<div class="d-flex flex-column-fluid">
                            
							<div class="container" id="box"  >
                <div class="row border p-2 bg-white">
                <div class="col border p-2 bg-white">Order Id</div>
                <div class="col border p-2 bg-white"><?php echo $id;?></div>
                <div class="col border p-2 bg-white"> IP adress</div>
                <div class="col border p-2 bg-white"><?php echo $my_ip;?></div>
                <div class="col border p-2 bg-white"> Date</div>
                <div class="col border p-2 bg-white"><?php echo $date;?></div>
                </div>
              
                <div class="row">
                <div class="col-3  border p-2 bg-white "> Customer Name</div>
                <div class="col-3  border p-2 bg-white"><?php echo $name;?></div>
                <div class="col-3  border p-2 bg-white">Amount</div>
                <div class="col-3  border p-2 bg-white"><?php echo $amount;?></div>
                
                </div>
              
<h4 class="p-4">Item List</h4>
                <div class="datatable datatable-default datatable-primary datatable-loaded">
   <table class="table-bordered table-hover datatable-sm datatable-table  text-center datatable-sm "  style="display: block;">
      <thead class="datatable-head bg-light-primary text-primary">
         <tr class="datatable-row p-5" >
    
            <th class="datatable-cell  datatable-cell-sort  w-25"  >  Id </th>
            <th  class="datatable-cell datatable-cell-sort w-25"    > item</th>
            <th  class="datatable-cell datatable-cell-sort w-25"  > Price </th>
         </tr>
      </thead>
      <tbody style="" class="datatable-body ">
        <?php
        
$sql="SELECT * FROM cart WHERE user_ip='$_GET[my_ip]' AND date='$_GET[date]' AND purchase_status='1'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    echo '
         <tr  class="datatable-row p-0" >
            <td class="datatable-cell datatable-toggle-detail  w-25"  >  '.$row['id'].' </td>';
          ?>
 <?php 
         $sqll="SELECT id,title,price FROM pricing WHERE id='$row[item_id]'";
$runl=mysqli_query($conn,$sqll);
while($rowl=mysqli_fetch_assoc($runl)) { 

echo '<td class="w-25">'.$rowl['title'].'</td>
         <td class="w-25">'.$rowl['price'].'</td>';
}
         
         ?>
         
          <?php
                echo '
       
          </tr>
         
    ';
}
        ?>
      </tbody>
   </table>

      
</div>
 

							</div>
						</div>
							</div>
							</div>
				</div>
		</div>
	<!-- Button trigger modal -->




        <?php
          include('assets/include/footer_script.php');
          ?>
        
	</body>
</html>