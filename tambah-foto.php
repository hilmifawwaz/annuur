<?php
include 'navbar.php';
include 'config.php';

if (isset($_POST['upload'])) {
	$keterangan = $_POST['keterangan'];

	//upload gambar
	$loc = "assets/img/galeri/";
	$ekstensi = ['image/jpeg', 'image/png'];
	$nama_file = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ekstensiFile = $_FILES['gambar']['type'];
	$file_tmp = $_FILES['gambar']['tmp_name'];

	if (in_array($ekstensiFile, $ekstensi)) {
		if ($ukuran < 5242880) {
			$upload = move_uploaded_file($file_tmp, $loc . $nama_file);

			if ($upload) {
				$query = "INSERT INTO `galeri`(`gambar`,`keterangan`)
                  VALUES ('$nama_file','$keterangan')";
				$result = mysqli_query($conn, $query);
			}
		} else {
			// else for ukuran
			echo "<script>alert('UKURAN GAMBAR MAKSIMAL 5 MB!')</script>";
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
			<h1 style="text-align: center ;"> Tambah Foto </h1>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Caption</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="keterangan">
			</div>
			<div class="mb-3">
				<label for="gambar" class="form-label">Upload Gambar</label>
				<input class="form-control" name="gambar" id="gambar" type="file" accept="image/png, image/jpeg">
				<small class="form-text text-muted">
					* Tipe File: jpg, jpeg Ukuran Maksimal: 5MB
				</small>
			</div>
			<button class="btn btn-utama" type="submit" name="upload" class="btn btn-primary">Upload</button>
			<!-- <a href="" class="btn btn-utama" style="margin-bottom: 30px;">Submit</a> -->
		</div>
	</form>
	<br>
	<?php
	include 'footer.php';
	?>
</body>