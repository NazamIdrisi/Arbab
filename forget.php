
<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600' rel='stylesheet' type='text/css'>
   <!--//webfonts-->
<script type="text/javascript" src="js/bootstrap.js"></script>

    
    
    
    <style>
        input{
            color: blue;
            font-family: Segoe Print;
        }
    </style>
    
    
    
    </head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="header">
			<div class="container">
				<!---<div class="logo">
					<h1><a href="index.html">Motel</a></h1>
				</div>-->
					<nav class="navbar navbar-default" role="navigation">
						
                        <style>
                            .welcome{
                                
                                font-size: 25px;
                                margin-left: 160px;
                            }
                            
                        </style>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav welcome">
								<center><li><a href="index.php" style="font-size:30px;color:white;">Welcome to Hotel Arbab</a></li></center>
								
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				

			</div>
		</div>
	</div>		
		<!-- banner -->
    
    
    
    
    <!------------register php code start-------------------------------------------->
        <?php 
    
        $con = mysqli_connect("localhost","root","","arbab");
    if(!$con){
        echo "<script>alert('your connection not strablish')</script>";
    }
    
    if(!empty($_POST['forget'])){
        $username = $_POST['username'];
    $email = $_POST['email'];
    $newpass = $_POST['newpass'];
        
        $update = "update user set  pass='$newpass' where username='$username' ";
        
        $query = mysqli_query($con,$update);
    
    }
        
    ?>
    
    
    <!------------register php code end-------------------------------------------->
<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form method="post" action="forget.php"> 
				 <div class="register-top-grid">
					<h3>FORGOT YOUR PASSWORD</h3>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>User Name<label>*</label></span>
						 <input type="text" name="username"> 
					 </div>
                    
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email"> 
					 </div>
                      <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>NEW PASSWORD<label style="color:red"></label></span>
						 <input type="password" name="newpass"> 
					 </div>
					 <div class="clearfix"> </div>
					   
					 </div>
                  
				
                  <div class="register-but">
				   <div class="clearfix"> </div>
					   <input type="submit" value="Submit" class="btn btn-primary" name="forget"> 
					   
                      <div class="clearfix"> </div>
				   
				</div>
                  
				</form>
				
				
		   </div>
		 </div>
	</div>
<!-- registration -->
	<div class="footer-bottom">
			<div class="container">
				<p>© 2018 Arbab. All Rights Reserved | Design by  <a href="http://nazam.unaux.com/" target="_blank">Nazam</a> </p>
			</div>
		</div>
	<!-- footer -->
</body>
</html>