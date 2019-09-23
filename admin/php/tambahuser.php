<?php
require_once ('../../koneksi/koneksi.php');
if(isset($_POST['tambah'])){
  $username = $_POST['USERNAME'];
  $email = $_POST['EMAIL'];
  $password = $_POST['PASSWORD'];
  $queryTambahUser = mysqli_query($conn, "INSERT INTO USER (USERNAME,EMAIL,PASSWORD) VALUES ('$username','$email','$password')");
  if ($queryTambahUser) {
    header('Location: ../index.php');
  }
}
 ?>
