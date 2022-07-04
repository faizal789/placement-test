<?php
include_once 'koneksi.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-light">

  <?php
    $conn = mysqli_connect("localhost", "root",'', "klasemen");
    $tim = (isset($_GET['tim']) ? $tim = $_GET['tim'] : '');
    $query = "SELECT * FROM klasemen WHERE tim = '$tim'";
    $baris = mysqli_query($conn,$query);
  ?>    

    <div class="container w-50 mt-5">
      <center><div class="h1 bg-success p-4 mb-3 text-light">Update Data Klasemen</div></center>
      

      <?php foreach ($baris as $row): ?>
         <form action="koneksi.php?updateklasemen" method="post">
                <div class="mb-3">
                    <label  class="form-label">tim</label>
                    <input type="text" name="tim" class="form-control" value="<?= $row['tim'] ?>" >
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah menang</label>
                  <input type="number" name="m" class="form-control" value="<?= $row['menang'] ?>" >
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah seri</label>
                  <input type="number" name="s" class="form-control" value="<?= $row['seri'] ?>" >
                </div>
                <div class="mb-3">
                  <label  class="form-label">jumlah kalah</label>
                  <input type="number" name="k" class="form-control" value="<?= $row['kalah'] ?>" >
                </div>
                <div class="mb-3">
                  <label  class="form-label">gol masuk</label>
                  <input type="number" name="gm" class="form-control" value="<?= $row['golmasuk'] ?>" >
                </div>
                <div class="mb-3">
                  <label  class="form-label">gol kemasukan</label>
                  <input type="number" name="gk" class="form-control" value="<?= $row['golkemasukan'] ?>" >
                </div>
              
                <center><button type="submit" name="submit" class="btn btn-success">simpan perubahan</button></center>
        </form>
      <?php endforeach ?>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>