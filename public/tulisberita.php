<?php
include 'navbar.php';
include '../private/config.php';

if (isset($_POST['upload'])) {
	$judul = $_POST['judul'];
	$nama_pembuat = $_POST['nama'];
	$isi = $_POST['isi'];
	$tanggal = date("Y-m-d H:i:s");
	$pending = "PENDING";

	//upload gambar
	$loc = "../assets/img/berita/";
	$ekstensi = ['image/jpeg', 'image/png'];
	$nama_file = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ekstensiFile = $_FILES['gambar']['type'];
	$file_tmp = $_FILES['gambar']['tmp_name'];

	if (in_array($ekstensiFile, $ekstensi)) {
		if ($ukuran < 2097152) {
			$upload = move_uploaded_file($file_tmp, $loc . $nama_file);

			if ($upload) {
				$query = "INSERT INTO `berita`(`judul`,`nama_pembuat`,`isi`,`gambar`,`tanggal`,`status`,`user_id`)
                  VALUES ('$judul','$nama_pembuat','$isi','$nama_file','$tanggal','$pending','1')";
				$result = mysqli_query($conn, $query);
			}
		} else {
			// else for ukuran
			echo "<script>alert('UKURAN GAMBAR MAKSIMAL 5 MB!')</script>";
			header("location: tulisberita.php");
			// return "tulisberita.php";
		}
	} else {
		// else for ekstensiFile
		echo "<script>alert('FILE ANDA TIDAK SESUAI!')</script>";
		// return "tulisberita.php";
		header("location: tulisberita.php");
	}
}
?>

<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<br></br>
			<h1 style="text-align: center ;"> Tulis Berita </h1>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
				<input type="text" name="judul" class="form-control" id="exampleFormControlInput1" required>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
				<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
				<textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="10" required></textarea>
			</div>
			<div class="mb-3">
				<label for="gambar" class="form-label">Upload Gambar</label>
				<input class="form-control" name="gambar" id="gambar" type="file" accept="image/png, image/jpeg">
				<small class="form-text text-muted">
					* Tipe File: jpg, jpeg, png Ukuran Maksimal: 2MB
				</small>
			</div>
			<button class="btn btn-utama" type="submit" name="upload" class="btn btn-primary">Upload</button>
		</div>
	</form>
	<br>
	<?php
	include 'footer.php';
	?>
</body>