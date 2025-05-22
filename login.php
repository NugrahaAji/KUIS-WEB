<?php
session_start();
include 'koneksi/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

if($user && ($password == $user['password'])){
    $_SESSION['user'] = $user['username'];
    header("location:  dashboard.php");
}
else{
    echo "Login gagal. Username atau password salah.";
}
?>