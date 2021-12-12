<html>
<head>
	<link rel="stylesheet" type="text/css" href="/MVC/webroot/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/MVC/webroot/css/bootstrap.min.css">
	<style>
		.sidebar{width: 300px;float: left;overflow: hidden;}
		.widget{}
		.widget h2{border: 1px solid #ddd;margin: 8 0 7px;padding: 4px 10px;background: rgba(0, 255, 255, 0.1);}
		.widget ul{margin: 0;padding: 0;list-style: none;}
		.widget ul li{}
		.widget ul li a{background: rgba(66, 97, 97, 0.04) none repeat scroll 0 0;color: blue;display: block;text-decoration: none;margin-bottom: 1px;padding: 5px;}
		.widget ul li a:hover{}

		.loginerror{
			width:800px;
			margin:5% 5% 5% 10%;
		}
		.logincontent{
			width:800px;
			margin:8% 10% 0px 10%;
			/*border-radius: 10px 10px 10px 10px;*/
			background-color:#e4efef;
		}

		.postcontent{
			width: 1040px;
			height: 550px;
			padding-left: 5px;
			padding-top: 10px;
			margin-right: -15px;
			float: right;
			background-color: rgba(66, 97, 97, 0.04);
		}

		#single_product{width:175px;float: left;margin-top:10px;margin-bottom:8px; margin-left:25px;padding: 8px;border: 2px solid black; }

		#single_product img{margin-left: 20px;border: 2px solid black;}

		.footer p{
			padding-top: 15px;
			background-color: black;
			height: 200px; 
			font-family: comic sans ms;
			text-align: center; 
			color: white;
		}
		ul.home li a{
			font-size: 20px;
			font-family: TimeNewRoman;
		}
		.dropdown-menu{
			width: 170px;
		}
	</style>
	
</head>
<body>

	<div class="container-fluid">
		
		<div class="navigation">

			<nav class="navbar navbar-inverse navbar-fixed-top">

				<div class="header">

				</div>

				<ul class="nav navbar-nav home">

					<li><a href="<?php echo BASE_URL; ?>">Home</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li><a href="<?php echo BASE_URL; ?>/Product/viewAllProduct/">All Product</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="<?php echo BASE_URL; ?>/Contact/contactUs">Contact Us</a></li>

					<?php if(isset($_SESSION['email'])){ ?>

					<li><a href="#" class="dropdown-toggle" id="user_profile" data-toggle="dropdown"><span><?php echo "Hi,". $_SESSION['email']; ?></span></a>
						<ul class="dropdown-menu">
							<li><a href="myprofile.php" id="dropdown_link">MyProfile</a></li>
							<li class="divider"></li>
							<li><a href="order.php" id="dropdown_link">MyOrder</a></li>
							<li class="divider"></li> 
							<li><a href="<?php echo BASE_URL; ?>/Login/logout/">Logout</a></li>
						</ul>
					</li>&nbsp;&nbsp;

					<?php }else{ ?>

					<li><a href="<?php echo BASE_URL; ?>/Login/userLogin/">Login</a></li>
					<li><a href="<?php echo BASE_URL; ?>/Register/userRegister/">Register&nbsp;&nbsp;</a></li>

					<?php } ?>

				</ul>
			</nav>
		</div>

		<div class="content" style="height:auto;margin-left:-10px;margin-top:50px;">