<?php
include '../asset/header.php';
include '../koneksi.php';
?>

<html>
<head>
<title>Siperpus</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h2>Tambah Data</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="number" name="suhu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tgl_cek">Tanggal Cek</label>
                                <input type="date" name="tgl_cek" class="form-control">
                            </div>
                            <button type="submit" name="simpan"  class="btn btn-primary mr-auto">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../asset/footer.php';
?>