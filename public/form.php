<?php
require 'navbar.php';
require '../private/config.php';

if (isset($_POST['daftar'])) {
  $nama = $_POST['nama_lengkap'];
  $panggilan = $_POST['panggilan'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $jenjang = $_POST['jenjang'];

  $no_santri = $_POST['no_santri'];
  $nama_ortu = $_POST['nama_ortu'];
  $pekerjaan = $_POST['pekerjaan_ortu'];
  $no_ortu = $_POST['no_ortu'];
  $alamat = $_POST['alamat'];
  $infak = $_POST['infak'];
  $kesanggupan = $_POST['kesanggupan'];

  $query = "INSERT INTO `pendaftaran`(`nama_lengkap`,`panggilan`,`tempat_lahir`,`tgl_lahir`,`jenjang_sekolah`,
            `no_telp_santri`,`nama_ortu`,`pekerjaan_ortu`,`no_telp_ortu`,`alamat_ortu`,`infak_bulanan`,`kesanggupan`)
            VALUES ('$nama','$panggilan','$tempat_lahir','$tgl_lahir','$jenjang','$no_santri','$nama_ortu','$pekerjaan','$no_ortu','$alamat','$infak','$kesanggupan')";
  $result = mysqli_query($conn, $query);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pendaftaran Santri Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Santri Baru</h1>
    <form id="form" method="post">
      <!-- data diri !!! -->
      <div>
        <div class="alert alert-primary">
          <strong>Data Diri</strong>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <div class="form-group">
              <label>Nama Lengkap:</label>
              <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap" required>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Nama Panggilan:</label>
              <input type="text" name="panggilan" class="form-control" placeholder="Masukan Nama Panggilan" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tempat Lahir:</label>
              <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Tanggal Lahir:</label>
              <input type="date" name="tgl_lahir" class="form-control" required>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Jenjang Sekolah:</label>
              <select class="form-control" name="jenjang" required>
                <option selected disabled>Pilih</option>
                <option value="PAUD/PRA TK">PAUD / Pra TK</option>
                <option value="TK/RA">TK / RA</option>
                <option value="SD/MI">SD / MI</option>
                <option value="SMP/MTS">SMP / MTs</option>
                <option value="SMA/MA">SMA / MA</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama Orang Tua:</label>
              <input type="text" name="nama_ortu" class="form-control" placeholder="Masukan Nama Orang Tua" required>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Pekerjaan Orang Tua:</label>
              <input type="text" name="pekerjaan_ortu" class="form-control" placeholder="Masukan Pekerjaan Orang Tua" required>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label>Nomor Handphone:</label>
              <input type="text" name="no_santri" class="form-control" placeholder="Masukan Nomor Handphone" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nomor Handphone Orang Tua (WA):</label>
              <input type="text" name="no_ortu" class="form-control" placeholder="Masukan Nomor Handphone" required>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Alamat Orang Tua:</label>
              <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
            </div>
          </div>
        </div>
      </div>

      <!-- kesanggupan !!! -->
      <div>
        <div class="alert alert-primary">
          <strong>Kesanggupan</strong>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <label>Kesanggupan Infak Bulanan : </label>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="infak" id="btnradio1" autocomplete="off" value="Rp 50.000" required>
              <label class="btn btn-outline-primary" for="btnradio1">Rp. 50.000</label>

              <input type="radio" class="btn-check" name="infak" id="btnradio2" autocomplete="off" value="Rp 70.000" required>
              <label class="btn btn-outline-primary" for="btnradio2">Rp. 70.000</label>
            </div>
          </div>
          <!-- <div class="col-sm-5">
            <div class="form-group">
              <label>Apakah Anda sanggup mentaati tata tertib TPQ An-Nuur? </label>
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="kesanggupan" id="btnradio3" autocomplete="off" value="YA" required>
                <label class="btn btn-outline-primary" for="btnradio3">Ya</label>

                <input type="radio" class="btn-check" name="kesanggupan" id="btnradio4" autocomplete="off" value="TIDAK" required>
                <label class="btn btn-outline-primary" for="btnradio4">Tidak</label>
              </div>
            </div>
          </div> -->
        </div>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <button class="btn btn-utama" type="submit" name="daftar" id="submit" class="btn btn-primary">Daftar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>