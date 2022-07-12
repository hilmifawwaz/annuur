<?php
include 'navbar.php';
include '../config.php';
$id = $_SESSION['id'];

if (isset($_POST['upload'])) {
  $caption = $_POST['caption'];

  //upload gambar
  $loc = "../../assets/img/banner/";
  $ekstensi = ['image/jpeg', 'image/png'];
  $nama_file = $_FILES['gambar']['name'];
  $ukuran = $_FILES['gambar']['size'];
  $ekstensiFile = $_FILES['gambar']['type'];
  $file_tmp = $_FILES['gambar']['tmp_name'];

  if (in_array($ekstensiFile, $ekstensi)) {
    if ($ukuran < 2097152) {
      $upload = move_uploaded_file($file_tmp, $loc . $nama_file);

      if ($upload) {
        $query = "INSERT INTO `banner`(`gambar`,`caption`,`user_id`) VALUES ('$nama_file', '$caption', '$id')";
        $result = mysqli_query($conn, $query);
      }
    } else {
      // else for ukuran
      echo "<script>alert('UKURAN GAMBAR MAKSIMAL 2 MB!')</script>";
      return "edit-banner.php";
    }
  } else {
    // else for ekstensiFile
    echo "<script>alert('FILE ANDA TIDAK SESUAI!')</script>";
    return "edit-banner.php";
  }
}
?>

<body>
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <br></br>
      <h1 style="text-align: center ;"> Edit Banner </h1>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Caption</label>
        <textarea class="form-control" name="caption" id="exampleFormControlTextarea1" rows="10" required></textarea>
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

  <?php
  $query1 = "SELECT * FROM `banner`";
  $result1 = mysqli_query($conn, $query1);
  ?>

  <div class="container section-item mt-4">
    <div class="row">
      <?php while ($data = mysqli_fetch_array($result1, MYSQLI_ASSOC)) { ?>
        <div class="col-md-4">
          <img src="../../assets/img/banner/<?= $data['gambar'] ?>" alt="">
          <div class="section-item-body">
            <p><?= $data['caption']; ?></p>
          </div>
          <a href="delete-banner.php?id=<?= $data['id'] ?>" class="btn btn-danger" style="margin-bottom: 30px;">Hapus</a>
        </div>
      <?php } ?>
    </div>
  </div>
</body><br></br>

<?php
include 'footer.php';
?>