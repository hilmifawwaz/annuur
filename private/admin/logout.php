<?php

session_start();
session_destroy();

setcookie('nama', '', 0, '/');
setcookie('role', '', 0, '/');

header("location: ../../public/home.php");
