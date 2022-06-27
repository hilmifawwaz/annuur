<?php
include 'navbar.php';
include '../config.php';

if (isset($_POST['ubah'])) {
	$text = ucfirst($_POST['runningtext']);

	$query = "UPDATE `running_text` SET `text`='$text' WHERE `id` LIKE 1";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

	header("location: edit-running-text.php");
}
?>
<!-- edit running text -->

<body>
	<div class="container">
		<h1 style="text-align: center; margin-top: 1rem;"> Edit running text </h1>
		<form method="post">
			<div class="mb-3">
				<label for="runningtext" class="form-label">Isi Running Text</label>
				<textarea class="form-control" name="runningtext" id="runningtext" rows="5" required></textarea>
			</div><br>
			<button type="submit" name="ubah" class="btn btn-utama" style="margin-bottom: 30px; float: right;">Submit</button>
		</form>
	</div>
</body>