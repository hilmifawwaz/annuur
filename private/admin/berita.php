<?php
include 'navbar.php';
include '../config.php';

$query = "SELECT * FROM `berita` WHERE `status` LIKE 'DITERIMA' ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
?>

<!-- Berita -->
<div class="col-md-9 recent-posts" style="margin: auto;">
  <div class="section-title">
    <h2 style="margin-top: 30px ;">Berita Terbaru</h2>
  </div>
  <a href="tulisberita.php" class="btn btn-utama" style="margin-bottom: 30px;">Tulis Berita</a>
  <a href="pending-berita.php" class="btn btn-utama" style="margin-bottom: 30px;">Konfirmasi Berita</a>

  <div class="row">
    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $date = date_create($data['tanggal']);
      $newDate = date_format($date, "d-m-Y"); ?>

      <div class="col-md-6 mr-none">
        <article class="post" style="text-align:justify">
          <div class="post-image single mb-lg">
            <img class="img-thumbnail" name="gambar" src="/assets/img/berita/<?= $data['gambar']; ?>" style="height: 300px; width: 400px;" alt="">
          </div>
          <h4 style="margin-top: 15px;"><a><?= $data['judul']; ?></a></h4>
          <div class="post-meta pl-none">
            <span><i class="fa fa-calendar"></i> <?= $newDate; ?></span>
          </div>
          <span>
            <p style="line-height: 1.5em; max-height: 7.5em; overflow: hidden;">
              <?= $data['isi']; ?>
            </p>
          </span>
          <a href="page-berita.php?id=<?= $data['id'] ?>" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
          <a href="delete-berita.php?id=<?= $data['id'] ?>" class="btn btn-danger" style="margin-bottom: 30px;">
            <span><i class="bi bi-trash"></i></span>
            <span>Hapus</span>
          </a>
        </article>
      </div>
    <?php } ?>
  </div>
</div>

<?php
include 'footer.php';
?>