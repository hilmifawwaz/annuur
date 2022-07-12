<?php
include 'navbar.php';
include '../config.php';
$id = $_SESSION["id"];

// danger modal
$setAlertCondition = false;
$setAlertText = $setAlertShow = "";


$query = "SELECT `nama`,`username` FROM `user` WHERE `id` LIKE '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

$nama = $data['nama'];
$username = $data['username'];

if (isset($_POST['ubah'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];

  if (isset($_POST['passwd'])) {
    if ($_POST['passwd'] == $_POST['passwdulang']) {
      $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT, ['cost' => 10]);

      $query = "UPDATE `user` SET `nama`='$nama',`username`='$username',`password`='$passwd' WHERE `id` LIKE '$id'";
      $result = mysqli_query($conn, $query);

      header("Location: pengaturan.php");
    } else {
      $setAlertCondition = true;
      $setAlertText = "Kedua password tidak sama!";
      $setAlertShow = "show";
    }
  } else {
    $query = "UPDATE `user` SET `nama`='$nama',`username`='$username' WHERE `id` LIKE '$id'";
    $result = mysqli_query($conn, $query);
  }
}
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
  <!-- konten -->

  <div class="container">
    <h1 class="mt-3" style="text-align: center ;"> Ganti Password </h1>

    <!-- card content -->
    <div class="card border shadow">
      <div class="card-body m-3 mt-3">

        <!-- form input -->
        <form method="post">

          <!-- Nama -->
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>" required>
            </div>
          </div><br>

          <!-- Username -->
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="username" value="<?= $username ?>" required>
            </div>
          </div>
          <hr>

          <!-- danger alert -->
          <div class="alert alert-danger alert-dismissible fade <?= $setAlertShow; ?>" id="alert">
            <strong><?= $setAlertText; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <!-- Password -->
          <div class="form-group row">
            <label for="passwdBaru" class="col-sm-2 col-form-label">Password Baru</label>
            <div class="col-sm-10">
              <input type="password" name="passwd" class="form-control" id="passwdBaru">
            </div>
          </div><br>
          <!-- Ulang Password -->
          <div class="form-group row">
            <label for="passwdBaruUlang" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
            <div class="col-sm-10">
              <input type="password" name="passwdulang" class="form-control" id="passwdBaruUlang">
            </div>
          </div>
          <hr>

          <!-- Button -->
          <button type="submit" name="ubah" class="btn btn-utama btn-block">
            <span><i class="bi bi-pencil"></i></span>
            <span>Update</span>
          </button>
        </form>

        <!-- Modal Danger -->
        <div class="modal fade" tabindex="-1" id="modalDanger" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Peringatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p><?= $setDangerText ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Javascript -->
  <!-- Show Alert -->
  <?php
  if ($setAlertCondition) {
    echo '<script type="text/javascript">
                $("#alert").show();
              </script>';
  } else {
    echo '<script type="text/javascript">
                $("#alert").hide();
              </script>';
  }
  ?>
</body>

</html>