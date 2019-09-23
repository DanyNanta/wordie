<?php
  require_once ('../../koneksi/koneksi.php');
  //GET DATA NAME PROFESI
  $queryKata = mysqli_query($conn, "SELECT * FROM KATA INNER JOIN PROFESI ON KATA.ID_PROFESI=PROFESI.ID_PROFESI ORDER BY ID_KATA");
    $dataKata = array();
    $i = 0;
    while ($rows = mysqli_fetch_assoc($queryKata)) {
      $dataKata[$i]['ID_KATA'] = $rows['ID_KATA'];
      $dataKata[$i]['ID_PROFESI'] = $rows['ID_PROFESI'];
      $dataKata[$i]['KATA_IND'] = $rows['KATA_IND'];
      $dataKata[$i]['KATA_ING'] = $rows['KATA_ING'];
      $dataKata[$i]['NAMA_IND'] = $rows['NAMA_IND'];
      $dataKata[$i]['NAMA_ING'] = $rows['NAMA_ING'];
      $i++;
    }

    $queryprof = mysqli_query($conn, "SELECT * FROM PROFESI");
    $profesi = array();
    $i = 0;
    while ($rows = mysqli_fetch_assoc($queryprof)) {
      $profesi[$i]['ID_PROFESI'] = $rows['ID_PROFESI'];
      $profesi[$i]['NAMA_IND'] = $rows['NAMA_IND'];
      $profesi[$i]['NAMA_ING'] = $rows['NAMA_ING'];
      $i++;
    }
  

  //DELETE DATA KATA
  if (isset($_GET['ID_KATA']) && isset($_GET['aksi'])){
    if ($_GET['aksi'] == 'hapus'){
        $queryHapusKata = mysqli_query($conn, "DELETE FROM KATA WHERE ID_KATA = ".$_GET['ID_KATA']);
        if ($queryHapusKata) {
          header('Location: ../page/detail_kata.php?ID_KATA='.$_GET['ID_KATA']);
        }
    }
  }
?>