<?php
require_once ('../../koneksi/koneksi.php');
//table Profesi
  $queryProfesi = mysqli_query($conn, "SELECT * FROM PROFESI WHERE ID_PROFESI = ".$_GET['ID_PROFESI']);
  $dataUbah = mysqli_fetch_assoc($queryProfesi);
  ?>
