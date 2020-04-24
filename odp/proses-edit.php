<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_odp = $_POST['id_odp'];
    $nama = $_POST['nama'];
    $suhu = $_POST['suhu'];
    $tgl_cek = $_POST['tgl_cek'];

    $sql = "UPDATE odp SET nama='$nama', suhu='$suhu', tgl_cek='$tgl_cek' WHERE id_odp=  '$id_odp'";
    $res = mysqli_query($sql);
    $count = mysqli_num_rows($query);

    if(count == 1){
        header("location: cek-suhu.php");
    }
    else{
        header("location: edit-suhu.php");
    }
}
?>