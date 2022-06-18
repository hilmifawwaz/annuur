  <?php
  include 'navbar.php';
  include 'config.php';
  $query = "SELECT * FROM `profil`";

  $result = mysqli_query($conn, $query);
  ?>

  <body>
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/bg1.png" style="height: 700px;" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/bg2.png" style="height: 700px;" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/imgberita1.jpeg" style="height: 700px;" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
            <?php
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              echo $data['roles'];
            }
            ?>
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
          <div class="row">
            <div class="col-md-4">
              <img src="img/imgberita1.jpeg" alt="">
            </div>
            <div class="col-md">
              <div class="section-item-title">
                <h3><a href="">Berita 1</a></h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>7 November 2021</span>
                </div>
              </div>
              <div class="section-item-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <div class="section-item">
          <div class="row">
            <div class="col-md-4">
              <img src="img/imgberita2.jpeg" alt="">
            </div>
            <div class="col-md">
              <div class="section-item-title">
                <h3><a href="">Berita 2</a></h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>7 November 2021</span>
                </div>
              </div>
              <div class="section-item-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <div class="section-item">
          <div class="row">
            <div class="col-md-4">
              <img src="img/imgberita3.jpeg" alt="">
            </div>
            <div class="col-md">
              <div class="section-item-title">
                <h3><a href="">Berita 3</a></h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>7 November 2021</span>
                </div>
              </div>
              <div class="section-item-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus possimus voluptatum recusandae cupiditate dolorum ipsum quia consequuntur inventore, maiores magni!</p>
              </div>
            </div>
          </div>
        </div>
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

      <!-- Galeri -->
    </section>
    <div class="container">
      <section class="galeri">
        <h1>Galeri Foto</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis perspiciatis molestiae facilis autem pariatur! Quidem, minima dolorum? Mollitia esse at corporis alias neque corrupti nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos!</p>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_fjords.jpg">
              <img src="img/imgberita1.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 1</div>
          </div>
        </div>


        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">foto 2</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="img/imgberita3.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 3</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 4</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_fjords.jpg">
              <img src="img/imgberita1.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 1</div>
          </div>
        </div>


        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">foto 2</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="img/imgberita3.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 3</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 4</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_fjords.jpg">
              <img src="img/imgberita1.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 1</div>
          </div>
        </div>


        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">foto 2</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="img/imgberita3.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 3</div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
              <img src="img/imgberita2.jpeg" width="600" height="400">
            </a>
            <div class="desc">Foto 4</div>
          </div>
        </div>

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