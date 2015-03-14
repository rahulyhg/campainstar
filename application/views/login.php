<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page | Campaign Stars</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url('assets/css/nifty.min.css'); ?>" rel="stylesheet">

	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">


	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url('assets/css/demo/nifty-demo.min.css'); ?>" rel="stylesheet">




	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url('assets/plugins/pace/pace.min.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/plugins/pace/pace.min.js'); ?>"></script>


	
	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->
		

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg"  style="background:white;">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<img src="<?php echo base_url("assets/camp_logo.png");?>" alt="">
				</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Sign In to your account</p>
					<form method="post" action="<?php echo site_url('login/validate') ;?>">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>
						
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
								</div>
							
					</form>
				</div>
			</div>
		
		</div>
		<!--===================================================-->
		
	
		
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


		
	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>


	<!--Fast Click [ OPTIONAL ]-->
	<script src="<?php echo base_url('assets/plugins/fast-click/fastclick.min.js'); ?>"></script>

	
	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url('assets/js/nifty.min.js'); ?>"></script>


	<!--Background Image [ DEMONSTRATION ]-->
	<script src="<?php echo base_url('assets/js/demo/bg-images.js'); ?>"></script>

	
	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->
		

</body>
</html>
