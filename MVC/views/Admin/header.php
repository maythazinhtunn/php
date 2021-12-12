<html>
<head>
	<link rel="stylesheet" type="text/css" href="/MVC/webroot/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/MVC/webroot/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/MVC/webroot/css/jquery-ui.min.css">
	<style>
		.sidebar{width: 300px;float: left;overflow: hidden;border-right: 1px solid gray;}
		.widget{margin-bottom: 8px;}
		.widget h3{border: 1px solid #ddd;margin: 8 0 3 0px;padding: 4px 10px;background: rgba(0, 255, 255, 0.1);}
		.widget ul{margin: 0;padding: 0;list-style: none;}
		.widget ul li{}
		.widget ul li a{background: rgba(66, 97, 97, 0.7) none repeat scroll 0 0;color: blue;display: block;text-align:center;color:white;text-decoration: none;margin-bottom: 1px;padding: 5px;}
		.widget ul li a:hover{background-color: #555;
			border-left: 5px solid #800080;}

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
				min-height: 550px;
				padding-left: 5px;
				padding-top: 10px;
				margin-right: -15px;
				float: right;
				background-color: rgba(66, 97, 97, 0.04);
			}

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

			.title{border-bottom: 1px dashed #ddd;}

		</style>

	</head>
	<body>

		<div class="container-fluid">

			<div class="navigation">

				<nav class="navbar navbar-inverse navbar-fixed-top">

					<div class="header">

					</div>

					<ul class="nav navbar-nav home">

						<li><a href="<?php echo BASE_URL; ?>/Admin">Home</a></li>

					</ul>

					<ul class="nav navbar-nav navbar-right">

						<?php if(isset($_SESSION['Adminemail'])){ ?>

						<li><a href="#" class="dropdown-toggle" id="user_profile" data-toggle="dropdown"><span><?php echo "Hi,". $_SESSION['Adminemail']; ?></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo BASE_URL; ?>/AdminLogin/logout/">Logout</a></li>
							</ul>
						</li>&nbsp;&nbsp;

						<?php } ?>

					</ul>
				</nav>
			</div>

			<div class="content" style="height:auto;margin-left:-10px;margin-top:50px;">