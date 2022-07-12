<?php
include '../config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM `banner` WHERE `id` LIKE '$id'";
  $result = mysqli_query($conn, $query);

  header("location: edit-banner.php");
}
