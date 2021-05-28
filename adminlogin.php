<?php  
 session_start();
  
  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = $_POST["username"];  
           $password = $_POST["password"];  
           //$p1 = 'admin';
           if($username == 'client' && $password == 'admin')  
           { 
           //if(password_verify($password, $p1)) 
              header("location:http://localhost/p/miniproject/adminclientindex.php");  
           }  
           else if($username == 'service' && $password == 'admin')   
           {  
               header("location:http://localhost/p/miniproject/adminserviceindex.php");           
           }   
           else  
           {  
              echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Login</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" type="text/css" href="adminlogin.css">
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
                <h3 align="center">...Welcome...</h3>  
                <br /> 

              <div class="login-box"> 
                <h3 align="center">Admin Login</h3> 
                <div class="vl"></div>
                <br />  
                <form method="post">
                <div class="textbox"> 
                   <i class="fa fa-user" aria-hidden="true"></i>
                     
                  <input type="text" placeholder="Username" name="username"  class="form-control" />
                </div>  
                  <br />  
                <div class="textbox">
                  <i class="fa fa-key" aria-hidden="true"></i>
                 
                  <input type="password" placeholder="Password" name="password"  class="form-control" />
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