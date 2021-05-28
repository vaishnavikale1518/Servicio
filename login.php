<?php
session_start();
ob_start();
?>

<html>

<body>
    <?php
    include 'serviceregformdbcon.php';

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from product where email='$email' and status='active' ";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];
            $_SESSION['username'] = $email_pass['username'];
            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {

                if (isset($_POST['rememberme'])) {

                    setcookie('emailcookie', $email, time() + 86400);
                    setcookie('passwordcookie', $password, time() + 86400);

                    header('location:index.php');
                } else {
                    header('location:index.php');
                }
            } else {
    ?><script>
                    alert('incorrect password');
                </script>
            <?php
            }
        } else {
            ?><script>
                alert('Invalid email');
            </script>
    <?php
        }
    }
    ?>
    
</body>

</html>










