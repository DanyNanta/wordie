<?php
	require_once("../php/ubahprofesi.php");
	require_once('../php/tampilkanprofesi.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Profesi</title>
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
				<a class="navbar-brand" href="#"><span>wordie</span>Admin</a>
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
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="detail_user.php"><em class="fa fa-user"></em> User</a></li>
			<li class="active"><a href="detail_profesi.php"><em class="fa fa-suitcase"></em> Profesi</a></li>
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
				<li class="active">Profesi</li>
			</ol>
		</div><!--/.row-->

    <div class="panel panel-default">
        <div class="panel-heading">
          <h3>UBAH DATA</h3>
        </div>
        <!--Tabel input data / form masukkan data -->
        <div class="panel-body">
          <div class="container">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="../php/ubahprofesi.php?ID_PROFESI=<?=$_GET['ID_PROFESI']?>">
            <div class="form-group">
              <label class="control-label col-sm-2" style= "text-align:left">ID :</label>
              <div class="col-sm-4">
                <input type="number"  class="form-control" name="" value="<?=$dataUbah['ID_PROFESI']?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" style= "text-align:left">Nama Profesi(INDONESIA) :</label>
              <div class="col-sm-4">
                <input type="text" style="text-transform: uppercase;" class="form-control" name="NAMA_IND" value="<?=$dataUbah['NAMA_IND']?>">
              </div>
            </div>
						<div class="form-group">
              <label class="control-label col-sm-2" style= "text-align:left">Nama Profesi(INGGRIS) :</label>
              <div class="col-sm-4">
                <input type="text" style="text-transform: uppercase;" class="form-control" name="NAMA_ING" value="<?=$dataUbah['NAMA_ING']?>">
              </div>
            </div>
						<div class="form-group">
                <label class="control-label col-sm-2" style= "text-align:left">Cerita(IND)</label>
                <div class="col-sm-6">
                  <textarea  style="text-transform: uppercase;" rows="8" class="form-control" name="CERITA_IND" ><?php echo $dataUbah['CERITA_IND']?></textarea>
                </div>
            </div>
						<div class="form-group">
                <label class="control-label col-sm-2" style= "text-align:left">Cerita(ING)</label>
                <div class="col-sm-6">
                  <textarea  style="text-transform: uppercase;" rows="8" class="form-control" name="CERITA_ING" ><?php echo $dataUbah['CERITA_ING']?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" style= "text-align:left">Gambar :</label>
                <div class="col-sm-4">
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <!-- <input type="text" class="form-control" name="GAMBAR"> -->
                </div>
            </div>
            <div class="form-group">
              <td><button type="submit" class="btn btn-primary" name="ubah">Submit</button>
                &nbsp;<a href="detail_profesi.php" class="btn btn-primary">Cancel</a>
              </td>
            </div>
						<input type="hidden" class="form-control" name="ID_PROFESI" value="<?=$dataUbah['ID_PROFESI']?>">
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
