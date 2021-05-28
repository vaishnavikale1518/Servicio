<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Client Registration</title>
</head>
<style type="text/css">
	html{
		height: 1100px;
	}
	body{
		margin: 0;
		padding: 0;
		/*background: url(Images/tree.jpg);*/
		background-color: #f39f86;
background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
	
		background-position: center;
		background-size:auto;
		font-family: sans-serif;
		display: flex;
		flex-direction: column;
		min-height: 100vh;


	}
	.form{
		width: 320px;
		height:720px;
		background: #000;
		color: #fff;
		top:80%;
		left:50%; 
		position:absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
		box-shadow: 0 15px 25px rgba(0,0,0,0.7);
	}
	.avatar{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}
	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size:22px;
	}
	.form p{
		margin: 0;
		padding: 0;
		font-weight: bold;
	}
	.form input{
		width: 100%;
		margin-bottom: 20px;
	}
	.form input[type="text"], input[type="password"]
	{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;

	}
	.form input[type="submit"]
	{
		border:none;
		outline: none;
		height: 40px;
		background: red;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;

	}
	.form input[type="email"]
	{
		background: transparent;
		border: none;
		outline: none;
		border-bottom: 1px solid #fff;
		height: 40px;
		font-size: 16px;
		color: #fff;
	}
		.form input[type="tel"]
	{
		background: transparent;
		border: none;
		outline: none;
		border-bottom: 1px solid #fff;
		height: 40px;
		font-size: 16px;
		color: #fff;
	}
	.form input[type="submit"]:hover
	{
		cursor: pointer;
		background: #01ff70;
		color: #000;
	}
	.form a{
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color: darkgrey;
	}
	.form a:hover{
		color: #01ff70;
	}
	.form p:hover{
		color: #01ff70;
	}
	nav{
   background-color: #f2cf07;
background-image: linear-gradient(315deg, #f2cf07 0%, #55d284 74%);
    width:auto;
    height: auto;
    overflow:auto;
  }
  ul{
    margin: 0;
    padding: 0;
    list-style: none;
    overflow:auto;
    font-family: sans-serif;
  }
  li{
    float: left;
  }
  nav a{
    width:100%;
    display: block;
    text-decoration: none;
    text-align: center;
    font-size:18px;
    color:white;
    padding: 20px 10px;
    font-family:Arial;
  }
  nav a:hover{
    background: skyblue;
    color: black;
  }
 footer{
	width:100%;
	height: 40px;
	background-color: #333;
	color: #17ff8d;
	font-size: 23px;
	text-align: center;
	line-height: 50px;
	position: relative;
	bottom:0;	
	margin-top:1000px;
	}


   a{
    background:transparent;
    width:auto;
    height: auto;
    overflow:auto;
    color:#01ff70;
    font-size: 16px;
}

</style>
<body>

<?php

    include 'clientregformdbcon.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(15));

        $emailquery = "select * from client where email='$email' ";
        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);
        if ($emailcount > 0) {
            echo "email already exist";
        } else {
            if ($password === $cpassword) {

                $insertquery = "insert into client(username,address,email,mobile,password,cpassword,status,token) VALUES('$username', '$address', '$email', '$mobile', '$pass', '$cpass', 'active', '$token')";

                $iquery = mysqli_query($con, $insertquery);
                //checking is it inserted or not
                if ($iquery) {

                    $subject = "Email Verification & Activation";
                    $body = "Hii $username, This is email verification by Rounak 
                    email http://localhost/p/miniproject/clientregformactivate.php?token=$token ";
                    $sender_email = "From: rounakgoje@gmail.com";

                    if (mail($email, $subject, $body, $sender_email)) {
                        $_SESSION['msg'] = "Check your mail to activate your account $email";
                        header('location:http://localhost/p/miniproject/msg1.php');
                    } else {
                        echo "Email sending failed...";
                    }
                } else {
    ?>
                    <script>
                        alert("insertion of data is not successful!!");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert("password mismatching!!");
                </script>
    <?php
            }
        }
    } ?>

	<nav>
      <ul>
        <li><a href="http://localhost/p/miniproject/landding%20page/index.php"> HOME</a><br>
        <li><a href="http://localhost/p/miniproject/contact.php">Contact</a></li>
        <li><a href="http://localhost/p/miniproject/about.php">About</a></li>
      </ul>
    </nav>


	
<div class="form">
		<img src="Images/proicon.jfif" class="avatar">
		<h1>Sign-up Here</h1>
		<form name="f1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<p>Name:</p>
			<input type="text" name="username" placeholder="Full Name" pattern="[A-Za-z ]{5,20}" title="Minimum length should be 5 and maximum is 20" required>
			<p>Address:</p>
			<input type="text" name="address" placeholder="Address" pattern="[A-Za-z ]{}[0-9]{}[-,.]{}"required>
			<p>E-Mail:</p>
			<input type="email" name="email" placeholder="Email" title="Email must contain '@' " required>
			<p>Contact Number:</p>
            <input type="tel" name="phone" placeholder="0000000000"  pattern="[0-9]{10}" title="Contact number should be in '0000000000' this format" required>
            <p>Password:</p>
			<input type="password" name="password" placeholder="Create password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			<p>Re-Enter Password:</p>
			<input type="password" name="cpassword" placeholder="Repeat password" required>
            <!--button><input type="submit" value="submit" name="submit" id="submit"></button-->
            <input type="submit" value="Register" name="submit" id="submit" onclick="accept1(); return validatepass()">
            <a href="http://localhost/p/miniproject/clientlogin.php">Already have an account?</a>	
</form>
	
</body>
</html>
