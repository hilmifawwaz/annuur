<?php
require_once('../private/config.php');
include 'navbar.php';
// require_once('../../../akses.php');

// form tambah data
if (isset($_POST['tambah'])) {
  $namaLengkap = addslashes($_POST['namaLengkap']);
  $panggilan = addslashes(ucwords($_POST['panggilan']));
  $tempatLahir = addslashes(ucwords($_POST['tempat']));
  $tglLahir = $_POST['tanggal'];
  $tglLahir = formatTanggal($tglLahir);
  $jenjangSekolah = $_POST['jenjangSekolah'];
  $kelas = $_POST['kelas'];
  $namaBpk = addslashes($_POST['namaBpk']);
  $profesiBpk = addslashes($_POST['profesiBpk']);
  $namaIbu = addslashes($_POST['namaIbu']);
  $profesiIbu = addslashes($_POST['profesiIbu']);
  $telpWali = $_POST['telpWali'];
  $alamat = addslashes($_POST['alamat']);
  $infakBulanan = $_POST['infak'];

  $query = "INSERT INTO santri(`nama_lengkap`, `panggilan`, `tempat_lahir`, `tgl_lahir`, `jenjang_sekolah`, `kelas`, 
            `nama_bapak`, `pekerjaan_bapak`, `nama_ibu`, `pekerjaan_ibu`, `no_telp_ortu`, `alamat_ortu`, `infak_bulanan`)
            VALUES ('$namaLengkap', '$panggilan', '$tempatLahir', '$tglLahir', '$jenjangSekolah', '$kelas',
            '$namaBpk', '$profesiBpk', '$namaIbu', '$profesiIbu', '$telpWali', '$alamat', '$infakBulanan')";
  $result = mysqli_query($conn, $query);

  $tanggal = date("Y-m-d");
  $newQuery = "INSERT INTO `penilaian`(`santri_induk`, `jenjang_id`, `tanggal`, `keterangan`, `pengajar_id`) VALUES ('$nis', '0', '$tanggal', 'Santri Baru', '3')";
  $newResult = mysqli_query($conn, $newQuery);

  header("Location: form2.php");
}

// function for date formatting
function formatTanggal($date)
{
  return date('Y-m-d', strtotime($date));
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>TPQ - Masjid Annuur</title>
  <!-- style css -->
  <link rel="stylesheet" href="/user/admin/layout/style.css" />
  <link rel="shortcut icon" href="/assets/image/logo-annur-bulat.png">
</head>

<body>

  <!-- konten -->
  <main>
    <div class="container-fluid content transition">
      <h3 class="text-center mt-3 mb-3">Pendaftaran Santri Baru</h3>

      <!-- card content -->
      <div class="card border shadow">
        <div class="card-body m-3">

          <!-- form input -->
          <form method="post">

            <!-- Nama -->
            <div class="form-group row">
              <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" name="namaLengkap" class="form-control" id="namaLengkap" required>
              </div>
            </div><br>

            <!-- Nama Panggilan -->
            <div class="form-group row">
              <label for="panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
              <div class="col-sm-10">
                <input type="text" name="panggilan" class="form-control" id="panggilan" required>
              </div>
            </div><br>

            <!-- Tempat, Tanggal Lahir -->
            <div class="form-group row">
              <label for="lahir" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
              <div class="col-sm-10">
                <div class="input-group has-validation">
                  <input type="text" name="tempat" class="form-control" id="tempat" required>
                  <span class="input-group-text" id="inputGroupPrepend3">,</span>
                  <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                </div>
              </div>
            </div><br>

            <!-- Jenjang Sekolah -->
            <div class="form-group row">
              <label for="jenjangSekolah" class="col-sm-2 col-form-label">Jenjang Sekolah</label>
              <div class="col-sm-10">
                <select class="form-select" name="jenjangSekolah" id="jenjangSekolah" required>
                  <option selected disabled>Pilih Jenjang Sekolah</option>
                  <option value="PAUD/PRA TK">PAUD/PRA TK</option>
                  <option value="TK/RA">TK/RA</option>
                  <option value="SD/MI">SD/MI</option>
                  <option value="SMP/MTS">SMP/MTS</option>
                  <option value="SMA/MA">SMA/MA</option>
                </select>
              </div>
            </div><br>

            <!-- Kelas -->
            <div class="form-group row">
              <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <input type="number" name="kelas" class="form-control" id="kelas" required>
                <!-- <small class="form-text text-muted">
                  * Untuk jenjang PAUD/PRA TK dan TK/RA isi dengan angka 0
                </small> -->
              </div>
            </div><br>

            <!-- Nama Bapak -->
            <div class="form-group row">
              <label for="namaWali" class="col-sm-2 col-form-label">Nama Bapak</label>
              <div class="col-sm-10">
                <input type="text" name="namaBpk" class="form-control" id="namaBpk" required>
              </div>
            </div><br>

            <!-- Pekerjaan Bapak -->
            <div class="form-group row">
              <label for="pekerjaanWali" class="col-sm-2 col-form-label">Profesi Bapak</label>
              <div class="col-sm-10">
                <input type="text" name="profesiBpk" class="form-control" id="pekerjaanBpk" required>
              </div>
            </div><br>

            <!-- Nama Ibu -->
            <div class="form-group row">
              <label for="namaWali" class="col-sm-2 col-form-label">Nama Ibu</label>
              <div class="col-sm-10">
                <input type="text" name="namaIbu" class="form-control" id="namaIbu" required>
              </div>
            </div><br>

            <!-- Pekerjaan Ibu -->
            <div class="form-group row">
              <label for="namaWali" class="col-sm-2 col-form-label">Profesi Ibu</label>
              <div class="col-sm-10">
                <input type="text" name="profesiIbu" class="form-control" id="namaIbu" required>
              </div>
            </div><br>

            <!-- Telp Wali -->
            <div class="form-group row">
              <label for="telpWali" class="col-sm-2 col-form-label">No. Handphone / WA</label>
              <div class="col-sm-10">
                <input type="number" name="telpWali" class="form-control" id="telpWali" required>
              </div>
            </div><br>

            <!-- Alamat -->
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" class="form-control" id="alamat" maxlength="255" rows="2" required></textarea>
              </div>
            </div><br>

            <!-- Infak Bulanan -->
            <div class="form-group row">
              <label for="infak" class="col-sm-2 col-form-label">Infak Bulanan</label>
              <div class="col-sm-10">
                <select class="form-select" name="infak" id="infak" required>
                  <option selected disabled>Pilih Infak Bulanan</option>
                  <option value="50000">Rp 50.000</option>
                  <option value="70000">Rp 70.000</option>
                </select>
              </div>
            </div><br>

            <!-- Kesanggupan -->
            <div class="form-check row">
              <div class="col-sm-10 mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                  Dengan ini kami menyetujui segala peraturan dan tata tertib yang berlaku di TPQ An-Nuur
                </label>
              </div>
            </div>
            <!-- <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                Dengan ini kami menyetujui segala peraturan yang berlaku di TPQ An-Nuur
              </label>
            </div> -->

            <!-- Button -->
            <div class="text-end">
              <label for="button" class="col-sm-2 col-form-label"></label>
              <div class="">
                <div class="">
                  <div class="">
                    <div class="">
                      <button class="btn btn-utama" type="submit" name="tambah" id="submit" class="btn btn-primary">Daftar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>