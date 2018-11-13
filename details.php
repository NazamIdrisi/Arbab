<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Details :: w3layouts</title>
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
	<!--<div class="banner1">-->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Arbab</a></h1>
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
								<li><a href="rooms.php">Rooms</a></li>
								<li><a href="offers.php">Offers</a></li>
								
								
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				

			</div>
		</div>
	<!--</div>-->		
		<!-- banner -->
    
    
<!-- details -->
	<div class="details">
		<div class="container">
			 <?php
                        session_start();
                        $con = mysqli_connect("localhost","root","","arbab");
                    
                    if(!$con){
                        echo "<script>alert('connection not stablish')</script>";
                    }
    
                    if(isset($_GET['id']))
                    {
                        $rid=$_GET['id'];
                        
                    
              
                        $select = "select * from rooms where room_num='$rid' ";                         
                        $query = mysqli_query($con,$select);
                        $ft=mysqli_fetch_row($query);
                  
                        $ride=$ft[0];
                            $rname=$ft[1];
                            $rflor=$ft[2];
                            $rtype=$ft[3];
                            $rclas=$ft[4];
                            $rfare=$ft[5];
                            $rimg=$ft[6];
                            $_SESSION['fre']=$rfare;
                        $_SESSION['rid']=$ride;
                        $_SESSION['ronm']=$rname;
                        
                           
               
                            ?>
    
      
    
            <div class="col-md-7 details-left">
				<img src="web/userpic/<?php echo $rimg; ?>" class="img-responsive" alt=""  >
			</div>
			<div class="col-md-5 details-right">
                <span><strong>Room name/  <?php echo $rname; ?></strong></span><br/>
				<span><strong>Rs. <?php echo $rfare; ?></strong> /night</span>
				<li>Room Type/ <?php echo $rtype;  ?></li>
                <li>Floar No/ <?php echo $rflor;  ?></li>
                <li>Class/ <?php echo $rclas;  ?></li>
                <li>Book the service at the best price</li>
				<li>Payment by credit card/Cash</li>
				<li>Free Booking</li>
				
			</div>
    
                      
    <?php                    
                  
                    
    
                    }
                    ?>
            
            
			<div class="clearfix"> </div>
			<div class="details-top">
				
				<h4>Included</h4>
				<li>Kids under 5: free</li>
				<li>publishing packages and web .Many desktop publishing packages and web page editors </li>
				<h4>Not included</h4>
				<li> will uncover many web sites still in their infancy. Various versions have evolved over the years,</li>
				<h4>Additional information</h4>
				<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div>
            
            
            <?php 
            
            $con = mysqli_connect("localhost","root","","arbab");
            if(!$con){
                echo "<script>alert('connection is not established')</script>";
            }
            
                if(!empty($_POST["book"])){
                    $user=$_SESSION['ID'];
                    $roid=$_SESSION['rid'];
                    $member = $_POST['member'];
                    $type=$_SESSION['type'];
                    $fore=$_SESSION['fre'];
               
                    $cin=$_SESSION['cin'];
                    $cout=$_SESSION['cout'];
                    $date1=date_create($cin);
                    $date2=date_create($cout);
                    $diff=date_diff($date1,$date2);
                 $tfr=$diff->format("%a");
                $total=$tfr*$fore;
                    
                    
                    
                    
        
                    $_SESSION['tf']=$total;
                    
                    $insert= "insert into book(user_id,room_id,member,cin,cout,total_fare,type) values('$user','$roid','$member','$cin','$cout','$total','$type')";
                    
                    $query=mysqli_query($con,$insert);
                    if(!$query){
                        echo "";
                    }
                    else{
                        header("Location:payment.php");
                    }
                    
                }
            ?>
            
			<div class="booking-form">
              <form method="post" action="details.php">
				 <div class="col-md-6">			 
					
						<h5>NAME</h5>   
						<input type="text" disabled value="<?php echo   $_SESSION['fnm']; ?>">
						
                     <h5>SUR NAME</h5>
						<input type="text" disabled value="<?php echo   $_SESSION['lnm']; ?>">
					
                     <h5>E-MAIL</h5>
						<input type="text" disabled value="<?php echo   $_SESSION['email']; ?>">
					
                     <h5>PHONE</h5>
						<input type="text" disabled value="<?php echo   $_SESSION['mnum']; ?>">
						
				
                     <input type="submit" value="Book" name="book" >
				</div>
				<div class="col-md-6">		
					
						<h5>CHECK IN</h5>
							<input type="text" disabled value="<?php echo $_SESSION['cin']; ?>">
						<h5>CHECK OUT</h5>
							 <input type="text" disabled value="<?php echo $_SESSION['cout']; ?>">
							 
				 <h5 class="mem">MEMBERS/Maximum 3 in a room </h5>
				 <select class="arrival" name="member">
                                
								<option>1</option>
								<option>2</option>
								<option>3</option>
							 </select>
                    
                    <h5>Room Type</h5>
						<input type="text" name="type" disabled value="<?php echo   $_SESSION['type']; ?>">
				
				<div class="clearfix"> </div>
				 
				 
						      
			 </div>
                </form>
			</div>
		 </div>
	</div>
<!-- details -->
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
				<p>© 2015 Arbab. All Rights Reserved | Design by  <a href="http://nazam.unaux.com/" target="_blank">Nazam</a> </p>
			</div>
		</div>
	<!-- footer -->
</body>
</html>