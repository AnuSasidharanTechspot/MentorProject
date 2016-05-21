<!DOCTYPE html>
<html lang="en">

<head>
	<title>Log in | Facebook</title>
	<?php $this->load->helper('url'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/fb.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	    	$('[data-toggle="popover"]').popover();   
		});
	</script>
</head>

<body>
	<div class="container-fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-2">
				<img src="<?php echo base_url(); ?>images/fb_head.png" class="img-responsive fb_head_height">
			</div>
			<div class="col-md-2 per_2">
				<button class="btn btn-success">Sign Up</button>
			</div>
		</div>
		<div class="row second_div">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3 login-box">
				<br/>
				<h4><b>Facebook Login</b></h4>
				<hr/>
				<div class="row col-md-offset-2 col-md-9 col-md-offset-1">
					<div class="row">
					<form role="form" method="post" action="loginControl">
						<div class="col-md-5">
							Email or Phone :
						</div>
						<div class="col-md-7 form-group">
							<input class="form-control" data-toggle="popover" data-content="username wrong." name="email" type="text"></input>
						</div>
						<div class="col-md-5">
							Password :
						</div>
						<div class="col-md-7 form-group">
							<input class="form-control" name="password" type="password"></input>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<input name="reminder" type="checkbox"> Keep me logged in</input>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<button class="btn btn-primary" type="submit">Login</button> or <a href="#"><b class="map_head">Sign up for Facebook</b></a>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<a href="#">Forgotten password</a>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3 per_1">
			<ul class="list-inline">
				<li><a>English</a></li>
				<li><a>മലയാളം</a></li>
				<li><a>தமிழ்</a></li>
				<li><a>ಕನ್ನಡ</a></li>
				<li><a>हिन्दी</a></li>
				<li><a>اردو</a></li>
				<li><a>বাংলা</a></li>
				<li><a>తెలుగు</a></li>
				<li><a>Español</a></li>
				<li><a>Português (Brasil)</a></li>
				<li><button class="btn-xs btn-btn-info" data-toggle="modal" data-target="#mymodal">...</button></li>
				<div class="modal fade" id="mymodal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Other Languages</h4>
							</div>
							<div class="modal-body">
								<p>Just for test</p>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</ul>
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3">
			<hr style="width: 100%; color: #AFA7A7; height: 1px; background-color:#AFA7A7;">
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3">
			<ul class="list-inline">
				<li><a>Sign Up</a></li>
				<li><a>Log In</a></li>	
				<li><a>Messenger</a></li>	
				<li><a>Facebook</a></li> 
				<li><a>Lite</a></li>	
				<li><a>Mobile</a></li>	
				<li><a>Find Friends</a></li>	
				<li><a>Badges</a></li>	
				<li><a>People</a></li>	
				<li><a>Pages</a></li>	
				<li><a>Places</a></li>	
				<li><a>Games</a></li>
				<li><a>Locations</a></li>	
				<li><a>Celebrities</a></li>	
				<li><a>Groups</a></li>	
				<li><a>About</a></li>	
				<li><a>Create Advert</a></li>	
				<li><a>Create Page</a></li>	
				<li><a>Developers</a></li>	
				<li><a>Careers</a></li>	
				<li><a>Privacy</a></li>	
				<li><a>Cookies</a></li>	
				<li><a>AdChoices</a></li>
				<li><a>Terms</a></li>	
				<li><a>Help</a></li>
			</ul>
			<br/>
			<h6 class="grey">Facebook © 2016</h6>
			<h6 class="map_head">English(UK)</h6>
		</div> 
	</div>
</body>

</html>