<h5>Halaman data Kelas</h5>
<a href="?url=tambah-kelas" class="btn btn-primary">Tambh Kelas</a>
<hr>
<table class="table table-striped table-bordered">
	<tr class="fe-bold">
		<td>No</td>
		<td>Nama Kelas</td>
		<td>Kompetensi keahlian</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php 
		include'../koneksi.php';
		$no = 1;
		$sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
		$query = mysqli_query($koneksi, $sql);
		foreach($query as $data){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama_kelas'] ?></td>
				<td><?= $data['kompetensi_keahlian'] ?></td>
				<td>
					<a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas']?>"class= 'btn btn-warning'>EDIT</a>
				</td>
				<td>
					<a onclick="return confirm('Apakah anda yakin ingin menghapus Data')" href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas']?>"class= 'btn btn-danger'>HAPUS</a>
				</td>
			</tr>

		<?php  }?>

	 
	

</table>