<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $suhu = $_POST['suhu'];
    $tgl_cek = $_POST['tgl_cek'];
    $id_odp = $_POST['id_odp'];

    $query = mysqli_query($koneksi, "INSERT INTO odp (nama, umur, suhu, tgl_cek, id_odp) VALUES 
                         ('$nama', '$umur', '$suhu', '$tgl_cek', '$id_odp')");
    $count = mysqli_affected_rows($koneksi);
    if($query > 0){
        header("location: index.php");
    }
    else{
        header("location: tambah.php");
    }
}
else{
    header ("location: tambah.php");
}
?>