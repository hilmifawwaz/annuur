  <?php
  include 'navbar.php';
  include 'config.php';

  $banner = "SELECT * FROM `banner`";
  $berita = "SELECT * FROM `berita` WHERE `status` LIKE 'DITERIMA' ORDER BY `id` DESC";
  $galeri = "SELECT * FROM `galeri`";

  $bannerr = mysqli_query($conn, $banner);
  $beritaa = mysqli_query($conn, $berita);
  $galerii = mysqli_query($conn, $galeri);
  ?>

  <body>
    <!-- carousel -->

    <!-- Awal carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <?php while ($data_banner = mysqli_fetch_array($bannerr, MYSQLI_ASSOC)) { ?>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/banner/<?= $data_banner['gambar']; ?>" style="height: 700px;" alt="First slide">
          </div>
        </div>
      <?php } ?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <a href="edit-banner.php" class="btn btn-utama">Edit Banner</a>
    <!-- Akhir carousel -->

    <!-- Profil -->
    <section id="sambutan">
      <div class="container">
        <h2>Profil Masjid An-Nuur Minomartani</h2>
        <div class="row">
          <div class="col-md-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8CBD9KVNa8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h3>Video Profil Masjid An-Nuur Minomartani</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!
            <br></br>
            <a href="profil.php" class="btn btn-utama">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir profil -->

    <section id="berita">
      <div class="container">
        <div class="section-title">
          <h2>Berita Terbaru</h2>
        </div>
        <div class="section-item">
          <?php while ($data_berita = mysqli_fetch_array($beritaa, MYSQLI_ASSOC)) {
            $date = date_create($data_berita['tanggal']);
            $newDate = date_format($date, "d-m-Y"); ?>
            <div class="row">
              <div class="col-md-4">
                <img src="assets/img/berita/<?= $data_berita['gambar']; ?>" alt="" style="height: 350px; width: 350px;">
              </div>
              <div class="col-md">
                <div class="section-item-title">
                  <h3><a href=""><?= $data_berita['judul']; ?></a></h3>
                  <div class="section-item-meta">
                    <span><i class="far fa-calendar-alt"></i><?php $newDate ?></span>
                  </div>
                </div>
                <span>
                  <p style="line-height: 1.5em; max-height: 7.5em; overflow: hidden;">
                    <?= $data_berita['isi']; ?>
                  </p>
                </span>
              </div>
            </div>
          <?php } ?>
        </div>
        <br><br>
        <br><br><br>
      </div>
    </section>

    <!-- TPQ -->
    <section class="pendidikan">
      <h1>Taman Pendidikan Al-Qur'an</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, assumenda?</p>

      <div class="row">
        <div class="pendidikan-col">
          <h3>VISI</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
        </div>
        <div class="pendidikan-col">
          <h3>MISI</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
        </div>
        <div class="pendidikan-col">
          <a href="pengurus.php">
            <h3>PENGAJAR</h3>
          </a>
          <a href="pengurus.php">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolores doloribus nisi ea aut, tenetur id ex fugit quidem nesciunt minima! Quas ut obcaecati tempore!</p>
          </a>
        </div>
      </div>
      </div>
    </section>

    <!-- Galeri -->
    <div class="container">
      <section class="galeri">
        <h1>Galeri Foto</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis perspiciatis molestiae facilis autem pariatur! Quidem, minima dolorum? Mollitia esse at corporis alias neque corrupti nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</p>
        <?php while ($data_galeri = mysqli_fetch_array($galerii, MYSQLI_ASSOC)) { ?>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="img_fjords.jpg">
                <img src="/assets/img/galeri/<?= $data_galeri['gambar']; ?>" width="600" height="400">
              </a>
              <div class="desc"><?= $data_galeri['keterangan']; ?></div>
            </div>
          </div>
        <?php } ?>
        <div class="clearfix"></div>
      </section>
    </div>

    <br><br><br><br><br><br>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

  <?php
  include 'footer.php';
  ?>