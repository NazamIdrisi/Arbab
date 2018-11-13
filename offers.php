
<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Offers :: w3layouts</title>
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
</head>
<body>
<!-- banner -->
	<div class="banner1">
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
								<li><a href="index.php">Home</a></li>
								<li><a href="rooms.php">Rooms</a></li>
								<li class="active"><a href="offers.php">Offers</a></li>
								
								
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
							</form>
					</div>
				</div>
					<div class="clearfix"> </div>

				<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
				<!-- //search-scripts -->

			</div>
		</div>
	</div>		
		<!-- banner -->
    
    <?php
    
        $con=mysqli_connect("localhost","root","","arbab");
    if(!$con){
        echo "<script>alert('connection not stablish')</script>";
    }
    
        $select = "select r.room_num,r.room_name,r.flor_num,r.type,r.clas,r.room_img,o.room_num,o.off,o.des from rooms r inner join offer o on r.room_num=o.room_num ";
        
        $query = mysqli_query($con,$select);
        
        while($roo=mysqli_fetch_array($query))
                  {
                      $room_num=$roo[0];
                    $room_name=$roo[1];
                    $flor_num=$roo[2];
                    $type=$roo[3];
                    $clas=$roo[4];
                    $room_img=$roo[5];
                    $off=$roo[6];
                    $des=$roo[7];
            ?>
    
    <div class="col-md-4 offers-left">
				<h3><?php echo $room_name; ?></h3>
				<img src="web/userpic/<?php echo $room_img; ?>" class="img-responsive" alt="">
				<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
				<p>consectetuer adipiscing elit. Praesent vestibulum Lorem ipsum dolor sit amet, consectetuer adipiscing elit. molestie lacus.</p>
				<a class="hvr-shutter-in-horizontal" href="details.php">Book Now</a>
			</div>
     <?php
            
        }
    
    ?>
    
    
<!-- offers -->
	<div class="offers">
		<div class="container">
			<div class="col-md-4 offers-left">
				<h3><?php echo $room_name; ?></h3>
				<img src="web/userpic/<?php echo $room_img; ?>" class="img-responsive" alt="">
				<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
				<p>consectetuer adipiscing elit. Praesent vestibulum Lorem ipsum dolor sit amet, consectetuer adipiscing elit. molestie lacus.</p>
				<a class="hvr-shutter-in-horizontal" href="details.php">Book Now</a>
			</div>
			
			
			
			<div class="offer-btm">
				
				
				<!---<div class="col-md-4 offers-left">
					<h3>Hot Offers</h3>
					<img src="images/8.jpg" class="img-responsive" alt="">
					<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
					<p>consectetuer adipiscing elit. Praesent vestibulum Lorem ipsum dolor sit amet, consectetuer adipiscing elit. molestie lacus.</p>
					<a class="hvr-shutter-in-horizontal" href="details.php">Book Now</a>
				</div>-->
				<div class="clearfix"></div>
			</div>
		 </div>
	</div>
    
    
   
<!-- offers -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-2 deco">
				<h4>Navigation</h4>
				<li><a href="index.php">Home</a></li>
				
				 
				<li><a href="contact.php">Contact</a></li>
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