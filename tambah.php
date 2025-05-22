<?php include "koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Tambah User</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
    <h2>Tambah Data Mahasiswa</h2> 
    <form method="POST"> 
        <div class="mb-3"> 
            <label>Username</label> 
            <input type="text" name="username" class="form-control" required> 
        </div> 
        <div class="mb-3"> 
            <label>Password</label> 
            <input type="password" name="password" class="form-control" required> 
        </div> 
        <button type="submit" name="simpan" class="btn btn
    success">Tambahkan</button> 
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a> 
    </form> 
    <?php 
    if (isset($_POST['simpan'])) { 
    $user = $_POST['username']; 
    $pass  = $_POST['password']; 
    mysqli_query($con, "INSERT INTO users (username, password) VALUES 
    ('$user', '$pass')"); 
    echo "<div class='alert alert-success mt-3'>Data berhasil 
    disimpan.</div>  
    <script> 
    alert('Data Berhasil Ditambah') 
    window.location.href = 'dashboard.php' 
    </script> 
    "; 
    } 
    ?> 
</body> 
</html> 