<?php
  require_once ('../../koneksi/koneksi.php');
  //table KATEGORI
  if(isset($_POST['ubah'])){
    $idUser = $_POST['ID_USER'];
    $username = $_POST['USERNAME'];
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];
    $queryUpdateUser = mysqli_query($conn, "UPDATE USER SET USERNAME = '$username',EMAIL = '$email',PASSWORD = '$password' WHERE ID_USER = $idUser");
    if ($queryUpdateUser) {
      header('Location: ../index.php');
    }
  }
?>
