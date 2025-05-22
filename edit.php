<?php 
include "koneksi/db.php"; 
$id = $_GET['id']; 
$data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM 
users WHERE id=$id")); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Edit User</title> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
    <h2>Edit Data User</h2> 
    <form method="POST"> 
        <div class="mb-3"> 
            <label>Nama</label> 
            <input type="text" name="username" class="form-control" value="<?=$data['username'] ?>" required> 
        </div> 
        <div class="mb-3"> 
            <label>NIM</label> 
            <input type="password" name="password" class="form-control" value="<?=$data['password'] ?>" required> 
        </div> 
        <button type="submit" name="update" class="btn btn-warning">Update</button> 
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a> 
    </form> 
    <?php 
    if (isset($_POST['update'])) { 
    $user = $_POST['username']; 
    $pass  = $_POST['password']; 
    mysqli_query($con, "UPDATE users SET username='$user',password='$pass' WHERE id=$id"); 
    echo "<div class='alert alert-success mt-3'>Data berhasil 
    diupdate.</div>"; 
    } 
    ?> 
</body> 
</html>