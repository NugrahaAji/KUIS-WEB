<?php 
include "koneksi/db.php"; 
$id = $_GET['id']; 
mysqli_query($con, "DELETE FROM users WHERE id=$id"); 
    echo "<div class='alert alert-success mt-3'>Data berhasil 
    disimpan.</div>  
    <script>" ;
header("Location: dashboard.php"); 
?> 