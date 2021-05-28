<?php

session_start();

include 'clientregformdbcon.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $updatequery = "update client set status='active' where token='$token' ";

    $query = mysqli_query($con, $updatequery);
    if($query)
    {
        header('location:http://localhost/p/miniproject/msg2.php');
    }
    else
    {
        ?><script>
        alert("not active");
        </script>
        <?php
    }
    /*if ($query) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['mag'] = "Account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are Logged out";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "Account not updated";
        header('location:clientregform.php');
    }
    */
}

?>
