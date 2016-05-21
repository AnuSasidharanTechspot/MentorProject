<!DOCTYPE html>
<html lang="en">

<head>
	<title>Facebook Log In or Sign up</title>
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
	<script>
	/*	$(document).ready(function()
		{
			$('#login').click(function()
			{
				alert("clicked");
				// var a = "info@baabtra.com";
				// var b = "Thisistrue";
				$.ajax(
				{
	                'url':'http://api.baabtra.com/Loginservicetest/login.php',
	                'DataType':'json',
	                'data':{email:a, password:b},
	                success:function(data)
	                {
	                	alert("success");
	                	q=JSON.parse(data);
	                	alert (q);
	                	console.log(q);

	                },
	                error:function()
	                {
	                	alert("error");
	                }
	            });
			});
		});*/
	</script>

</head>

<body>

	<div class="container-fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-5">
				<img class="img-responsive" src="<?php echo base_url(); ?>images/fb_head.png">
			</div>
			<div class="col-md-6 head_off">
				<form role="form" method="post" action="index.php/FacebookLogin/loginControl">
					<div class="col-md-4 form-group head_foot">
						<label for="email" class="white">Email or phone:</label>
						<input type="email" class="form-control" name="email" placeholder="Enter email" value="info@baabtra.com">
						<input type="checkbox"> Keep me logged in</input>
					</div>
					<div class="col-md-4 form-group white">
						<label for="password" >Password:</label>
						<input type="password" class="form-control" name="password" placeholder="Enter password" value="Thisistrue">
						<a href="#" class="head_foot">Forgotten your Password?</a>
					</div>
					<div class="col-md-4 form-group per_3">
						<button id="login" type="submit" class="login">Login</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row second_div" >
			<div class="col-md-offset-1 col-md-4 col-md-offset-1 per_3 margin_25">
				<h3 class="map_head"><b>Facebook helps you connect and share with the people in your life.</b></h3>
				<img src="<?php echo base_url(); ?>images/map.png" class="img-responsive map_img">
			</div>
			<div class="col-md-offset-1 col-md-5 per_1">
				<h1 class="left_2"><b>Create an account</b></h1>
				<h3 class="left_2">It's free and always will be.</h3>
				<form role="form" action="index.php/RegisterUser/addUser" method="post">
					<div class="form-group col-md-5">
						<input type="text" name="fname" placeholder="First name" class="col-md-3 form-control" id="form-first-name">	
					</div>
					<div class="form-group col-md-5">
						<input type="text" name="lname" placeholder="sur name" class="col-md-3 form-control" id="form-first-name">	
					</div>
					<div class="form-group col-md-10">
						<input type="text" name="email" placeholder="Email or mobile number" class="form-control" id="form-id">
					</div>
					<div class="form-group col-md-10">
						<input type="text" name="re-email" placeholder="Re-enter email or mobile number" class="form-control" id="form-re-id">
					</div>
					<div class="form-group col-md-10">
						<input type="text" name="password" placeholder="Password" class="form-control" id="form-pwd">
					</div>
					<!--<div class="col-md-5 col-sm-5">
						<input type="file" class="btn btn-info" name="profile_pic">
					</div>-->
					<div class="col-sm-12"><label>Birthday</label></div>
         			<div class="col-sm-3 col-md-3">
         				<select class="form-control" name="day">
         				<option>Day</option>
         				<?php
         				for($i=1;$i<=31;$i++){
         				?>
         				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         				<?php } ?>
         				</select>

         			</div>
         			<div class="col-sm-3 col-md-3">
         				<select class="form-control" name="month">
         				<option>Month</option>
         				<option value="Jan">Jan</option>
         				<option value="Feb">Feb</option>
         				<option value="Mar">Mar</option>
         				<option value="Apr">Apr</option>
         				<option value="Jun">Jun</option>
         				<option value="Jul">Jul</option>
         				<option value="Aug">Aug</option>
         				<option value="Sep">Sep</option>
         				<option value="Oct">Oct</option>
         				<option value="Nov">Nov</option>
         				<option value="Dec">Dec</option>
         				</select>
         			</div>
         			<div class="col-sm-3 col-md-3">
         				<select class="form-control" name="year">
         				<option>Year</option>
         				<?php
         				for($i=2016;$i>=1905;$i--){
         				?>
         				<optionvalue="<?php echo $i; ?>"><?php echo $i; ?></option>
         				<?php } ?>
         				</select>
         			</div> 
					<div class="form-group col-md-10">
						<input type ="radio" name ="gender" >Female <input type ="radio" name ="gender">Male
					</div>
					<div class="col-md-10">
						<p class="grey">By clicking Create an account, you agree to our <span class="map_head">Terms</span> and that you have read our <span class="map_head">Data Policy</span>, including our <span class="map_head">Cookie Use</span>.</p>
					</div>
					<div class="col-md-10">
						<button type="submit" class="btn btn-success">Create an account</button>
					</div>
					<div class="col-md-10">
						<hr style="width: 100%; color: #AFA7A7; height: 1px; background-color:#AFA7A7;"/>
					</div>
					<div class="col-md-10">
						<h5><b><span class="map_head">Create a Page</span> <span class="grey">for a celebrity, band or business.</span></b></h5><br/>
					</div>
				</form>
			</div>			
		</div>
		<br/>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3">
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
				<li><button class="btn-xs btn-btn-info">...</button></li>
			</ul>
		</div> 
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
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
		</div> 
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<h6>Facebook © 2016</h6>
		</div>
	</div>
</body>

</html>