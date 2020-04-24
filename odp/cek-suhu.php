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
        <h2 class="card-title">Cek Suhu Tubuh</h2>
    </div>
    <div class="card-body">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
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
                        <td><?= $o['suhu'] ?>^o</td>
                        <td><?= $o['tgl_cek'] ?></td>
                        <td>
                            <a href="edit-suhu.php?id_odp=<?= $o['id_odp']; ?>" class="badge badge-success">Cek Suhu</a>
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