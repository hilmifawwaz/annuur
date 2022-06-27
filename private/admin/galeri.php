<?php
include 'navbar.php';
include '../config.php';

$query = "SELECT * FROM `galeri` ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
?>

<!-- Galeri -->
</section>
<div class="container">
  <section class="galeri">
    <h1 style="margin-top: 50px; margin-bottom: 20px;">Galeri Foto</h1>
    <a href="tambah-foto.php" class="btn btn-utama" style="margin-bottom: 30px;">Tambah Foto</a>
    <br></br>
    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank">
            <img class='gambar' name='gambar' src="../../assets/img/galeri/<?= $data['gambar']; ?>" width="600" height="400">
          </a>
          <div class="desc"><?= $data['keterangan']; ?></div>
        </div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
    <br></br>
  </section>
</div>
<?php
include 'footer.php';
?>