<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 session_start();  
  
  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM product WHERE email = '$username'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["username"] = $username;  
                          header("location:searchpage.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details1")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details2")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Service Login</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="servicelogin.css">  
      </head>  
      <body>
      <div class="header">
           <a href="#default" class="logo">Servicio</a>
           <div class="header-right">
           <a class="active" href="http://localhost/p/miniproject/landding%20page/index.php">Home</a>
           <a href="http://localhost/p/miniproject/contact.php">Contact</a>
           <a href="http://localhost/p/miniproject/about.php">About</a>
           </div>
           </div>
           <div style="padding-left:20px"></div>    
           <br /><br />  
           <div class="container" style="width:500px;"> 
                <h3 align="center">...Welcome...</h3>  
                <br />  

                <div class="login-box">   
                <h3 align="center">Service Login</h3> 
                <div class="vl"></div> 
                <br />  
                <form method="post"> 
                 <div class="textbox"> 
                     <i class="fa fa-user" aria-hidden="true"></i> 
                     <input type="text" placeholder="Username" name="username" class="form-control" />
                     </div>  
                     <br />  
                     <div class="textbox">
                     <i class="fa fa-lock" aria-hidden="true"></i>  
                     <input type="password" placeholder="Password" name="password" class="form-control" />
                     </div>  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" /> 
                     <a href="#forgot-psw" class="forgot-psw">Forgot Password?</a>   
                     <br />  
                </form> 
                </div>  
                  
                 
                 
           </div>  
      </body>  
 </html>  