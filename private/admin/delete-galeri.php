<?php
include '../config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM `galeri` WHERE `id` LIKE '$id'";
  $result = mysqli_query($conn, $query);

  header("location: galeri.php");
}
