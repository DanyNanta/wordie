<?php
  require_once("../php/dashboard.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="../asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="../asset/css/datepicker3.css" rel="stylesheet">
	<link href="../asset/css/styles.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Wordie</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li ><a href="detail_user.php"><em class="fa fa-user"></em> User</a></li></li>
			<li ><a href="detail_profesi.php"><em class="fa fa-suitcase"></em> Profesi</a></li></li>
			<li ><a href="detail_kata.php"><em class="fa fa-address-card"></em> Kata</a></li></li>
			<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa fa-user color-blue"></em>
							<div class="large"><?=$countUser?></div>
							<div class="text-muted">User</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-6 col-lg-6 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa fa-suitcase color-orange"></em>
							<div class="large"><?=$countProfesi?></div>
							<div class="text-muted">Profesi</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>USER</h3>
			</div>
			<div class="panel-body">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>ID</th>
							<th>USERNAME</th>
							<th>EMAIL</th>
							<th>PASSWORD</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 $i=1;
						 foreach ($dataUser as $keyUser => $valueUser){
						?>
						<tr>
							<td><?= $i?></td>
							<td><?= $valueUser['USERNAME']?></td>
							<td><?= $valueUser['EMAIL']?></td>
							<td><?= $valueUser['PASSWORD']?></td>
							<td><a href="ubahuser.php?ID_USER=<?=$valueUser['ID_USER']?>" class="btn btn-primary btn-sm">Ubah</a>
                     &nbsp;<a href="../php/dashboard.php?ID_USER=<?=$valueUser['ID_USER']?>&aksi=hapus" class="btn btn-primary btn-sm">Hapus</a></td>
						</tr>
					<?php $i++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	<!--/.main-->

	<script src="../asset/js/jquery-1.11.1.min.js"></script>
	<script src="../asset/js/bootstrap.min.js"></script>
	<script src="../asset/js/chart.min.js"></script>
	<script src="../asset/js/chart-data.js"></script>
	<script src="../asset/js/easypiechart.js"></script>
	<script src="../asset/js/easypiechart-data.js"></script>
	<script src="../asset/js/bootstrap-datepicker.js"></script>
	<script src="../asset/js/custom.js"></script>

</body>
</html>
