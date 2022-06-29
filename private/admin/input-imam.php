<?php
require '../../vendor/autoload.php';

// include 'navbar.php';
// include '../config.php';

if (isset($_POST['upload'])) {
  $err = "";
  $ekstensi = "";
  $success = "";

  $file_name = $_FILES['file']['name'];
  $file_data = $_FILES['file']['tmp_name'];

  if (empty($file_name)) {
    $err .= "<li>Pilih File Terlebih Dahulu</li>";
  } else {
    $ekstensi = pathinfo($file_name)['extension'];
  }

  $ekstensi_diperbolehkan = array("xls", "xlsx");
  if (!in_array($ekstensi, $ekstensi_diperbolehkan)) {
    $err .= "<li>File Tidak Sesuai</li>";
  }

  if (empty($err)) {
    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
    $spreadsheet = $reader->load($file_data);
    $sheetData = $spreadsheet->getActiveSheet()->toArray();

    $jumlah_data = 0;
    for ($i = 1; $i < count($sheetData); $i++) {
      $imam = $sheetData[$i]['1'];
      $khotib = $sheetData[$i]['2'];
      $tanggal = $sheetData[$i]['3'];

      // ubah format tanggal
      $date_explode = explode("/", $tanggal);
      $tanggal = $date_explode['2'] . "-" . $date_explode['0'] . "-" . $date_explode['1'];

      // query
      $query = "INSERT INTO `jumatan` (`imam`,`khotib`,`tanggal`) VALUES ('$imam','$khotib','$tanggal')";
      $result = mysqli_query($conn, $query);

      $jumlah_data++;

      if ($jumlah_data > 0) {
        $succes = "$jumlah_data Data Berhasil Dimasukkan";
      }
    }
  }

  if ($err) {
?>
    <div class="alert alert-danger">
      <ul><?= $err; ?></ul>
    </div>
  <?php
  }
  if ($succes) {
  ?>
    <div class="alert alert-primary">
      <?= $success; ?>
    </div>
<?php
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="file" class="form-label">Upload File</label>
        <input class="form-control" name="file" id="file" type="file" accept="application/pdf">
        <small class="form-text text-muted">
          * Tipe File: xlxs
        </small>
      </div>
      <div class="text-end">
        <button class="text-end btn btn-utama" type="submit" name="upload" class="btn btn-primary">Upload</button>
      </div>
    </form>
  </div>
</body>

</html>