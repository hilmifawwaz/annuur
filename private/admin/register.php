<?php
include 'navbar.php';
require_once '../config.php';

if (isset($_POST['login'])) {
  $options = [
    'cost' => 10,
  ];

  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
  $nama = $_POST['nama'];
  $roles = $_POST['roles'];

  $query = "INSERT INTO `user`(`nama`,`username`,`roles`,`password`) VALUES ('$nama','$username','$roles','$password')";
  $result = mysqli_query($conn, $query);
  header("location: register.php");
}
?>

<body>
  <div class="wrapper">
    <div class="text-center mt-4 name">REGISTER AKUN</div>
    <form method="post">

      <div class="form-group row">
        <label for="namaLengkap" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
      </div><br>
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="nama" id="nama" placeholder="Nama" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="username" id="username" placeholder="Username" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="roles" id="roles" placeholder="Roles" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Password" />
      </div>
      <button class="btn mt-3" type="submit" name="login">Register</button>
    </form>
  </div>
</body>