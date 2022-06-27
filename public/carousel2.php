<?php
include 'navbar.php';
include '../private/config.php';

$query = "SELECT * FROM `banner` ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
?>
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">




<div class="container-fluid">
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <?php
        $i = 0;
        foreach ($result as $row) {
          $actives = '';
          if ($i == 0) {
            $actives = 'active';
          } ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php $i; ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
        <?php $i++;
        } ?>
      </div>
      <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($result as $row) {
          $actives = '';
          if ($i == 0) {
            $actives = 'active';
          }
        ?>
          <div class="carousel-item active">
            <img src="../assets/img/banner/<?= $row['gambar']; ?>">
          </div>
        <?php $i++;
        } ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>