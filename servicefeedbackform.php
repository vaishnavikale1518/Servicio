<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Feedback</title>
</head>
<style type="text/css">
	html{
		height: 1100px;
	}
	body{
		margin: 0;
		padding: 0;
		/*background: url(Images/form.jpg);*/
		background: rgb(189,158,5);
	background: linear-gradient(90deg, rgba(189,158,5,0.7094188017003676) 0%, rgba(255,255,255,0.49653364763874297) 50%, rgba(189,158,5,0.6029762246695554) 100%);
		background-size:cover;
		background-position: center;
		font-family: sans-serif;
		display: flex;
		flex-direction: column;
		min-height: 100vh;

	}
	.form{
		width: 380px;
		height:790px;
		background:cyan;
		color: red;
		top:90%;
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
	.form input[type="text"]
	{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: black;
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
		background: #ffff00;
		color: greenyellow;
		color: black;
	}
	.form input[type="email"]{
		border:none;
		outline: none;
		height: 40px;
		font-size: 18px;
		background:transparent;
		border-bottom: 1px solid #fff;
	}
	/*.form a{
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color: darkgrey;
	}
	.form a:hover{
		color: #01ff70;
	}*/
	.form p:hover{
		color: #4b0082;
	}
	nav{
	background-color: #f9ea8f;
background-image: linear-gradient(315deg, #f9ea8f 0%, #aff1da 74%); 
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
    color:black;
    
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
    .form label {	
    float:left;
    color: black;	
	font-size: 16px;
	}
	label:hover{	
    color: black;	
    background-color: yellow;
    border-radius: 10px;
    padding: 10px;
    width: auto;
	}
.form input[type="radio"]{
	float:left;
    
	width: auto;
	margin-left:12px;
	margin-bottom:20px;
	
}
</style>

<body>

<?php

    include 'servicefeedbackdbcon.php';

    if (isset($_POST['submit'])) {
    	$cname = mysqli_real_escape_string($con, $_POST['cname']);
    	$username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $q1 = mysqli_real_escape_string($con, $_POST['q1']);
        $q2 = mysqli_real_escape_string($con, $_POST['q2']);
        $q3 = mysqli_real_escape_string($con, $_POST['q3']);
        $q4 = mysqli_real_escape_string($con, $_POST['q4']);
        $q5 = mysqli_real_escape_string($con, $_POST['q5']);
        $q6 = (($q1+$q2+$q3+$q4+$q5)/5);
      	/*$count = 0;
        $searchquery = "select * from product where username='$sname' ";
        $query = mysqli_query($con, $searchquery);
        $count = mysqli_num_rows($query);

        if ($count = 0 ) {
        	?>
                <script>
                    alert("service provider not exists");
                </script>
    <?php
            //echo "service provider not exists";
        }*/

        

                $insertquery = "insert into servicefeedback( sname,email,cname,q1,q2,q3,q4,q5,rating) VALUES('$username','$email','$cname','$q1','$q2','$q3','$q4','$q5','$q6')";


                $iquery = mysqli_query($con, $insertquery);
                //checking is it inserted or not
                if ($iquery) {

                    ?>
                <script>
                    alert("data added");
                </script>
    <?php
    			}
    			else
    			{
    				?>
                <script>
                    alert("data added");
                </script>
    <?php
    			}


    		if($q6 < 2.0)
    			{
    			$updatequery = "DELETE FROM client WHERE username='$cname' ";
                $uquery = mysqli_query($con, $updatequery);
    			}
    		}
               ?>

	<nav>
      <ul>
        <li><a href="http://localhost/p/miniproject/landding%20page/index.php"> HOME</a><br>
        <li><a href="http://localhost/p/miniproject/contact.php">Contact</a></li>
        <li><a href="http://localhost/p/miniproject/about.php">About</a></li>
      </ul>
    </nav>


	
<div class="form">
		<img src="Images/proicon.jfif" class="avatar">
		<h1>Service Feedback</h1>
		<form name="f1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<p>Your Service Name:</p>
			<input type="text" name="username" placeholder="Full Name" pattern="[A-Za-z ]{5,20}" title="Minimum length should be 5 and maximum is 20" required>
			<p>E-Mail:</p>
			<input type="email" name="email" placeholder="Email" title="Email must contain '@' " required>
			<p>Name of The Customer:</p>
			<input type="text" name="cname" placeholder="Full Name" required>
			<label>Q1. Where you greeted in a  friendly manner? </label>
			<input type="radio" name="q1" value=1>
		
			<input type="radio" name="q1" value=2>
			
			<input type="radio" name="q1" value=3>
			
			<input type="radio" name="q1" value=4>
			
			<input type="radio" name="q1" value=5>
			
			
			<label>Q2. How would you rate your interaction with the customer? </label>
			<input type="radio" name="q2" value=1>
			
			<input type="radio" name="q2" value=2>
			
			<input type="radio" name="q2" value=3>
			
			<input type="radio" name="q2" value=4>
			
			<input type="radio" name="q2" value=5>
		
			
			<label>Q3. Did the customer help by answering your questions?</label>
			<input type="radio" name="q3" value=1>
	
			<input type="radio" name="q3" value=2>
		
			<input type="radio" name="q3" value=3>
		
			<input type="radio" name="q3" value=4>
			
			<input type="radio" name="q3" value=5>
			
			
			<label>Q4. Would you like to work with this customer again?</label>
			<input type="radio" name="q4" value=1>
		
			<input type="radio" name="q4" value=2>
	
			<input type="radio" name="q4" value=3>

			<input type="radio" name="q4" value=4>
		
			<input type="radio" name="q4" value=5>
			
			
			<label>Q5. How would you rate your overall satisfaction with customer?</label>
			<input type="radio" name="q5" value=1>
	
			<input type="radio" name="q5" value=2>
			
			<input type="radio" name="q5" value=3>
			
			<input type="radio" name="q5" value=4>
			
			<input type="radio" name="q5" value=5>
			
			
            <!--button><input type="submit" value="submit" name="submit" id="submit"></button-->
            <input type="submit" value="submit" name="submit" id="submit">
            <!--a href="signin.html">Already have an account?</a-->	
</form>
	
</body>
</html>
