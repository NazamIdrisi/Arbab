
<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    

    <link href="css/animate.min.css" rel="stylesheet"/>
        <link href="css/animate.css" rel="stylesheet"/>
    
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600' rel='stylesheet' type='text/css'>
   <!--//webfonts-->
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.php">Arbab</a></h1>
				</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="offers.php">Offers</a></li>
								
								
								<li><a href="contact.php">Contact</a></li>
                                <li><a href="web/login.php"><img src="images/admin.png" height="20px"></a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>

			</div>
		</div>
        
           <?php
        
    session_start();
        
        $con = mysqli_connect("localhost","root","","arbab");
    
        if(!$con){
            echo "<script>alert('connection is not establish')</script>";
        }
    
        if(!empty($_POST["login"])){
            
            $username = $_POST["username"];
            
            $pass = $_POST["pass"];
            
            $query ="select * from user where username = '$username' and pass = '$pass'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $fnm=$fr[0];
            $lnm=$fr[1];
            $unm=$fr[2];
            $email=$fr[3];
            $mnum=$fr[4];
            $anum=$fr[5];
            $add=$fr[6];
            $ps=$fr[11];
            if($username==$unm && $pass==$ps )
            {
               $_SESSION['ID']=$unm;
                $_SESSION['fnm']=$fnm;
                $_SESSION['lnm']=$lnm;
                $_SESSION['email']=$email;
                $_SESSION['mnum']=$mnum;
                
                                
                
                header("Location:home.php");
                
                
            }
            else{
                
                echo "<script>alert('Invalid id and password')</script>";
            }
            
            
        }
    
    ?>

		<div class="banner-info">
			<div class="container">
                
                         <div style="background-color:rgba(0,0,0,0.30);border-radius:20px;">
                <div class="login-page" style="margin-top:-250px" >
		<div class="container">
			<div class="account_grid">
               
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h3 style="color:white;font-weight:bolder;">NEW CUSTOMERS</h3>
					<p style="color:white;font-weight:bolder;">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3 style="color:white;font-weight:bolder;">REGISTERED CUSTOMERS</h3>
					<p style="color:white;font-weight:bolder;">If you have an account with us, please log in.</p>
					<form method="post" action="index.php">
						<div>
							<span style="color:white;font-weight:bolder;">Email Address<label>*</label></span>
							<input type="text" name="username" required style="color:blue;font-family:Segoe Print;"> 
						</div>
						<div>
							<span style="color:white;font-weight:bolder;">Password<label>*</label></span>
							<input type="password" required name="pass" style="color:blue;"> 
						</div>
						<a class="forgot" href="forget.php" style="color:white;font-weight:bolder;">Forgot Your Password?</a>
                       
                        
                        
                        
                        
                        
                        
						<input type="submit" class="jello" value="Login" name="login">
                        
                        
                        
					</form>
			   </div>	
				<div class="clearfix"> </div>
			</div>
                </div>
                   
		</div>
	</div>

				<!---<div class="details-1">
					<div class="col-md-10 dropdown-buttons">   
						<div class="col-md-3 dropdown-button">           			
							<div class="input-group">
								<input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Name" type="text" required style="border-radius: 15px " >
							</div>
						</div>
						<!---strat-date-piker
							<link rel="stylesheet" href="css/jquery-ui.css" />
							<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
						<!---/End-date-piker---->

						<!--<div class="col-md-3 dropdown-button">           			
							<div class="book_date">
								<form>
									<input class="date" id="datepicker" type="text" value="Check In" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check In';}" style="border-radius: 15px ">
								</form>
							</div>		
						</div>
					  <div class="col-md-3 dropdown-button">           			
							<div class="book_date">
								<form>
									<input class="date1" id="datepicker1" type="text" value="Check Out" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check Out';}" style="border-radius: 15px ">
								</form>
							</div>		
						</div>
						<div class="col-md-3 dropdown-button">
						  <div class="section_1">
							 <select id="country" onchange="change_country(this.value)" class="frm-field required" style="border-radius: 15px ">
								<option value="null">Double Room</option>
								<option value="null">Sigle Room</option>         
								<option value="AX">Suit Room</option>
								<option value="AX">Guest Room</option>
							 </select>
						  </div>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-2 submit_button"> 
						<form action="details.html">
							<input type="submit" value="Search" style="border-radius: 15px ">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>-->
			</div>
		</div>
	</div>		
	<!-- banner -->
	<!-- hod -->
	<div class="hod">
		<div class="container">
			<div class="col-md-6 hod-left">
				<img src="images/14.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 hod-right">
				<h2>Publishing packages and web page</h2>
				<p>The point of using as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- hod -->
	<!-- tels -->
	<div class="tels">
		<div class="container">
			<div class="col-md-4 tels-left">
				<h4>Single room <span>110$</span></h4>
				<img src="images/4.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="col-md-4 tels-left">
				<h4>Double room <span>150$</span></h4>
				<img src="images/9.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="col-md-4 tels-left">
				<h4>Private room <span>200$</span></h4>
				<img src="images/3.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- tels -->
	<!-- special -->
	<div class="special">
		<div class="container">
			<div class="spe-info">
				<h3>Special Offer</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			</div>
		</div>
	</div>
	<!-- special -->
	<!-- quick -->
	<div class="quick">
		<div class="container">
			<div class="col-md-4 quick-left">
				<h3>Most Popular</h3>
					<ul>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
					</ul>
			</div>
			<div class="col-md-4 quick-left">
				<h3>News & Events</h3>
				<div class="new">
					<div class="n-lft">
						<h5>10</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>Lorem Ipsum is that it has a more-or-less normal<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-1">
					<div class="n-lft">
						<h5>15</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>That it has a more-or-less normal distribution<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 quick-left">
				<h3>Quick Message</h3>
					<form>
						<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Submit">
					</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- quick -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-2 deco">
				<h4>Navigation</h4>
				<li><a href="index.html">Home</a></li>
				<li><a href="shortcodes.html">Short Codes </a></li>
				<li><a href="sigin.html">Sign in</a></li> 
				<li><a href="contact.html">Contact</a></li>
			</div>
			<div class="col-md-2 deco">
				<h4>Links</h4> 
				<li><a href="#">Qui Sommes-Nous ?</a></li>
				<li><a href="#">Mentions Légales </a></li>
				<li><a href="#">Conditions D'Utilisation </a></li>
			</div>
			<div class="col-md-2 deco">
				<h4>Social</h4>
				<div class="soci">
					<li><a href="#"><i class="f-1"> </i></a></li>
					<li><a href="#"><i class="t-1"> </i></a></li>
					<li><a href="#"><i class="g-1"> </i></a></li>
				</div>
			</div>
			<div class="col-md-3 cardss">
				<h4>Payment Sécure</h4>
				<li><i class="visa"></i></li>
				<li><i class="ma"></i></li>
				<li><i class="paypal"></i></li>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 pos">
			<h4>NewsLetter</h4>
					   <form method="post">
						 <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						 <div class="smt">
							<input type="submit" value="Subscribe">
						 </div>
					   </form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
			<div class="container">
				<p>© 2015 Motel. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	<!-- footer -->
</body>
</html>