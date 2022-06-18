<?php
include 'navbar.php';
?>

<!-- Kontak -->
<section class="location">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.464942843155!2d110.40455121513324!3d-7.740406394420959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a596dd408265f%3A0xf395e73902d3760!2sMasjid%20An-Nuur%20Minomartani!5e0!3m2!1sid!2sid!4v1650872334732!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="kontak">
  <div class="row">
    <div class="kontak-col">
      <div>
        <i class="fas fa-home"></i>
        <span>
          <h1>Masjid An-Nuur Minomartani</h1>
          <p>Jl. Lele 8, Mladangan, Minomartani, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</p>
        </span>
      </div>
      <div>
        <i class="fas fa-phone"></i>
        <span>
          <h4>(0274) 511121</h4>
          <p>Senin - Sabtu, 08.00 - 16.00</p>
        </span>
      </div>
      <div>
        <i class="fas fa-envelope"></i>
        <span>
          <h4 style="font-size: 20px;"> masjidannuurminomartani@gmail.com</h4>
          <p>Silakan kontak kami melalui email</p>
        </span>
      </div>
    </div>
    <div class="kontak-col" method="post">
      <form action="form_handler.php">
        <input type="text" name="name" placeholder="Masukkan nama Anda" required>
        <input type="text" name="email" placeholder="Masukkan alamat email" required>
        <input type="text" name="subject" placeholder="Masukkan Judul" required>
        <textarea rows="8" name="messege" placeholder="Masukkan Pesan" required></textarea>
        <button type="submit" class="btn btn-utama">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
<!-- akhir kontak -->

<?php
include 'footer.php';
?>