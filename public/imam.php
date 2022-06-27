<?php
include 'navbar.php';
require_once '../private/config.php';

$query = "SELECT * FROM `jumatan`";
$result = mysqli_query($conn, $query);
?>

<div class="services-container">
  <div class="container" style="margin-right: 280px; margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
      <h2 style="text-align: center;">Jadwal Imam, Khotib, dan Muadzin</h2>
      <div class="col-sm-12 services-full-width-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft">
        <!-- <a href="input-imam.php" class="btn btn-utama" style="margin-bottom: 30px;">Input Jadwal Imam dan Khotib</a> -->
        <table class="table table-hover table-striped">
          <tbody style="text-align: center;">
            <tr>
              <th>Tanggal</th>
              <th>Imam</th>
              <th>Khotib</th>
              <!-- <th>Judul</th> -->
            </tr>
            <?php
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $date = date_create($data['tanggal']);
              $newDate = date_format($date, "d-m-Y");
              echo "<tr><td>" . $newDate . "</td>";
              echo "<td>" . $data['imam'] . "</td>";
              echo "<td>" . $data['khotib'] . "</td>";
              // echo "<td>" . $data['judul'] . "</td></tr>";
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