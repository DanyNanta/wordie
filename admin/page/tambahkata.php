<?php
	require_once("../php/tambahkata.php");
	require_once("../php/kata.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah User</title>
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
			<li ><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li ><a href="detail_user.php"><em class="fa fa-user"></em> User</a></li>
			<li ><a href="detail_profesi.php"><em class="fa fa-suitcase"></em> Profesi</a></li>
			<li class="active"><a href="detail_kata.php"><em class="fa fa-address-card"></em> Kata</a></li></li>
			<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kata / TambahKata</li>
			</ol>
		</div><!--/.row-->

    <div class="panel panel-default">
        <div class="panel-heading">
          <h3>MASUKKAN DATA</h3>
        </div>
        <!--Tabel input data / form masukkan data -->
        <div class="panel-body">
          <div class="container">
            <form class="form-horizontal" action="../php/tambahkata.php" method="post">
            <div class="form-group">
						<label class="control-label col-sm-2" style= "text-align:left">Select Profesi :</label>
						<div class="col-sm-4">
							<select name="pilih" class="form-control" required id="profesi">
								<option value="" selected disabled>Pilih Profesi</option>
								<option value="">semua profesi</option>
								<?php  
									$i=0;
									foreach ($profesi as $data) { 
								?>
								<option value="<?=$data['ID_PROFESI']?>"><?php echo $data['NAMA_IND']?></option>
								<?php  $i++;  } ?>	
								</select>
						</div>
					</div>
						<div class="form-group">
              <label class="control-label col-sm-2" style= "text-align:left">KATA (dalam bahasa Indonesia) :</label>
              <div class="col-sm-4">
                <input type="text" style="text-transform: uppercase;" class="form-control" name="KATA_IND" required>
              </div>
            </div>
						<div class="form-group">
              <label class="control-label col-sm-2" style= "text-align:left">KATA (dalam bahasa Inggris) :</label>
              <div class="col-sm-4">
                <input type="text" style="text-transform: uppercase;" class="form-control" name="KATA_ING" required>
              </div>
            </div>
            <div class="form-group">
              <td><button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                  &nbsp;<a href="detail_kata.php" class="btn btn-primary">Cancel</a></td>
            </div>
          </form>
        </div>
      </div>
        </div>
        <!-- submit barang -->
    <!-- </div> -->

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
