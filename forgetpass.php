<!DOCTYPE html>
<html lang="en">

<?php 
	include_once('config/config.php');
?>

<head>
	<!-- Head====================================================================== -->
	<?php include_once (DIR_BASE. '/include/head.php')?>
	<!-- Head====================================================================== -->	
</head>

<body>

	<!-- Header====================================================================== -->
	<?php include_once (DIR_BASE. '/include/header.php')?>
	<!-- Header end====================================================================== -->	

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once (DIR_BASE. '/include/sidebar.php')?>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Forget password?</li>
					</ul>
					<h3> FORGET YOUR PASSWORD?</h3>
					<hr class="soft" />

					<div class="row">
						<div class="span9" style="min-height:900px">
							<div class="well">
								<h5>Reset your password</h5><br />
								Please enter the email address for your account. A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.<br /><br /><br />
								<form>
									<div class="control-group">
										<label class="control-label" for="inputEmail1">E-mail address</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Submit</button>
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
	<?php include_once (DIR_BASE. '/include/footer&scr.php')?>
	<!-- footer&scr end================================================================== -->	
</body>

</html>