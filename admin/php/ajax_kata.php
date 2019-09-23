<?php
require_once ('../../koneksi/koneksi.php');

if (isset($_POST['id'])){
    $id = $_POST['id'];
    $query = mysqli_query($conn, "SELECT KATA.*, PROFESI.NAMA_IND, PROFESI.NAMA_ING, PROFESI.ID_PROFESI FROM KATA INNER JOIN PROFESI ON KATA.ID_PROFESI=PROFESI.ID_PROFESI WHERE KATA.ID_PROFESI LIKE '%$id%' ORDER BY ID_KATA");
    $dataKata = [];    
    $i = 0;
    while ($rows = mysqli_fetch_assoc($query)) {
      $dataKata[$i]['ID_KATA'] = $rows['ID_KATA'];
      $dataKata[$i]['ID_PROFESI'] = $rows['ID_PROFESI'];
      $dataKata[$i]['KATA_IND'] = $rows['KATA_IND'];
      $dataKata[$i]['KATA_ING'] = $rows['KATA_ING'];
      $dataKata[$i]['NAMA_IND'] = $rows['NAMA_IND'];
      $dataKata[$i]['NAMA_ING'] = $rows['NAMA_ING'];
      $i++;
    }

    echo json_encode($dataKata);
}

?>