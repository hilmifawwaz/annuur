<?php
include '../config.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $confirm = $_GET['confirm'];

  if($confirm == "yes") {
    $confirm = "UPDATE `berita` SET `status`='DITERIMA' WHERE `id` LIKE '$id' ";
    $acc = mysqli_query($conn, $confirm);
  
    header("location: pending-berita.php");
  } else {
    $confirm = "UPDATE `berita` SET `status`='DITOLAK' WHERE `id` LIKE '$id' ";
    $acc = mysqli_query($conn, $confirm);
  
    header("location: pending-berita.php");
  }
} else {
  header("location: pending-berita.php");
}
?>