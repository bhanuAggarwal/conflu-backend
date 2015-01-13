<?php
	session_start();
	if(isset($_SESSION['username'])) {
		header("Location:html/event.html");
	}
?>
<!DOCTYPE html>
	<head>
		<title>Confluence'15</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
	</head>
	<body >
		<form class="form-horizontal" style= "padding-top:50px" role="form" method="post" id="loginForm" name="loginForm" action="php/loginCheck.php">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="username" >Name Of the Club</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="username" id="username" placeholder="Enter the name of the Club" />
				</div>
			</div>
			<div class="form-group">
				<label for "password" class="col-sm-2 control-label" >Password </label>
				<div class="col-sm-4">
					<input type="password" class="form-control" name= "password" id="password" placeholder="Enter the Password"/>
				</div>
			</div>
			<input type="submit" value="Log in" class="btn btn-primary col-md-1 col-md-offset-5" />
	</body>
</html>