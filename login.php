<!DOCTYPE html>
<html lang="en">

<?php 
	include_once('config/config.php');
?>

<head>
	<!-- Head====================================================================== -->
	<?php include_once (DIR_BASE. 'include/head.php');?>
	<!-- Head====================================================================== -->	
</head>

<body>

	<!-- Header====================================================================== -->
	<?php include_once (DIR_BASE. 'include/header.php');?>
	<!-- Header end====================================================================== -->	

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once (DIR_BASE. 'include/sidebar.php');?>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Login</li>
					</ul>
					<h3> Login</h3>
					<hr class="soft" />

					<div class="row">
						<div class="span4">
							<div class="well">
								<h5>CREATE YOUR ACCOUNT</h5><br />
								Enter your e-mail address to create an account.<br /><br /><br />
								<form action="register.php">
									<div class="control-group">
										<label class="control-label" for="inputEmail0">E-mail address</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail0" placeholder="Email">
										</div>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Create Your Account</button>
									</div>
								</form>
							</div>
						</div>
						<div class="span1"> &nbsp;</div>
						<div class="span4">
							<div class="well">
								<h5>ALREADY REGISTERED ?</h5>
								<form>
									<div class="control-group">
										<label class="control-label" for="inputEmail1">Email</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword1">Password</label>
										<div class="controls">
											<input type="password" class="span3" id="inputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn">Sign in</button> <a href="forgetpass.php">Forget password?</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
	<!-- footer&scr====================================================================== -->
	<?php include_once (DIR_BASE. 'include/footer&scr.php')?>
	<!-- footer&scr end================================================================== -->	
</body>

</html>