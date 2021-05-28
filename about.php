<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 
<link rel="stylesheet" type="text/css" href="css3/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css3/style.css">
  <link rel="stylesheet" type="text/css" href="css3/registerform.css">
    
  <style>
    .land-header{
      margin: 80px 0;
    }
    .test {
      width: 100px;
      height: 100px;
      background-color: #f8f8f8;
    }
    .features{
       background: #f8f8f8;
    }
    .features p{
      font-size: 1rem;
      
    }
    .testpeople {
      margin: 5rem;
    }
    .ff{
      padding-top: 1.5rem;
    }
    /* .fa{
      font-size: 3rem;
      color: #2FA4E7
    } */

    @media only screen and (max-width: 600px)  {
      .header{
              height: 70vh;
            }
                 
      .fa-sm-2x{
        font-size: 2.33em;
      }
      .extra-div h2{
        font-size: 0.8rem;
      }
    }
   </style>
</head>
<body id="bootstrap-overrides">
<div class="header" id="topheader">
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    
 


<div class="container text-uppercase p-2">

  <a class="navbar-brand" href="index.html" id="about">SERVICIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/p/miniproject/landding%20page/index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/p/miniproject/adminlogin.php">Admin</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Feedback Review</a>
        <div class="dropdown-menu bg-dark text-capitalize font-weight-normal" id="dropdownPanel">
          <a class="dropdown-item" href="http://localhost/p/miniproject/clientfeedbacktoken.php">Clint</a>
          <a class="dropdown-item" href="http://localhost/p/miniproject/servicefeedbacktoken.php">Service Provider</a>
        </div>
      </li> 
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Login</a>
        <div class="dropdown-menu bg-dark text-capitalize font-weight-normal" id="dropdownPanel">
          <a class="dropdown-item" href="http://localhost/p/miniproject/clientlogin.php">Clint</a>
          <a class="dropdown-item" href="http://localhost/p/miniproject/servicelogin.php">Service provider</a>
        </div>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Registration</a>
        <div class="dropdown-menu bg-dark text-capitalize font-weight-normal" id="dropdownPanel">
          <a class="dropdown-item" href="http://localhost/p/miniproject/clientregform.php">Clint</a>
          <a class="dropdown-item" href="http://localhost/p/miniproject/serviceregform.php">Service provider</a>
        </div>
      </li>
    </ul>

<!-- ------------------------------ -->
    <form action="http://localhost/p/miniproject/searchpage.php" method="post" class="form-inline col-md-4 my-2 my-lg-0 pull-right d-none d-lg-block" >
    
   <div class="row mx-3 ">
       <input class="form-control col-md-8 mr-sm-2" name="search"type="search" placeholder="Your Services" aria-label="Search">

        <button class="btn btn-success  my-2 my-sm-0" name="submit" type="submit">Search</button>
   </div>
     
   
    </form>
    <!-- ------------------ -->

  </div>
  </div>
</nav>

<section class="header-section">
  <div class="center-div">
    <h1 class="font-weight-bold">Welcome</h1>
    <p>................</p>  
      <a href="#">About</a>
      <a href="#">contact</a>

    </div>
    
  </div>
  
</section>

  </div><!--end of header-->
	



 

<!--*************************************header end*************************************** -->


<!--*************************three extra header div start*********************8 -->


<section class="header-extradiv land-header" >
  <div class="container">
    <h4 class="font-weight-normal pb-5">Why Our Web</h4>
    <div class="row">
      <div class=" extra-div  col-4 my-2">
        <a href="#"><i  class="fa-3x fa-sm-2x fa fa-desktop" aria-hidden="true"></i></a>
<h2>EASY TO USE</h2>
<p class="d-none d-md-block">SERVICIO Offers Easy And Smooth Experiance</p>
      </div>
   <div class=" extra-div col-4 my-2">
        <a href="#"><i  class="fa-3x fa-sm-2x fa fa-magic" aria-hidden="true"></i></a>
<h2>FRIENDLY-ENVIROMENT </h2>
<p class="d-none d-md-block">SERVICIO Provid Friendly Enviroment</p>
      </div>      
            <div class=" extra-div col-4 my-2">
        <a href="#"><i  class="fa-3x fa-sm-2x fa fa-magic" aria-hidden="true"></i></a>
<h2>EASY TO GET SERVICES</h2>
<p class="d-none d-md-block">Easy To Chose And Book Your Required Services </p>
      </div>      

    </div><!--end of row-1 -->
    
  </div>
</section>


      
          
    
<!--*************************try start********************--













          
          <div class="container1">
  <div class="card1">
    <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
    <p class="card1__name">Bianca Serrano</p>
    <div class="grid-container1">

      <div class="grid-child-posts">
        902 Post
      </div>

      <div class="grid-child-followers">
        1300 Likes
      </div>

    </div>
    <ul class="social1-icons">
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-codepen"></i></a></li>
    </ul>
    <button class="btn1 draw-border">Follow</button>
    <button class="btn1 draw-border">Message</button>
  </div>
  <div class="card1">
    <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
    <p class="card1__name">Bianca Serrano</p>
    <div class="grid-container1">

      <div class="grid-child-posts">
        902 Post
      </div>

      <div class="grid-child-followers">
        1300 Likes
      </div>

    </div>
    <ul class="social1-icons">
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-codepen"></i></a></li>
    </ul>
    <button class="btn1 draw-border">Follow</button>
    <button class="btn1 draw-border">Message</button>
  </div>
  <div class="card1">
    <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
    <p class="card1__name">Bianca Serrano</p>
    <div class="grid-container1">

      <div class="grid-child-posts">
        902 Post
      </div>

      <div class="grid-child-followers">
        1300 Likes
      </div>

    </div>
    <ul class="social1-icons">
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-codepen"></i></a></li>
    </ul>
    <button class="btn1 draw-border">Follow</button>
    <button class="btn1 draw-border">Message</button>
  </div>
</div>

    </div>
    </div>
       
          
     <!--*************************try end********************--> 
    
    
    <!-- =========================
    OVERVIEW SECTION   
============================== 
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h3>New Event is a fully responsive one-page template for events, conferences or workshops.</h3>
				<p>This is a Bootstrap v3.3.6 layout that is responsive and mobile friendly. You may download and modify this template for your website. Please tell your friends about templatemo.</p>
				<p>Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
			</div>
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				< img  src="images/d.jpg" class="img-responsive" alt="Overview">
			</div>

		</div>
	</div>
</section>
    
    -->
  


    
            <!--***   ***-->  
    <div style="background: rgb(245,233,174);
background: linear-gradient(180deg, rgba(245,233,174,0.8130602582830007) 0%, rgba(210,178,17,0.6898109585631127) 100%);">
  
    <h2 style=  "text-align: center"  >All About Servicio</h2 >
    </div>
    <section style="background: rgb(245,233,174);
background: linear-gradient(180deg, rgba(245,233,174,0.404096672848827) 0%, rgba(210,178,17,0.28644961402529767) 100%);">
										<p style="background: rgb(245,233,174);
background: linear-gradient(180deg, rgba(245,233,174,0.404096672848827) 0%, rgba(210,178,17,0.28644961402529767) 100%);"><span class="image left"><img src="images3/f.jpg" alt="" />
                                            </span><br>The Servicio is an Marketing Platflorm Where Customers can Directly Deal with Service providers.<br>
                                            No Need to Serach Here and There if Servicio is Here.<br><br>
                                            Servicio is an Efficient website which can rovide the all Information of different Business Domains, skilled employees(workers) and many more.<br> <br> Also the service provider can register their details.<br>
                                             Details of Service Provider and the Client and Access their Information easily from anywhere at anytime.
                                            <br><br>
                                            The Website gives the Reliable Environment to both Client and Service Provider.<br>
The service provider can check their Reviews, so that they can change the Quality or Methods of Services Provided<br>
Clients can compare various service providers for a same service.<br>
                                            The WebsiTte is Designed to Perform Several Tasks. <br>
Many of the client users and service providers can access the Website at a Time.<br>
The Client, User and Service Providers can easily access the website by just Clicking on Links.<br><br>
        </p>
										
    
    </section>
                 
    
<!-- =========================
    FAQ SECTION   
============================== -->
<section  style="background:linear-gradient(to right , #1e5799 0%,#3ccdbb 0%, #16c9f6 100%); "id="faq" class="parallax-section">
	<div class="container">
		<div class="row">
	<!-- Section title
			================================================== -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Do you have Questions?</h2>
					<p>Servicio Has Friendly Enviroment with Fun Elements And A Easy Userinterface.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          							 Is it a Free Platform  ?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Yes Totaly;.</p>
								<p>Servicio gives the Free Reliable Environment to both Client and Service Provider.</p>
      						</div>
   						 </div>
 					</div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          							Can we add our own Service?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
                            	<p>Yes you can add Your Own Service </p>
        						<p>Yes you can add Your Own Service, Only thing You Should Register in Servicio As an Service Provider .<br>
                                    And Attach Your Service Documentation  .</p>
      						</div>
   						 </div>
 					</div>

 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          							What Things Servicio Provides?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
                                <p>Servicio Provides :- </p>
                            	<p>Servicio Provides Friendly Enviroment with easy UserInterface.<br>
                                Clients can compare various service providers for a same service</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

		</div>
	</div>
</section>


    
         <!--*************************try1 start********************--> 
    
        <div style="background: rgb(245,233,174);
background: linear-gradient(180deg, rgba(245,233,174,0.8130602582830007) 0%, rgba(210,178,17,0.6898109585631127) 100%);">
    <h1 style="text-align: center">HOW SERVICIO WORKS </h1>
</div>
    
   <section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

			
			<div class="container2">
          
        <div class="card2">
            <div class="face face1">
                <div class="content2">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                    <h3>Plan</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content2">
                    <p>As For Your Requirement and Need, Plan An Suitable Service.</p>
                        <a style="color: red" >Checkout Next Step -></a>
                </div>
            </div>
        </div>
        <div class="card2">
            <div class="face face1">
                <div class="content2">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                    <h3>Search</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content2">
                    <p>As For The Plan Search Your Required Services At SERVICIO From The List. </p>
                        <a style="color: red" >Checkout Next Step -></a>
                </div>
            </div>
        </div>
        <div class="card2">
            <div class="face face1">
                <div class="content2">
                    <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                    <h3>Book</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content2">
                    <p>Book Your Chosen Service at SERVICIO As For You Requirment.</p>
                        <a style="color: red"  >!!Thank-You!! </a>
                </div>
                
            </div>
        </div>
    </div>
          	
            		

		</div>
        	
    </div>
</section>
          
   
    
    
    
    
    
    
    
   
     <!--*************************try2 end********************-->     
    
    
    
    
    
 
   
              <!--*************************try3 strat********************--  
    
      <div class="box3">
      <div class="card3">
        <div class="imgBx">
            <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
        </div>
        <div class="details">
            <h2>SomeOne Famous<br><span>Director</span></h2>
        </div>
      </div>
    
       <div class="card3">
         <div class="imgBx">
            <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
         </div>
         <div class="details">
            <h2>SomeOne Famous<br><span>Producer</span></h2>
          </div>
       </div>

       <div class="card3">
         <div class="imgBx">
            <img src="https://images.unsplash.com/photo-1548094878-84ced0f6896d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
         </div>
         <div class="details">
            <h2>SomeOne Famous<br><span>Actor</span></h2>
          </div>
       </div>
 
  </div>

         

      <!--*************************try5 start****************
    
    
	<div class="image-area">
		<div class="img-wrapper">
			<img src="https://images.pexels.com/photos/1220757/pexels-photo-1220757.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Atul Prajapati">
			<h2>David james</h2>
			<ul>
				<li><a href="https://github.com/atuljustano"><i class="fab fa-github"></i></a></li>
				<li><a href="https://www.instagram.com/atulkprajapati2000/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://twitter.com/atuljustano"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCf-KfxuY8PZBSD_8RW2nYsw"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
    ****--> 
    
    
    
    
    
    
    
    
    
    
    

<!--*************************footer start********************-->


<footer class="ff" >
  <p>
    <div class="container text-center">
      <h2 class="mt-0">Direct Links</h2>
    
      <button type="button" class="btn btn-secondary">ADMIN</button>
      <button type="button" class="btn btn-success">FEEDBACK </button>
      <button type="button" class="btn btn-info">LOGIN</button>
      <button type="button" class="btn btn-warning">CONTACT-US</button>
    </div>
</p>

      <div class="footer-container" >
        <div class="left-col"  >
          
  
          <p  class="rights-text" style="color: #ab4197" ><b >@THANK-YOU FOR VISITING I HOPE YOU ENJOYED...</b> </p>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-pinterest"></a>
          <a href="#" class="fa fa-snapchat-ghost"></a>
          <a href="#" class="fa fa-skype"></a>
        </div>

    <br>
    <br>
    <br>
    <br>
</footer>




<!--*************************footer end********************-->




          

          
          
          
  
          
          
          
          
          
          




 <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    






 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE="crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik="crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<script>
  $('.count').counterUp({
    delay:10,
    time:8000
  })

</script>



</body>
</html>