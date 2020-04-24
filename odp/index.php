<?php 
include '../koneksi.php';

$sql = "SELECT * FROM odp ORDER BY nama";
$res = mysqli_query($koneksi,$sql);
$orang = array();
while($data=mysqli_fetch_assoc($res)){
    $orang[] =$data;
}
?>
<?php 
    include '../asset/header.php';
?>
<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i>Data ODP</h2>
    </div>
    <div class="card-body">
        <table class="table table-hover table-dark">
            <a href="tambah.php">Tambah ODP</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Suhu Tubuh</th>
                    <th scope="col">Terakhir Cek</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($orang as $o){ ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $o['nama'] ?></th>
                        <td><?= $o['umur'] ?> tahun</td>
                        <td><?= $o['suhu'] ?>^o</td>
                        <td><?= $o['tgl_cek'] ?></td>
                        <td>
                            <a href="detail.php?id_odp=<?= $o['id_odp']; ?>" class="badge badge-success">Detail</a>
                            <a href="edit-suhu.php?id_odp=<?= $o['id_odp']; ?>" class="badge badge-danger">Cek Suhu</a>
                            <a href="hapus.php?id_odp=<?php echo $o['id_odp']; ?>" class="badge badge-warning">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../asset/footer.php';
?>