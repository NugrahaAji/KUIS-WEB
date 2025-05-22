<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "kuis";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(!$con){
        die("Koneksi gagal");
    }
?>