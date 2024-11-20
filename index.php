<?php
session_start();
include "lib/koneksi.php";

if (!isset($_SESSION['user_id'])) {
  header( header: "Location: login.php");
  exit();
}

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : null;
    if (isset($page)) {
      if ($page == 'tambahantrian') {
        include "modul/tambah_antrian.php";
      }
      if ($page == 'keluar') {
        include "modul/logout.php";
      }
      if ($page == 'daftarantrian') {
        include "daftar_antrian.php";
      }
    } else {
      include "modul/default.php";
    }
    ?>
  </body>

  </html>
