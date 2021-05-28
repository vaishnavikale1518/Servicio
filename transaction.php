<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Regsitration</title>
</head>
<style type="text/css">
	html{
		height: 1100px;
	}
	body{
		margin: 0;
		padding: 0;
		/*background: url(Images/image16.jpg);*/
		background-color: #f39f86;
background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
		background-size:auto;
		background-position: center;
		font-family: sans-serif;
		display: flex;
		flex-direction: column;
		min-height: 100vh;

	}
	.form{
		width: 320px;
		height:760px;
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
	.form input[type="email"], input[type="tel"]
	{
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid #fff;
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
	position: sticky;
	bottom:0;	
	margin-top:1000px;
	}
a{
    background:transparent;
    width:auto;
    height: auto;
    overflow:auto;
    color:#01ff70;
}
select{
	width: 100%;
	height: 20px;
	overflow: hidden;
	border-radius: 15em;
}
 
option{
	background-color: #f1f1f1;
}
</style>
<body>

<?php

    include 'serviceregformdbcon.php';

    if (isset($_POST['submit'])) 
    {
        $cname = mysqli_real_escape_string($con, $_POST['cname']);
        $sname = mysqli_real_escape_string($con, $_POST['sname']);
        $cemail = mysqli_real_escape_string($con, $_POST['cemail']);
        $semail = mysqli_real_escape_string($con, $_POST['semail']);
        $mobile = mysqli_real_escape_string($con, $_POST['phone']);
        $category = mysqli_real_escape_string($con, $_POST['category']);
        $token1 = mysqli_real_escape_string($con, $_POST['token1']);

        $emailquery = "select * from client where email='$cemail' ";
        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);

        if (!$emailcount > 0)  
        {
           

                $insertquery = "insert into transaction( name, phn, cemail, service, semail, category, status, token1) VALUES('$cname', '$mobile', '$cemail', '$sname', '$semail', '$category',  'inactive', '$token1')";

                $iquery = mysqli_query($con, $insertquery);
                //checking is it inserted or not
                if ($iquery) 
                {

                    $subject = "Your Service Token Number";
                    $body = "Hii $cname, Your Service request is sent to $sname with token $token1 ";
                    $sender_email = "From: rounakgoje@gmail.com";

                    if (mail($cemail, $subject, $body, $sender_email)) 
                    {
                        $_SESSION['msg'] = "Check your mail to activate your account $email";
                        header('location:http://localhost/p/miniproject/msg4.php');
                    } 
                    else 
                    {
                        echo "Email sending failed...";
                    }
                } 
                else 
                {
    ?>
                    <script>
                        alert("insertion of data is not successful!!");
                    </script>
    <?php
                }

                if ($iquery) 
                {
                	
                    $subject = "Request for Service from Client";
                    $body = "Hii $sname, You have received a service request from $cname, email id $cemail with token $token1  Also confirm the service by verifying token http://localhost/p/miniproject/tokenactive.php?token1=$token1";
                    $sender_email = "From: rounakgoje@gmail.com";

                    if (mail($semail, $subject, $body, $sender_email))
                    {
                        $_SESSION['msg'] = "Check your mail to activate your account $email";
                        header('location:http://localhost/p/miniproject/msg4.php');
                    } 
                    else 
                    {
                        echo "Email sending failed...";
                    }
                } 
                else 
                {
    ?>
                    <script>
                        alert("insertion of data is not successful!!");
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
		<h1>Register For Services</h1>
		<form name="f1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<p>Client Name:</p>
			<input type="text" name="cname" placeholder="Full Name" >
			<p>Token ID:</p>
			<input type="text" name="token1" placeholder="Token" >
			<p>Client E-Mail:</p>
			<input type="email" name="cemail" placeholder="Email" title="Email must contain '@' " >
			<p>Contact Number:</p>
            <input type="tel" name="phone" placeholder="0000000000"  pattern="[0-9]{10}" title="Contact number should be in '0000000000' this format" >
            <p>Service Name:</p>
			<input type="text" name="sname" placeholder="Full Name" >
			<p>Service Provider E-Mail:</p>
			<input type="email" name="semail" placeholder="Email" title="Email must contain '@' " >
			<p>Category:</p>
			<br><select name="category">
				<option>---Category---</option>
				<option value="Plumber">Plumber</option>
				<option value="Carpenter">Carpenter</option>
				<option value="Maintenance">Maintenance</option>
				<option value="ToursTravels">ToursTravels</option>
				<option value="Mechanic">Mechanic</option>
				<option value="Tutor">Tutor</option>
				<option value="Painter">Painter</option>
				<option value="MedicalSupport">MedicalSupport</option>
				<option value="Electrician">Electrician</option>
				<option value="Transportation">Transportation</option>
				<option value="KeyMaker">KeyMaker</option>
				<option value="Sweeper">Sweeper</option>
				<option value="Builder">Builder</option>
				<option value="Security">Security</option>
				<option value="Watchman">Watchman</option>
				<option value="ShippingLagguage">ShippingLagguage</option>
				<option value="GarbageDisposal">GarbageDisposal</option>
				<option value="Packaging">Packaging</option>	
			</select><br><br>
			
            <input type="submit" value="Register" name="submit" id="submit" onclick="accept()" required>
            <a href="http://localhost/p/miniproject/servicelogin.php">Already have an account?</a>	
</form>
	
</body>
</html>
