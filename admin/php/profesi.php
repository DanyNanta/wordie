<?php
  require_once ('../../koneksi/koneksi.php');
 
    $queryProfesi = mysqli_query($conn, "SELECT * FROM PROFESI ORDER BY ID_PROFESI");
    $dataProfesi = array();
    $i = 0;
    while ($rows = mysqli_fetch_assoc($queryProfesi)) {
      $dataProfesi[$i]['ID_PROFESI'] = $rows['ID_PROFESI'];
      $dataProfesi[$i]['NAMA_IND'] = $rows['NAMA_IND'];
      $dataProfesi[$i]['NAMA_ING'] = $rows['NAMA_ING'];
      $dataProfesi[$i]['CERITA_IND'] = $rows['CERITA_IND'];
      $dataProfesi[$i]['CERITA_ING'] = $rows['CERITA_ING'];
      $dataProfesi[$i]['GAMBAR'] = $rows['GAMBAR'];
      $i++;
    }
  //GET DATA NAMA PROFESI

  //DELETE DATA PROFESI
  if (isset($_GET['ID_PROFESI']) && isset($_GET['aksi'])){
    if ($_GET['aksi'] == 'hapus'){
        $queryHapusProfesi = mysqli_query($conn, "DELETE FROM PROFESI WHERE ID_PROFESI = ".$_GET['ID_PROFESI']);
        if ($queryHapusProfesi) {
          header('Location: ../page/detail_profesi.php?ID_PROFESI='.$_GET['ID_PROFESI']);
        }
    }
  }
?>
