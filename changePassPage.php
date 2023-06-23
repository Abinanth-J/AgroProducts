<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroProducts</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
	</head>
    <body>
        <center>
    <form method="post" action="Profile/changePass.php">
			<div class="row uniform 50%">
				<div class="7u$">
					<input type="text" name="uname" id="uname" value="<?php echo $_SESSION['Name']?>" placeholder="UserName" style="width:80%" required/>
				</div>
				<div class="7u$">
					<input type="text" name="currPass" id="currPass" value="" placeholder="Current Password" style="width:80%" required/>
				</div>
				<div class="7u$">
					<input type="text" name="newPass" id="newPass" value="" placeholder="New Password" style="width:80%" required/>
				</div>
				<div class="7u$">
					<input type="text" name="conNewPass" id="conNewPass" value="" placeholder="Repeat New Password" style="width:80%" required/>
				</div>
			</div>
				<center>
				<div class="row uniform">
					<div class="7u 12u$(small)">
						<input type="submit" value="Submit" />
					</div>
				</div>
				</center>
			</div>
		</form>
        </center>
    </body>
</html>