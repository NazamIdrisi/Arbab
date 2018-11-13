<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
    <link rel="stylesheet" href="../css/notify.css">
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.html">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					UI Components
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="buttons.html">
					Buttons
					</a>
					</li>
					<li>
					<a class="subnav-text" href="grids.html">
					Grids
					</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Forms
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="inputs.html">Inputs</a>
					</li>
					<li>
						<a class="subnav-text" href="validation.html">Form Validation</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Pages</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="gallery.html">
							Image Gallery
						</a>
					</li>
					<li>
						<a class="subnav-text" href="calendar.html">
							Calendar
						</a>
					</li>
					<li>
						<a class="subnav-text" href="signup.html">
							Sign Up Page
						</a>
					</li>
					<li>
						<a class="subnav-text" href="login.html">
							Login Page
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						Charts
					</span>
				</a>
			</li>
			<li>
				<a href="typography.html">
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					Typography
					</span>
				</a>
			</li>
			<li>
				<a href="tables.html">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Tables
					</span>
				</a>
			</li>
			<li>
				<a href="maps.html">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span class="nav-text">
					Maps
					</span>
				</a>
			</li>
			<li>
				<a href="error.html">
					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					<span class="nav-text">
					Error Page
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Extras</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="faq.html">FAQ</a>
					</li>
					<li>
						<a class="subnav-text" href="blank.html">Blank Page</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="login.html">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt="" />Arbab</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							
							<li class="dropdown head-dpdn">
								<a href="../web/notify.php"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<!----<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>--->
							</li>	
								
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
        <section>
        
            <div class="main-grid">
			<div class="agile-grids">	
				
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Notifications</h2>
					</div>
				
			</div>
                
                <?php
        
        $con = mysqli_connect("localhost","root","","arbab");
        
        $i = "select * from user";
        if($con){
            $rs=mysqli_query($con,$i);
            $fr=mysqli_num_rows($rs);
        }
        
        ?>
                
                <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading notification_header" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fa fa-user" style="margin-left:10px;"><sup style="color:red;" class="badge blue" ><?php  echo $fr;?></sup></span>
                                New User
                              
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                      <th>Mobile</th>
                                  </tr>
                                </thead>
                                
                                <?php
                                
                                $con = mysqli_connect("localhost","root","","arbab");
                                
                                $n="select * from user";
                                
                                 $qu=mysqli_query($con,$n);
                while($u=mysqli_fetch_array($qu))
                  {
                      $fname=$u[0];
                        $lname=$u[1];
                    $email=$u[3];
                    $mobile=$u[4];
                    
                      
                                ?>
                                <tbody>
                                  <tr>
                                    <td><?php echo $fname; ?></td>
                                    <td><?php echo $lname; ?></td>
                                    <td><?php echo $email; ?></td>
                                      <td><?php echo $mobile; ?></td>
                                  </tr>
                                  
                                </tbody>
                                <?php
                }
                                ?>
                              </table>
                        </div>
                    </div>
                </div>
                
             <?php

       $pk='';
        
        $con = mysqli_connect("localhost","root","","arbab");
        
        $s = "select * from cmt where status='$pk'";
        if($con){
            $r=mysqli_query($con,$s);
            $f=mysqli_num_rows($r);
            
        }





              
                      
                
                
                
        ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                
                                <span class="fa fa-envelope" style="margin-left:10px;"><sup style="color:red;" class="badge blue" ><?php  echo $f;?></sup></span>
                                New Message
                            </a>
                        </h4>
                    </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           
                
                            
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>User_ID</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                  </tr>
                                </thead>
                     <?php
                                
                            $s="select * from cmt";
                              $query=mysqli_query($con,$s);
                while($c=mysqli_fetch_array($query))
                  {
                      $user_id=$c[0];
                    $cmt=$c[1];
                    $date=$c[2];
                   
                    ?>   
                    
                    
                   
                                <tbody>
                                  <tr>
                                    <td><?php echo $user_id; ?></td>
                                    <td><?php echo $cmt; ?></td>
                                    <td><?php echo $date; ?></td>
                                     <form action="<?php echo "notify.php?di=$user_id";     ?>" method="post" id="eye"> <td><button class="text-info" name="det" id="ins" ><span class="fa fa-eye"></span></button></td></form>
                                  </tr>
                                  
                                </tbody>
                                
                                
                                      
                            
                    <?php
                    if(!empty($_POST['det']))
                    {
                        $uid=$_GET['di'];
                        $st="ok";
                        $k="update cmt set status where user_id='$uid'";
                        $i="select * from user where username='$uid'";
                        $co=mysqli_connect("127.0.0.1","root","","arbab");
                        if($co)
                        {
                            mysqli_query($co,$k);
                            $mm=mysqli_query($co,$i);
                            $mb=mysqli_fetch_array($mm);
                            
                            $firstname=$mb[0];
                            $lastname=$mb[1];
                            $email=$mb[3];
                            $mobile=$mb[4];
                            
                            ?>
                                
                              <table id="result" class="table table-stripped">
                                <thead>
                                  <tr>
                                    <td>First Name</td>
                                      <td>Last Name</td>
                                      <td>Email</td>
                                      <td>Mobile</td>
                                    </tr>
                                    
                                  </thead>
                                  
                                  <tbody>
                                  <tr>
                                      <td><?php  echo $firstname; ?></td>
                                      <td><?php  echo $lastname; ?></td>
                                      <td><?php  echo $email; ?></td>
                                      <td><?php  echo $mobile; ?></td>
                                      </tr>
                                  
                                  </tbody>
                                </table>
                                
                                
                                <?php
                        }
                        
                        
                    }
                           
                } ?>
                   
                      </table>
                            
                           
                        </div>
                                
                    </div>

                    
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Contact
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Username</th>
                                    <th>Message</th>
                                    <th>Description</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td ><a href="#" class="ss">View More</a></td>
                                      
                                      <!----------start--------------------->
                                      
                                  </tr>
                                  <tr>
                                    <div class="list-group tb" style="display:none" >
    <a href="#" class="list-group-item">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		</div>
                
            </div>
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
        <script>
        $("#ins").click(function(){
            $.post($("#eye").attr("action"),$("#eye :iput").serializeArray(),function(info){$("#result").html(info);});
            
        });
            $("#eye").submit(function(){
                return false;
            });
        </script>
    
</body>
</html>
