<?php
include 'navbar.php';
require_once '../config.php';

$query = "SELECT * FROM `jumatan`";
$result = mysqli_query($conn, $query);
?>

<div class="services-container">
  <div class="container" style="margin-right: 280px; margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
      <h2 style="text-align: center;">Jadwal Khotib Jum'at</h2>
      <div class="col-sm-12 services-full-width-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft">
        <!-- <?php //include 'input-imam.php'; 
              ?> -->
        <div class="container">
          <form method="post" action="input-imam.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="file" class="form-label">Upload File</label>
              <input class="form-control" name="file" id="file" type="file" accept="">
              <small class="form-text text-muted">
                * Tipe File: xlxs
              </small>
            </div>
            <div class="text-end">
              <button class="text-end btn btn-utama" type="submit" name="upload" class="btn btn-primary">Upload</button>
            </div>
          </form>
        </div>
        <table class="table table-hover table-striped mt-3">
          <tbody style="text-align: center;">
            <tr>
              <th>Tanggal</th>
              <th>Pasaran</th>
              <th>Khotib</th>
            </tr>
            <?php
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $date = date_create($data['tanggal']);
              $newDate = date_format($date, "d-m-Y");
              echo "<tr><td>" . $newDate . "</td>";
              echo "<td>" . $data['pasaran'] . "</td>";
              echo "<td>" . $data['khotib'] . "</td>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>