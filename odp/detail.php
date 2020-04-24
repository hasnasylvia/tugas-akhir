<?php 
include '../asset/header.php';
include '../koneksi.php';

$id_odp = $_GET['id_odp'];
$sql = mysqli_query($koneksi,"SELECT * FROM odp WHERE id_odp='$id_odp'");
$detail = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col md-7">
            <h2>Detail</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td><?= $detail['nama'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Umur</strong></td>
                        <td><?= $detail['umur'] ?> tahun</td>
                    </tr>
                    <tr>
                        <td><strong>Suhu</strong></td>
                        <td><?= $detail['suhu'] ?>^o</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Cek</strong></td>
                        <td><?= $detail['tgl_cek'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="2">
                            <a href="index.php" class="btn btn-success">
                                <i class=" fa fa-angle-double-left"></i>Kembali
                            </a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?>