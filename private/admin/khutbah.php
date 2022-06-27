<?php
include 'navbar.php';
include '../config.php';

$query = "SELECT * FROM `file_khotbah` ORDER BY `id` DESC";
$result = mysqli_query($conn, $query);
$no = 0;
?>

<div class="services-container" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="container">
    <div class="row">
      <h2 style="text-align: center;">Kumpulan Khutbah Jumat</h2>
      <div class="col-sm-12 services-full-width-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft">
        <a href="file-khotbah.php" class="btn btn-utama" style="margin-bottom: 30px;">Upload File</a>
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>No</th>
              <th>Judul Khutbah</th>
              <th>Khotib</th>
              <th>Download</th>
            </tr>
            <?php while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $no++; ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $data['judul']; ?></td>
                <td><?= $data['khotib']; ?></td>
                <td>
                  <a href="../../assets/doc/<?= $data['file']; ?>"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>