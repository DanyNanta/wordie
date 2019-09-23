<?php
  require_once ('../../koneksi/koneksi.php');
  //table KATEGORI
  $idUser = $_GET['ID_USER'];
  $queryUser = mysqli_query($conn, "SELECT * FROM USER WHERE ID_USER = $idUser ORDER BY ID_USER");
  $i = 0;
  $dataUbah = mysqli_fetch_assoc($queryUser);
  
  
?>
