<?php
include 'navbar.php';
require '../config.php';

$query = "SELECT * FROM `pengumuman` ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
?>


<section class="pengumuman">
  <div class="container">
    <div class="section-title">
      <h2 style="margin-top: 30px ;">Pengumuman</h2>
    </div>
    <a href="buat-pengumuman.php" class="btn btn-utama" style="margin-bottom: 30px;">Buat Pengumuman</a>
    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $newDate = date_create($data['tanggal']);
      $changeDate = date_format($newDate, "d-m-Y"); ?>
      <div class="section-item">
        <div class="row">
          <div class="section-item-title">
            <h3 style="font-size: large;"><?= $data['judul']; ?></h3>
            <div class="post-meta pl-none">
              <span><i class="fa fa-calendar"></i> <?= $changeDate; ?></span>
            </div>
          </div>
          <div class="section-item-body" style="white-space: pre-line;">
            <p><?= $data['isi']; ?> </p>
            <a href="delete-pengumuman.php?id=<?= $data['id'] ?>" class="btn btn-danger" style="margin-bottom: 30px;">
              <span><i class="bi bi-trash"></i></span>
              <span>Hapus</span>
            </a>
          <?php } ?>
          </div>
        </div>
      </div>
      <br><br>


  </div>
</section>

<?php
include 'footer.php';
?>