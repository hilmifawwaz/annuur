<?php
include 'navbar.php';
include '../config.php';
$jabatan = "a";
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$getJabatan = $_POST['jabatan'];
	$jabatan = explode("_", $getJabatan);

	//upload gambar
	$loc = "assets/img/pengurus/";
	$ekstensi = ['image/jpeg', 'image/png'];
	$nama_file = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ekstensiFile = $_FILES['gambar']['type'];
	$file_tmp = $_FILES['gambar']['tmp_name'];

	if (in_array($ekstensiFile, $ekstensi)) {
		if ($ukuran < 2097152) {
			$upload = move_uploaded_file($file_tmp, $loc . $nama_file);

			if ($upload) {
				$query = "UPDATE `pengurus` SET `nama` = '$nama', `jabatan` = '$jabatan[0]', `foto` = '$nama_file' WHERE `id` LIKE '$jabatan[1]'";
				$result = mysqli_query($conn, $query);
			} else {
				echo "GAK BISA SU";
			}
		} else {
			// else for ukuran
			echo "<script>alert('UKURAN GAMBAR MAKSIMAL 2 MB!')</script>";
			return "tulisberita.php";
		}
	} else {
		// else for ekstensiFile
		echo "<script>alert('FILE ANDA TIDAK SESUAI!')</script>";
		return "tulisberita.php";
	}
}
?>

<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<br></br>
			<h1 style="text-align: center ;"> Tambah Pengurus </h1>
			<div class="mb-3">
				<label for="name" class="form-label">Nama</label>
				<input type="text" class="form-control" id="name" name="nama">
			</div>
			<div class="mb-3">
				<label for="jabatan" class="form-label">Jabatan:</label>
				<select class="form-select" name="jabatan" id="jenjangSekolah" required>
					<option selected disabled>Pilih</option>
					<option value="KETUA TAKMIR_1">KETUA TAKMIR</option>
					<option value="WAKIL KETUA TAKMIR_2">WAKIL KETUA TAKMIR</option>
					<option value="SEKRETARIS 1_3">SEKRETARIS 1</option>
					<option value="SEKRETARIS 2_4">SEKRETARIS 2</option>
					<option value="BENDAHARA 1_5">BENDAHARA 1</option>
					<option value="BENDAHARA 2_6">BENDAHARA 2</option>
				</select>
			</div>

			<div class="mb-3">
				<label for="gambar" class="form-label">Upload Gambar</label>
				<input class="form-control" name="gambar" id="gambar" type="file" accept="image/png, image/jpeg">
				<small class="form-text text-muted">
					* Tipe File: jpg, jpeg Ukuran Maksimal: 2MB
				</small>
			</div>
			<button class="btn btn-utama" type="submit" name="submit">Submit</button>
		</div>
	</form>
	<br>
	<?php
	include 'footer.php';
	?>
</body>