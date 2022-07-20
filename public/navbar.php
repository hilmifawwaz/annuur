<?php
ob_start();
require_once('../private/config.php');
$query = "SELECT * FROM `running_text` WHERE `id` LIKE '1'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

$uang = "SELECT (SUM(masuk)-SUM(keluar)) as saldo FROM `keuangan_masjid`";
$result2 = mysqli_query($conn, $uang);
$data2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Theme CSS -->
  <link rel="stylesheet" href="/template/css/theme.css" defer>
  <link rel="stylesheet" href="/template/css/theme-elements.css" defer>
  <link rel="stylesheet" href="/template/css/theme-blog.css" defer>
  <link rel="stylesheet" href="/template/css/theme-shop.css" defer>
  <!-- TICKER -->
  <link rel="stylesheet" href="/template/css/breaking-news-ticker.min.css" defer>
  <link rel="stylesheet" href="/template/css/demo-page-styles.css" defer>
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="/template/css/custom.css" defer>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- icon -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' type='text/css' />
  <!-- bootstrap -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <!-- carousel -->
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <!-- font awesome / icon -->
  <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
  <!-- style css custom -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <!-- carousel -->
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <!-- font awesome / icon -->
  <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
  <!-- style css custom -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="shortcut icon" href="../img/favicon.png">
  <title>Website Masjid An-Nuur</title>
</head>
<!-- Ticker -->
<div class="bn-breaking-news header-top-ticker" id="newsTicker1">
  <div class="bn-label">
    <div class="title-ticker-icon">
      <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
        <li class="time">
          <div id="clock">
            <script type="text/javascript">
              function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                  a_p = "AM";
                } else {
                  a_p = "PM";
                }
                if (curr_hour == 0) {
                  curr_hour = 12;
                }
                if (curr_hour > 12) {
                  curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById("clock").innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
              }

              function checkTime(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
              setInterval(showTime, 500);
            </script>
          </div>
        </li>
        <li class="social-icons-facebook"><span class="text-light font-weight-normal" style="margin-left:5px;color:#f8ffc1 !important"><i class="fa fa-calendar"></i> <span style="color:#f8ffc1" id="hijri-id">

              <!-- Menampilkan Hari, Bulan dan Tahun -->
              <td class="date me-auto">
                <script type="text/javascript">
                  var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                  var myDays = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum&#39;at", "Sabtu"];
                  var date = new Date();
                  var day = date.getDate();
                  var month = date.getMonth();
                  var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                  var yy = date.getYear();
                  var year = yy < 1000 ? yy + 1900 : yy;
                  document.write(thisDay + ", " + day + " " + months[month] + " " + year);
                </script>
              </td>
        </li>
      </ul>
    </div>
  </div>
  <div class="bn-news">
    <a>
      <marquee>
        <h5 size="3" color="white">
          <p>
            <?= $data['text']; ?>
          </p>
        </h5>
      </marquee>
    </a>
  </div>
</div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="/assets/img/logomasjid.png" alt="" width="200" height="60" margin="10px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" a ria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="/public/home.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Berita </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a href="berita.php">Berita Terkini</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="pengumuman.php">Pengumuman</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Jadwal Jumat </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a href="imam.php">Jadwal Khotib</a></li>
            <li><a href="khutbah.php">File Khotbah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pendaftaran.php">Pendaftaran TPQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tentang </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a href="profil.php">Profil Masjid</a></li>
            <li><a href="pengurus.php">Susunan Pengurus</a></li>
            <li><a href="arsip.php">Arsip Dokumen</a></li>
            <li><a href="kontak.php">Kontak Kami</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="tpq.php">TPQ</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->