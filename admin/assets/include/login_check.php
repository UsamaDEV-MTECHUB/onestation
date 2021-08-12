<?php
session_start();
include('db.php');
if (isset($_GET['loginResult']))
    if ($_GET['loginResult'] == 'true') $loginResult = '<div class="alert alert-success">You can proceed</div>';
    else $loginResult = '<div class="alert alert-danger">SOMETHING WENT WRONG</div>';
else $loginResult = '';

if (isset($_GET['submit'])) {
    //get email from GET
    if(isset($_GET['email'])) $email = $_GET['email'];
    else echo "EMAIL NOT FETCHED";
    //get passwrod from GET
    if(isset($_GET['password'])) $password = $_GET['password'];
    else echo "PASSWORD NOT FETCHED";
    //dataase query stuff
    $sel_sql = "SELECT * FROM user WHERE role='admin'";
    $run_sql = mysqli_query($conn, $sel_sql);
    //using fetched data
    while ($user = mysqli_fetch_assoc($run_sql)) {
        if ($email == $user['email'])
            if ($password == $user['password']) {
                $success = true;
            }
            else $success = false;
        else $success = false;
        if($success) break;
    }
    //redirecting
    if (!$success) header('Location:../../login.php?loginResult=false');
    else {
        //store session here
        $_SESSION['email'] = $email;
        header('Location:../../index.php');
    }
} else $success = false;

?>