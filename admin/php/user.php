<?php
  require_once ('../../koneksi/koneksi.php');
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
  //GET DATA NAMA USER

  //DELETE DATA USER
  if (isset($_GET['ID_USER']) && isset($_GET['aksi'])){
    if ($_GET['aksi'] == 'hapus'){
        $queryHapusUser = mysqli_query($conn, "DELETE FROM USER WHERE ID_USER = ".$_GET['ID_USER']);
        if ($queryHapusUser) {
          header('Location: ../page/detail_user.php?ID_USER='.$_GET['ID_USER']);
        }
    }
  }
?>
