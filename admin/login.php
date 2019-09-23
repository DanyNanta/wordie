<?php
session_start();
if (isset($_SESSION['is_logged'])){
	header('Location: index.php');
}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/css/datepicker3.css" rel="stylesheet">
	<link href="asset/css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form role="form" action="login/login_action.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" style="text-transform: uppercase;"placeholder="Email" name="email" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control"style="text-transform: uppercase;" placeholder="Password" name="password" type="password" value="" required>
							</div>
							<input type="submit" value="login" class="btn btn-primary btn-sm"></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
<script src="../../asset/js/jquery-1.11.1.min.js"></script>
	<script src="../../asset/js/bootstrap.min.js"></script>
</body>
</html>
