<?php
include 'navbar.php';
include '../config.php';

if (isset($_POST['upload'])) {
  $judul = $_POST['judul'];
  $khotib = $_POST['khotib'];

  //upload gambar
  $loc = "assets/doc/";
  $ekstensi = ['application/pdf'];
  $nama_file = $_FILES['file']['name'];
  $ukuran = $_FILES['file']['size'];
  $ekstensiFile = $_FILES['file']['type'];
  $file_tmp = $_FILES['file']['tmp_name'];

  if (in_array($ekstensiFile, $ekstensi)) {
    if ($ukuran < 1242880) {
      $upload = move_uploaded_file($file_tmp, $loc . $nama_file);

      if ($upload) {
        $query = "INSERT INTO `file_khotbah`(`judul`,`khotib`,`file`)
                  VALUES ('$judul','$khotib', '$nama_file')";
        $result = mysqli_query($conn, $query);
      }
    } else {
      // else for ukuran
      echo "<script>alert('UKURAN FILE MAKSIMAL 1 MB!')</script>";
      return ("location: file-khotbah.php");
    }
  } else {
    // else for ekstensiFile
    echo "<script>alert('FILE ANDA TIDAK SESUAI!')</script>";
    return ("location: file-khotbah.php");
  }
}
?>

<body>
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <br></br>
      <h1 style="text-align: center ;"> Upload File</h1>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul Khotbah</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Khotib</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="khotib">
      </div>
      <div class="mb-3">
        <label for="file" class="form-label">Upload File</label>
        <input class="form-control" name="file" id="file" type="file" accept="application/pdf">
        <small class="form-text text-muted">
          * Tipe File: pdf Ukuran Maksimal: 1MB
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