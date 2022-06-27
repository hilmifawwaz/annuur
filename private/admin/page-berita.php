<?php
include 'navbar.php';
include '../config.php';

$id = $_GET['id'];
$query = "SELECT * FROM `berita` WHERE `id` LIKE '$id'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $date = date_create($data['tanggal']);
    $newDate = date_format($date, "d/m/Y"); ?>

    <article class="post px-5 1h-sm" style="text-align:justify; width: 1200px; ">
      <h3 class="fw-bold fs-1" style="margin-top: 15px; font-size: 45px;"><a><?= $data['judul']; ?></a></h3>
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
  <?php } ?>
</body>

</html>