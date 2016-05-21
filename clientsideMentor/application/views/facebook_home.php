<!DOCTYPE html>
<html>

<head>
	<?php $this->load->helper('url'); ?>
	<!-- title -->
	<title>Facebook</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/fb.ico"/>
	<!-- lang-attribute & mobile scale -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- external css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" type="text/css">
	<script type="text/javascript">
		// function searchCall(){
		// 	stringSearch=document.getElementById("search").value();
		// 	$.ajax({
		// 			'url':'http://api.baabtra.com/SearchFriend/FindFriends.php',
	 //                'DataType':'json',
	 //                'data':{searchId:stringSearch},
	 //                success:function(data)
	 //                {
	 //                	alert("success");
	 //                	q=JSON.parse(data);
	 //                	alert (q);
	 //                	console.log(q);

	 //                },
	 //                error:function()
	 //                {
	 //                	alert("error");
	 //                }
	 //            });
		// 	}
	</script>
</head>

<body>
<?php 
	foreach($data as $user){
?>
	<header>
		<div class="fb_head">
			<div class="container">
				<form action="">
					<div class="form-group col-md-6 col-xs-6 has-feedback per_1">
						
						<input type="text" id="search" class="col-md-4 col-xs-4 form-control input-sm" onkeypress="searchCall()"placeholder="Search">
						<span class="form-control-feedback search_style glyphicon glyphicon-search"></span>
						
					</div>
				</form>
				
					
		        		<!-- <div class="form-group col-md-offset-1 col-md-6 col-xs-6 has-feedback per_1 "  >
		 					<input type="text" class="form-control" placeholder="Facebook Search" name="q">
		 						<div class=" input-group-btn">
		    						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
         						</div>
         				</div> -->
				    
				
				<!-- -->
				<div class="row">
				    <div class="col-md-6 col-xs-6">
					    <img class="float_left img-responsive" src="<?php echo $user['vchr_prof_pic']; ?>" height="50" width="50" />
					    <h5 class="white per_3"><?php echo $user['vchr_first_name']; ?></h5>
				    </div>
				</div>	
				
			</div>
		</div>
	</header>
	<div class="second_div">
		<div class="container">
			<div class="per_1 col-xs-3 col-md-3">
				<div class="row">
				    <div class="col-md-12 col-xs-12">
					    <img class="float_left img-responsive" src="<?php echo $user['vchr_prof_pic']; ?>" height="30" width="30" />
					    <h6 class="per_3"><?php echo $user['vchr_first_name']; ?></h6>
				    </div>
				</div>	
				<div class="row">
				    <div class="col-md-12 col-sm-12 col-xs-12">
					    <span class="glyphicon glyphicon-edit gly_edit"></span>
					    <h6 class="edit_h">Edit Profile</h6>
				    </div>
				</div>
			</div>
			<div class="per_1 col-xs-6 col-md-6">
				<div class="home_status1">
					<div class="col-md-4">
						<h5><span class="glyphicon glyphicon-edit gly_edit"></span> Update</h5>
					</div>
					<div class="col-md-4">
						<h5><span class="glyphicon glyphicon-picture gly_photo"></span> Add photos/Videos</h5>
					</div>
					<div class="col-md-4">
						<h5><span class="glyphicon glyphicon-list-alt gly_list"></span> Write Note</h5>
					</div>
					<div class="col-md-12 col-xs-12">
						<hr class="zero">
					</div>
					<div class="col-md-12 col-xs-12">
						<img class="float_left img-responsive" src="<?php echo $user['vchr_prof_pic']; ?>" height="80" width="80" />
					    <h4 class="grey per_3">What's on your mind?</h4>
					</div>
				</div>
				<div class="home_status2">
					<h4></h4>
				</div>
			</div>
			<div class="per_1 col-xs-3 col-md-3">
				<h5 class="grey">YOUR ADS</h5>
			</div>
		</div>
	</div>
	<!-- jquery link -->
	<script src="<?php echo base_url(); ?>js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<?php } ?>
</body>

</html>