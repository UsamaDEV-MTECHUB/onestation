<?php
 session_start(); 
 
include('include/db.php'); 
require 'boot.php';

//var_dump($_POST);
if(empty($_POST['payment_method_nonce'])) {
    header('location:cart.php');
}

$result = $gateway->transaction()->sale([
    'amount' => $_POST['amount'],
    'paymentMethodNonce' => $_POST['payment_method_nonce'],
  
    'customer' => [
      'firstName' =>$_POST['firstname'],
      'lastName' =>$_POST['lastname'],
      
    ],
    'options' => [
      'submitForSettlement' => true
    ]
  ]);

if($result->success===true) {
echo 'payment successful';
	
echo $_SESSION['transaction_id']=$result->transaction->id;
echo  $_SESSION['c_firstName']=$result->transaction->customer['firstName'];
echo  $_SESSION['c_lastName']=$result->transaction->customer['lastName'];
echo $_SESSION['transaction_amount']=$result->transaction->amount;
echo '<br>';

$sql="INSERT INTO order_summary(my_ip,date,transaction_id, c_firstName,c_lastName,transaction_amount) VALUES  ('$_SESSION[myip]','$date','$_SESSION[transaction_id]','$_SESSION[c_firstName]','$_SESSION[c_lastName]','$_SESSION[transaction_amount]')";
$run=mysqli_query($conn,$sql);
if($run) {
    $sqll="UPDATE cart SET purchase_status='1' WHERE user_ip='$_SESSION[myip]'";
    $runl=mysqli_query($conn,$sqll);
    if($runl) {
        echo 'cart is empty';
        $_SESSION['total']=0;
        $_SESSION['myip']=session_regenerate_id();
        header('location:index.php?action=done');
    }
    
}
}
else {
    print_r($result->errors);
    die();
}

  ?>
 