<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "praktikum";

    $connect = mysqli_connect($host, $user, $password, $db);
    if (!$connect) {
        die("Koneksi gagal:" . mysqli_connect_error());
    }
?>
