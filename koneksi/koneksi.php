<?php
    $conn = mysqli_connect("localhost","root","","wordie");
    if(!$conn){
        die("Connection Failed :".mysqli_connect_error());
    }
?>