<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_numb_rows($koneksi);

    if($count == 1){
        $data_login = mysqli_fetch_assoc($res);
        $_SESSION['id_petugas'] = $data_login['id_petugas'];
        $_SESSION['nama'] = $data_login['nama'];

        header ("location: http://localhost/covid/index.php");
    }
    else{
        header("location: http://localhost/covid/login/index.php");
    }
}
?>