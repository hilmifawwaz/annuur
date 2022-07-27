<?php
include 'navbar.php';
require_once '../config.php';

if (isset($_POST['register'])) {
  $options = [
    'cost' => 10,
  ];

  $username = $_POST['username'];
  $password = password_hash($_POST['passwd'], PASSWORD_DEFAULT, $options);
  $nama = $_POST['nama'];
  $roles = $_POST['roles'];

  $query = "INSERT INTO `user`(`nama`,`username`,`roles`,`password`) VALUES ('$nama','$username','$roles','$password')";
  $result = mysqli_query($conn, $query);
  header("location: register2.php");
}
?>

<body>

  <!-- Tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="pengaturan.php">Kelola Akun</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Register Akun</a>
    </li>
  </ul>
  <!-- konten -->
  <main>
    <div class="container-fluid content transition">
      <h3 class="text-center mt-3 mb-3">REGISTER AKUN</h3>

      <!-- card content -->
      <div class="card border shadow">
        <div class="card-body m-3">

          <!-- form input -->
          <form method="post">

            <!-- nama -->
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" required>
              </div>
            </div><br>

            <!-- username -->
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="username" required>
              </div>
            </div><br>

            <!-- roles -->
            <div class="form-group row">
              <label for="roles" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <select class="form-select" name="roles" id="roles" required>
                  <option selected disabled>Pilih Jabatan</option>
                  <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                  <option value="BENDAHARA MASJID">BENDAHARA MASJID</option>
                  <option value="BENDAHARA TPQ">BENDAHARA TPQ</option>
                  <option value="SEKRETARIS">SEKRETARIS</option>
                </select>
              </div>
            </div><br>

            <!-- password -->
            <div class="form-group row">
              <label for="passwd" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" name="passwd" class="form-control" id="passwd" required>
              </div>
            </div><br>

            <!-- Button -->
            <button type="submit" name="register" class="btn btn-utama btn-block">
              <span><i class="bi bi-pencil"></i></span>
              <span>Register</span>
            </button>
          </form>

        </div>

      </div>

    </div>
  </main>

</body>