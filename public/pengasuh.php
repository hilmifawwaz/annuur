<?php
include 'navbar.php';
include '../private/config.php';

$query = "SELECT * FROM `pengajar`";
$result = mysqli_query($conn, $query);
?>

<!-- TPQ -->
<section class="pengurus">
  <h1 style="margin-top: 50px;">PENGASUH TPQ AN-NUUR</h1>
  <br></br>
  <div class="row">
    <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <div class="pengurus-col">
        <img src="/assets/img/pengurus/<?= $data['foto']; ?>" alt="" style="height: 200px; width: 200px; border-radius: 50%;">
        <h4><?= $data['nama']; ?></h4>
      </div>
    <?php } ?>
  </div>
</section>

<?php
include 'footer.php';
?>