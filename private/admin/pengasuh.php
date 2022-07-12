<?php
include 'navbar.php';
include '../config.php';

$query = "SELECT * FROM `pengajar`";
$result = mysqli_query($conn, $query);
?>

<section class="pengurus">
  <h1 style="margin-top: 50px;">DAFTAR PENGASUH TPQ AN-NUUR</h1>
  <!-- <a href="tambah-pengurus.php" class="btn btn-utama" style="margin-bottom: 30px;">Edit Pengasuh</a> -->
  <br></br>
  <div class="row">
    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <div class="pengurus-col">
        <h3><?= $data['nama']; ?></h3>
        <img src="../../assets/img/pengasuh/<?= $data['foto']; ?>" alt="" style="height: 200px; width: 200px; border-radius: 50%;">
        <!-- <p class="fs-4 mt-2"><?= $data['nama']; ?></p> -->
      </div>
    <?php } ?>
  </div>
</section>

<?php
include 'footer.php';
?>