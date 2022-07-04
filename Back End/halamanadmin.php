<?php
include_once 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Front End/style.css">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark position-relative">
      <div class="container-fluid">
        <a class="navbar-brand text-light"  href="#">Klasemen Liga 1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="papanscore.php">Papan Score</a>
              </li>
               <li class="nav-item position-absolute top-50 end-0 translate-middle-y me-5">
                <a class="nav-link active text-light" aria-current="page" href="../Front End/login.php">Login</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

<div class="container">
    <center><p class="h1 mt-5 bg-success  text-light p-3">Klasemen Liga 1</p></center>

<?php

$dataklasemen = $koneksi->lihatklasemen();
$rangking = 1;

?>

<table class="table table-success table-striped mt-5">
  <thead>
    <tr class="text-center">
      <th scope="col">Rangking</th>
      <th scope="col">Tim</th>
      <th scope="col">PD</th>
      <th scope="col">M</th>
      <th scope="col">S</th>
      <th scope="col">K</th>
      <th scope="col">GM</th>
      <th scope="col">GK</th>
      <th scope="col">+/-</th>
      <th scope="col">P</th>
      <th scope="col">Aksi</th>
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
      <td>
          <a class="btn btn-danger" href="koneksi.php?hapusbaris=<?= $baris["tim"] ?>">Hapus</a>
          <a class="btn btn-success" href="updatedata.php?tim=<?= $baris["tim"] ?>">update</a>
        </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

</div>


 <!-- Button trigger modal -->
<center><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  tambah data
</button></center>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">tambah data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="koneksi.php?tambahdata" method="post">
                <div class="mb-3">
                  <label  class="form-label">tim</label>
                  <input type="text" name="tim" class="form-control" >
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah menang</label>
                  <input type="number" name="m" class="form-control" >
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah seri</label>
                  <input type="number" name="s" class="form-control" >
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah kalah</label>
                  <input type="number" name="k" class="form-control" >
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">gol masuk</label>
                  <input type="number" name="gm" class="form-control" >
                  <div class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label  class="form-label">gol kemasukan</label>
                  <input type="number" name="gk" class="form-control" >
                  <div class="form-text"></div>
                </div>
              
                <button type="submit" name="submit" class="btn btn-success">tambah</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>