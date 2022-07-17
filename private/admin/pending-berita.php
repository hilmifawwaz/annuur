<?php
include 'navbar.php';
include '../config.php';

$query = "SELECT * FROM `berita` WHERE `status` LIKE 'PENDING' ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
?>

<body>
  <div class="container">
    <br></br>
    <section id="berita">
      <div class="container">
        <div class="section-title">
          <h2>Konfirmasi Berita</h2>
        </div>
        <div class="section-item">
          <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
            <div class="row">
              <div class="col-md-4">
                <img src="../../assets/img/berita/<?= $data['gambar']; ?>" alt="">
              </div>
              <div class="section-item-title">
                <p><?= $data['judul']; ?></p>
              </div>
              <div class="section-item-body" style="white-space: pre-line;">
                <p>Penulis : <?= $data['nama_pembuat']; ?></p>
                <p><?= $data['isi']; ?></p>
              </div>
              <a href="confirm-berita.php?id=<?= $data['id']; ?>&confirm=yes" class="btn btn-success" style="margin-bottom: 30px;" name="confirm">Konfirmasi</a>
              <a href="confirm-berita.php?id=<?= $data['id']; ?>&confirm=no" class="btn btn-danger" style="margin-bottom: 30px;">Hapus</a>
            </div>
          <?php } ?>
        </div>
    </section>
  </div>
  <br></br>
  <?php
  include 'footer.php';
  ?>