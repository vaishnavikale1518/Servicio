<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 session_start();  
  
  
 if(isset($_POST["login"]))  
 {  
        $token = mysqli_real_escape_string($connect, $_POST['token']);
        $tquery = "select * from transaction where token1='$token' AND status='active'";
        $query = mysqli_query($connect, $tquery);
        $tcount = mysqli_num_rows($query);
        if ($tcount > 0)  
        {
          header('location:http://localhost/p/miniproject/clientfeedbackform.php');
        }
        else 
        {
    ?>
          <script>
          alert("Invalid Token!!!");
          </script>
    <?php
         }
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Client Feedback Token</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" type="text/css" href="clientlogin.css"> 
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
                <h3 align="center">Client Feedback Token Verification</h3>
                <div class="vl"></div>  
                <br />  
                <form method="post">  
                      <div class="textbox">
                      <i class="fa fa-user" aria-hidden="true"></i>
                     <input type="text" placeholder="token" name="token" class="form-control" />
                     </div>  
                     <br />  
                       
                     <input type="submit" name="login" value="Verify" class="btn btn-info" />
                     <a href="#forgot-psw" class="forgot-psw">Forgot Password?</a>    
                     <br />  
                </form> 
                </div>  
                  
                 
                 
           </div>  
      </body>  
 </html>  