<?php
include 'navbar.php';
include '../config.php';

$id = $_GET['id'];
$query = "SELECT * FROM `berita` WHERE `id` LIKE '$id'";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM `berita` WHERE `status` LIKE 'DITERIMA' ORDER BY RAND() LIMIT 3";
$result2 = mysqli_query($conn, $query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $date = date_create($data['tanggal']);
    $newDate = date_format($date, "d/m/Y"); ?>
    <article class="post px-5 1h-sm" style="text-align:justify; width: 1100px; ">
      <h3 class="fs-1 fw-bold" style="margin-top: 15px; font-size: 45px;"><a><?= $data['judul']; ?></a></h3>
      <div class="fs-6">Penulis : <?= $data['nama_pembuat']; ?> - <?= $newDate; ?></div>
      <div class="post-image single mb-lg">
        <img class="img-thumbnail" name="gambar" src="/assets/img/berita/<?= $data['gambar']; ?>" style="height: 450px; width: 600px;" alt="">
      </div>
      <span>
        <p class="text-dark mt-3" style="line-height: 1.5em; max-height: 7.5em; overflow: hidden;">
          <?= $data['isi']; ?>
        </p>
      </span>
    </article>

    <!-- ANOTHER POST -->
    <div class="px-5 1h-sm row" style="text-align:justify; width: 1100px; ">
      <h3 class="text-center bg-warning text-light" style="text-align: justify;">BERITA LAINNYA</h3>
      <?php while ($data2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) { ?>
        <div class="card mx-2" style="width: 18rem;">
          <img src="../../assets/img/berita/<?= $data2['gambar']; ?>" class="card-img-top mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $data2['judul']; ?></h5>
            <a href="page-berita.php?<?= $data2['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      <?php } ?>
    </div>
    <br>
  <?php }
  include 'footer.php';
  ?>
</body>

</html>