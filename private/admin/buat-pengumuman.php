<?php
include 'navbar.php';
include '../config.php';

$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = date("Y-m-d H:i:s");

  $query = "INSERT INTO `pengumuman`(`judul`,`isi`,`tanggal`,`user_id`) VALUES ('$judul', '$isi','$tanggal', '$id')";
  $result = mysqli_query($conn, $query);
}
?>

<body>
  <form method="post">
    <div class="container">
      <br></br>
      <h1 style="text-align: center ;"> Tulis Pengumuman </h1>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul Pengumuman</label>
        <textarea type="text" class="form-control" name="judul" id="exampleFormControlInput1"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi Pengumuman</label>
        <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>

      <div class="col-sm-0">
        <button class="btn btn-utama" type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
      </div>
      <br>
    </div>
  </form>
  <?php
  include 'footer.php';
  ?>
</body>