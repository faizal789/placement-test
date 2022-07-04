<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="container w-25 p-3 mt-5 bg-light">
      <center><div class="h1 bg-success p-2 text-light">Edit Papan Score</div></center>
      <form action="" method="post" onsubmit="myFunction()">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Persib</label>
            <input type="number" class="form-control" name="score-1">
            <label for="exampleInputEmail1" class="form-label" >Bali United</label>
            <input type="number" class="form-control" name="score-2">
          </div>
      <center><button type="submit" name="submit" class="btn btn-success">Submit</button></center>
      </form>
    </div>


  <script>
    function myFunction() {
      alert("perubahan telah disimpan");
    }
  </script>

 <?php
    if (isset($_POST['submit'])) {
      session_start();
      $_SESSION['score-1'] = $_POST['score-1'];
      $_SESSION['score-2'] = $_POST['score-2'];
    }

  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>