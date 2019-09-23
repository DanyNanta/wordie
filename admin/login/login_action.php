<?php
      session_start();
    	if (isset($_POST['email']) && isset($_POST['password'])) {
        include '../../koneksi/koneksi.php';
        $email = $_POST['email'];
        $password = $_POST['password'];
	      $query = mysqli_query($conn, "SELECT * FROM admin WHERE EMAIL_ADMIN='$email' AND PASSWORD_ADMIN='$password'");
        $cek = mysqli_num_rows($query);
        if ($cek > 0){
          $_SESSION['is_logged'] = 'true';
          header('Location: ../index.php');
        } else {
          header('Location: ../login.php');
        }

        header('Location: ../index.php');
			}
		?>
