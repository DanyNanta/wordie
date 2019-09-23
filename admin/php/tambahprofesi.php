<?php
require_once ('../../koneksi/koneksi.php');

if(isset($_POST['tambah'])){
    $name = $_FILES['fileToUpload']['name'];
    $tmp = $_FILES['fileToUpload']['tmp_name'];
    $size = $_FILES['fileToUpload']['size'];
    $tipe = $_FILES['fileToUpload']['type'];

    $fp = fopen($tmp, 'r');
    $content = fread($fp, $size);
    $content = addslashes($content);
    fclose($fp);

    $namaind = $_POST['NAMA_IND'];
    $namaing = $_POST['NAMA_ING'];
    $ceritaind = $_POST['CERITA_IND'];
    $ceritaing = $_POST['CERITA_ING'];

  $queryTambahProfesi = mysqli_query($conn, "INSERT INTO PROFESI (NAMA_IND,NAMA_ING ,CERITA_IND,CERITA_ING,GAMBAR) VALUES ('$namaind','$namaing','$ceritaind','$ceritaing','$content')");
  if ($queryTambahProfesi) {
    header('Location: ../page/detail_profesi.php');
  }
}
?>
