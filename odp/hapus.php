<?php
include '../koneksi.php';
$id =$_GET['id_odp'];
$query = "DELETE FROM odp WHERE id_odp = '$id'";
$odp = mysqli_query($koneksi,$query);

if(! $odp){
    die("Gagal menghapus date: " .mysqli_errno($koneksi). "-".mysqli_error($koneksi));
}
else{
    echo "<script>alert('Data berhasil dihapus.'); window.location='index.php'; </script>";
}
?>