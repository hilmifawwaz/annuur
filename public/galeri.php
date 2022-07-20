<?php
include 'navbar.php';
include '../private/config.php';

$query = "SELECT * FROM `galeri` ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
$count = 0;
?>

<!-- Galeri -->
<div class="container">
  <section class="galeri">
    <h1 style="margin-top: 50px; margin-bottom: 20px;">Galeri Foto</h1>
    <br></br>

    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <div class="responsive">
        <div class="gallery mb-2">
          <a target="_blank">
            <img class='gambar' name='gambar' src="../../assets/img/galeri/<?= $data['gambar']; ?>" width="600" height="400">
          </a>
          <div class="desc"><?= $data['keterangan']; ?></div>
        </div>
      </div><?php
            if ($count == 4) {
              echo '<div class="clearfix"></div>';
              $count = 1;
            } else {
              $count++;
            }
          } ?>
    <div class="clearfix"></div>

    <br></br>
</div>
<?php
include 'footer.php';
?>