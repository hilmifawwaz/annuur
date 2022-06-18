<?php
require_once 'config.php';
include 'navbar.php';
session_start();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT `nama`, `roles` FROM user
            WHERE `username`='$username' AND `password`='$password'";

  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

  if (!empty($data)) {
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['role'] = $data['roles'];

    //set cookie
    setcookie('nama', $data['nama'], time() + 3600, '/');
    setcookie('role', $data['roles'], time() + 3600, '/');

    header("Location: index.php");
  } else {
    header("Location: login.php");
  }
}
?>

<body>
  <div class="wrapper text-center mt-5 mb-5">
    <div class="logo"><img src="img/Logomasjid.png" alt="" style="width: 200px; height: 200px"></div>
    <div class="text-center mt-4 name">Masjid An-Nuur Minomartani</div>

    <form class="p-1 mt-1" method="post">
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-user"></span>
        <input type="text" name="username" id="username" placeholder="Username" />
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="password" placeholder="Password" />
      </div>
      <button type="submit" name="login" class="btn mt-3">Login</button>
    </form>

    <div class="text-center fs-6"><a href="#">Forget password?</a></div>
  </div>
</body>

<?php
include 'footer.php';
?>