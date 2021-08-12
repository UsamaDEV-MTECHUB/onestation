 <?php
            session_start();

    
      include('../include/db.php');

    $empty=0;
$sql="SELECT * FROM cart WHERE user_ip='$_SESSION[myip]' AND purchase_status='0'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run)) {
    if($row['user_ip']=='') {
        $empty=0;
        $_SESSION['cartisempty']=0;
        break;
    } else {
    $empty=1;
    $_SESSION['cartisempty']=1;
    
    
    }
    
    
}
if($empty==1) {
    echo '
    <span class="bg-danger badge  text-white  rounded" >'.$_SESSION['cartfill'].'</span>';
      $_SESSION['cartisempty']=0;
} 
else {
    $_SESSION['cartisempty']=1;
    $_SESSION['cartfill']=0;
    echo '
    <span class="bg-danger badge  text-white  rounded" >'.$_SESSION['cartfill'].'</span>';
}
          ?>
