
<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Rooms :: w3layouts</title>
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
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <script src="web/js/modernizr.js"></script>
<script src="web/js/jquery.cookie.js"></script>
<script src="web/js/screenfull.js"></script>
    <link href="web/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="web/css/font.css" type="text/css"/>
<link href="web/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<!-- banner -->
	
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="home.php" style="color:white">Arbab</a></h1>
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
								<li><a href="home.php">Home</a></li>
								<li class="active"><a href="rooms.php">Rooms</a></li>
								<li><a href="offers.php">Offers</a></li>
								
								
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				

			</div>
		</div>
	
    <!-------------------------------------------------------verify start-------------------------->
    <?php
    session_start();
    $run=$_SESSION['rnd'];
    if(!empty($_POST['postcat']))
    {
        $code =$_POST['code'];
        
        
        if($code==$run){
            header("location:home.php");
        }
        else{
            echo "<script>alert('something error')</script>";
        }
        
    }
    
    
    ?>
    <div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Verify your code</h2>
					</div>
				
                    
					<div class="panel panel-widget forms-panel w3-last-form">
						<div class="forms">
							<div class="form-three widget-shadow">
								<div class=" panel-body-inputin">
									<form class="form-horizontal" action="verify.php"  method="post">
										
										<div class="form-group">
											<label class="col-md-2 control-label">Code</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-key"></i>
													</span>
													<input type="text" class="form-control1"  name="code" value="<?php echo $run;  ?>" placeholder="Insert 4-digit code">
												</div>
											</div>
										</div>
										
										
										
                                        
                                        
                                        
										
										
										
										
										
										
                                       
                                        
                                        <input type="submit" name="postcat" value="submit" class="btn btn-primary w3ls-button"/>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //input-forms -->
			</div>
		</div>

    
    
    <!-------------------------------------------------verify end=-------------------------------------->
    
    
              
        
		<!-- banner -->
<!-- footer -->
	<div class="footer" style="background-color:darkblue">
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