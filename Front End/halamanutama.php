<?php
include_once '../Back End/koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <img src="gambar/pexels-pixabay-46798.jpg" class="img-fluid position-absolute" 
       style="z-index: -1;opacity: 0.8;filter: grayscale(80%);" alt="...">
  <nav class="navbar navbar-expand-lg bg-dark">
   <div class="container-fluid">
    <a class="navbar-brand text-light"  href="#">Klasemen Liga 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="livescore.php">Live Score</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php

$dataklasemen = $koneksi->lihatklasemen();
$rangking = 1;

?>
<div class="container">
  <center><p class="h1 mt-5 bg-success  text-light p-3">Klasemen Liga 1</p></center>
  <table class="table table-success table-striped mt-5">
    <thead>
      <tr class="text-center">
        <th scope="col">Posisi</th>
        <th scope="col">Tim</th>
        <th scope="col">M</th>
        <th scope="col">M</th>
        <th scope="col">S</th>
        <th scope="col">K</th>
        <th scope="col">GM</th>
        <th scope="col">GK</th>
        <th scope="col">+/-</th>
        <th scope="col">P</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($dataklasemen as $baris): ?>
        <tr class="text-center">
          <th scope="row"><?=$rangking++?></th>
          <td scope="row"><?=$baris["tim"]?></td>
          <td scope="row"><?=$baris["pertandingan"]?></td>
          <td scope="row"><?=$baris["menang"]?></td>
          <td scope="row"><?=$baris["seri"]?></td>
          <td scope="row"><?=$baris["kalah"]?></td>
          <td scope="row"><?=$baris["golmasuk"]?></td>
          <td scope="row"><?=$baris["golkemasukan"]?></td>
          <td scope="row"><?=$baris["selisih"]?></td>
          <td scope="row"><?=$baris["poin"]?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
  </table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>