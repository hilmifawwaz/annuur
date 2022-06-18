<?php
include 'navbar.php';
include 'config.php';

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
                  <a href="assets/doc/<?= $data['file']; ?>"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
                </td>
              </tr>
            <?php } ?>
            <!-- <tr>
              <td>2</td>
              <td>Program Kerja Masjid Raudhatul Jannah GMA Tahun 2018</td>
              <td></td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Program%20%20Kerja%20Pengurus%20Mesjid%20RJ%20GMA%20%20%202018_16012018.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Contoh Form Laporan Inventaris Sederhana ( Simple Form Inventory )</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Form%20Daftar%20Inventaris%20mesjid%20RJ-GMA%20%20%26%20LABEL%20ASSET%20MRJ.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Contoh template Pelaporan Keuangan sederhana (Bank Rekonsiliasi sederhana dengan cash basis)</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/REKONSILIASI_BANK_-_Rek_Donatur_tetap_31_JANUARI_2021-web.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Template Bank Rekonsiliasi-Listing Transaction</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/REKONSILIASI_BANK_-_REK_INDUK_30_JUNI_2019.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Template Rencana Anggaran Belanja (RAB) Pembangunan Masjid Raudhatul Jannah</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/RAB_-_PROPOSAL_MASJID_RAUDHATUL_JANNAH.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Formulir Donatur Tetap_MRJ_Template</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Form_Permintaan_donatur-MRJ_updated_web.doc"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Trend Kotak Amal selama 1 tahun</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/w4_12_Trend_pemasukan_Masjid_kota_amal_iURAN_WARGA_MUSLIM_2019.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Laporan Jumatan</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Feb2020-week-1.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Format Pelaporan UPZ / Zakat ke Baznas</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/UPZ_BAZNAS_-_FORMAT_TERBARU_2020.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Kelengkapan dokumen Masjid untuk rencana permintaan dana hibah ke pemerintah kota atau propinsi</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Kelengkapan_Dokumen_untuk_permintaan_bantuan_dana_pemerintah-R3.docx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Formulir Penerimaan Zakat dari Muzakki (tanda terima)</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Formulir_penerimaan_zakat_UPZ-new_FINAL_web1.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Formulir Penyaluran zakat ke Mustahik - (tanda terima)</td>
              <td>
                <a href="http://raudhatuljannah-gma.com/assets/kcfinder/upload/files/Formulir_penyaluran_zakat_FINAL-web.xlsx"><button type="button" class="btn btn-warning btn-xs pull-middle"><i class="fa fa-download"></i></button></a>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>