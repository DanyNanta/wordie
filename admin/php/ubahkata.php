<?php
  require_once ('../../koneksi/koneksi.php');
  //table KATEGORI
  if(isset($_POST['ubah'])){
    $id = $_POST['ID_KATA'];
    $kataind = $_POST['KATA_IND'];
    $kataing = $_POST['KATA_ING'];
    $queryUpdateUser = mysqli_query($conn, "UPDATE KATA SET KATA_IND = '$kataind', KATA_ING = '$kataing' WHERE ID_KATA = $id");
    if ($queryUpdateUser) {
      header('Location: ../index.php');
    }
  } else {
    if (isset($_GET['ID_KATA'])){
      $id = $_GET['ID_KATA'];
      $query = mysqli_query($conn, "SELECT * FROM KATA WHERE ID_KATA = $id");
      $kata = mysqli_fetch_assoc($query);
      
    }
  }
?>
