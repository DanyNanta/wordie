<?php
  session_start();

  if ( isset($_SESSION['is_logged']) ){
    header('Location: page/index.php');
  } else {
    header('Location: login.php');
  }
?>
