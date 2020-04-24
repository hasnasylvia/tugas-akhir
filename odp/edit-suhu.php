<?php
include '../koneksi.php';
include 'proses-edit.php';
include '../asset/header.php';

$id_odp = $_GET["id_odp"];
$query = mysqli_query($koneksi, "SELECT * from odp where id_odp = '$id_odp'");
$data = mysqli_fetch_assoc($query);
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3>Cek Suhu Tubuh</h3>
				</div>
				<div class="card-body">
				<form action="" method="post">
			<table>
				<input type="hidden" name="id_odp" value="<?= $data['id_odp']; ?>">
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="nama">Nama</label>
	    					<input type="text" class="form-control" name="nama"  value="<?= $data['nama']; ?>" disable>
	  					</div>
	  				</td>
				</tr>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="umur">Umur</label>
	    					<input type="number" class="form-control" name="umur"  value="<?= $data['umur']; ?>" disable>
	  					</div>
	  				</td>
				</tr>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="suhu">Suhu</label>
	    					<input type="number" class="form-control" name="suhu"  value="<?= $data['suhu']; ?>" required>
	  					</div>
	  				</td>
				</tr>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="tgl_cek">Tgl_cek</label>
	    					<input type="date" class="form-control" name="tgl_cek"  value="<?= $data['tgl_cek']; ?>" required>
	  					</div>
	  				</td>
				</tr>
				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> Simpan </button> </td>
				</tr>
			</table>
		</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include '../asset/footer.php';
?>