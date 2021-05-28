<?php

session_start();

include 'serviceregformdbcon.php';

if (isset($_GET['token1'])) {
    $token1 = $_GET['token1'];

    $updatequery = "update transaction set status='active' where token1='$token1' ";

    $query = mysqli_query($con, $updatequery);
    if($query)
    {
        header('location:http://localhost/p/miniproject/msg5.php');
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
        header('location:serviceregform.php');
    }
    */
}

?>
