<?php
require_once ('../../koneksi/koneksi.php');
if(isset($_POST['ubah'])){
  $name = $_FILES['fileToUpload']['name'];
  $tmp = $_FILES['fileToUpload']['tmp_name'];
  $size = $_FILES['fileToUpload']['size'];    
  $tipe = $_FILES['fileToUpload']['type'];

  $fp = fopen($tmp, 'r');
  $content = fread($fp, $size);
  $content = addslashes($content);
  fclose($fp);

  $id = $_POST['ID_PROFESI'];
  $namaind = $_POST['NAMA_IND'];
  $namaing = $_POST['NAMA_ING'];
  $ceritaind = $_POST['CERITA_IND'];
  $ceritaing = $_POST['CERITA_ING'];

  $queryUpdateProfesi = mysqli_query($conn, "UPDATE PROFESI SET NAMA_IND = '$namaind',NAMA_ING = '$namaing',CERITA_IND = '$ceritaind',CERITA_ING = '$ceritaing',GAMBAR = '$content' WHERE ID_PROFESI = $id");
      if ($queryUpdateProfesi) {
        header('Location: /wordie/admin/page/detail_profesi.php');
      }
  }
?>