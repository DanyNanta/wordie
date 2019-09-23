<?php
require_once ('../../koneksi/koneksi.php');
if(isset($_POST['tambah'])){
  $profesi = $_POST['pilih'];
  $kataind = $_POST['KATA_IND'];
  $kataing = $_POST['KATA_ING'];
  $queryTambahKata = mysqli_query($conn, "INSERT INTO KATA (ID_PROFESI,KATA_IND,KATA_ING) VALUES ($profesi,'$kataind','$kataing')");
  if ($queryTambahKata) {
    header('Location: ../page/detail_kata.php');
  }
}
 ?>
