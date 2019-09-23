<?php
  require_once ('../../koneksi/koneksi.php');
  $queryCountUser = mysqli_query($conn, "SELECT * FROM USER");
  $countUser = mysqli_num_rows($queryCountUser);

  $queryCountProfesi = mysqli_query($conn, "SELECT *  FROM PROFESI");
  $countProfesi = mysqli_num_rows($queryCountProfesi);

  $queryProfesi1 = mysqli_query($conn, "SELECT NAMA_IND FROM PROFESI ORDER BY ID_PROFESI");
  $dataProfesi1 = array();
  $i=0;
  while($rows = mysqli_fetch_assoc($queryProfesi1)) {
    $dataProfesi1[$i]['NAMA_IND'] = $rows['NAMA_IND'];
    $i++;
  }  

  //table User
  $queryUser = mysqli_query($conn, "SELECT * FROM USER ORDER BY ID_USER");
  $dataUser = array();
  $i = 0;
  while ($rows = mysqli_fetch_assoc($queryUser)) {
    $dataUser[$i]['ID_USER'] = $rows['ID_USER'];
    $dataUser[$i]['USERNAME'] = $rows['USERNAME'];
    $dataUser[$i]['EMAIL'] = $rows['EMAIL'];
    $dataUser[$i]['PASSWORD'] = $rows['PASSWORD'];
    $i++;
  }
  //table Profesi
  $queryProfesi = mysqli_query($conn, "SELECT * FROM PROFESI ORDER BY ID_PROFESI");
  $dataProfesi = array();
  $i=0;
  while ($rows = mysqli_fetch_assoc($queryProfesi)) {
    $dataProfesi[$i]['ID_PROFESI'] = $rows['ID_PROFESI'];
    $dataProfesi[$i]['NAMA_IND'] = $rows['NAMA_IND'];
    $dataProfesi[$i]['NAMA_ING'] = $rows['NAMA_ING'];
    $dataProfesi[$i]['GAMBAR'] = $rows['GAMBAR'];
    $i++;
  }

  //hapus user
  if (isset($_GET['ID_USER']) && isset($_GET['aksi'])){
    if ($_GET['aksi'] == 'hapus'){
        $queryHapusUser = mysqli_query($conn, "DELETE FROM USER WHERE ID_USER = ".$_GET['ID_USER']);
        if ($queryHapusUser) {
          header('Location: ../page/index.php');
        }
    }
  }
?>
