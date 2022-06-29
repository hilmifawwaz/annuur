  <?php
  include 'navbar.php';
  include '../config.php';

  $queryBanner = "SELECT * FROM `banner`";
  $queryBerita = "SELECT * FROM `berita` WHERE `status` LIKE 'DITERIMA' ORDER BY `id` DESC";
  $queryGaleri = "SELECT * FROM `galeri`";

  $resultBanner = mysqli_query($conn, $queryBanner);
  $resultBerita = mysqli_query($conn, $queryBerita);
  $resultGaleri = mysqli_query($conn, $queryGaleri);
  ?>

  <body>
    <!-- Awal carousel -->
    <div class="container-fluid">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <?php
            $i = 0;
            foreach ($resultBanner as $row) {
              $active = '';
              if ($i == 0) {
                $active = 'class="active" aria-current="true"';
              } ?>

              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" <?= $active ?> aria-label="Slide <?= intval($i) + 1 ?>"></button>
            <?php
              $i++;
            }
            ?>
          </div>
          <div class="carousel-inner">
            <?php
            $imgCount = 0;
            foreach ($resultBanner as $row) {
              $activeImg = '';
              if ($imgCount == 0) {
                $activeImg = 'active';
              } ?>

              <div class="carousel-item <?= $activeImg ?>">
                <img src="../../assets/img/banner/<?= $row['gambar'] ?>" style="object-fit: cover;">
              </div><?php

                    $imgCount++;
                  }
                    ?>
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
      <a href="edit-banner.php" class="btn btn-utama mt-2">Edit Banner</a>
    </div>
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
            <!-- <a href="profil.php" class="btn btn-utama">Baca Selengkapnya</a> -->
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
          <?php while ($data_berita = mysqli_fetch_array($resultBerita, MYSQLI_ASSOC)) {
            $date = date_create($data_berita['tanggal']);
            $newDate = date_format($date, "d-m-Y"); ?>
            <div class="row">
              <div class="col-md-4">
                <img src="../../assets/img/berita/<?= $data_berita['gambar']; ?>" alt="" style="height: 350px; width: 350px;">
              </div>
              <div class="col-md">
                <div class="section-item-title">
                  <h3><a href=""><?= $data_berita['judul']; ?></a></h3>
                  <div class="section-item-meta">
                    <span><i class="far fa-calendar-alt"></i><?= $newDate ?></span>
                  </div>
                </div>
                <span>
                  <p style="line-height: 1.5em; max-height: 7.5em; overflow: hidden;">
                    <?= $data_berita['isi']; ?>
                  </p>
                </span>
                <a href="page-berita.php?id=<?= $data_berita['id'] ?>" class="btn btn-utama" style="margin-bottom: 30px;">Baca Selengkapnya</a>
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
        <?php while ($data_galeri = mysqli_fetch_array($resultGaleri, MYSQLI_ASSOC)) { ?>
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

    <script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/main.js"></script>
  </body>

  <?php
  include 'footer.php';
  ?>