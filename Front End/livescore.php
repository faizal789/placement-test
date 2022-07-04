<?php
session_start();
$score_1 = (isset($_SESSION['score-1']) ? $score_1 = $_SESSION['score-1'] : null);
$score_2 = (isset($_SESSION['score-2']) ? $score_2 = $_SESSION['score-2'] : null);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Score</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body >

    <center><div class="h1 text-success p-3">Live Score</div></center>
    <img src="gambar/the-ball-488713_1920.jpg" class="img-fluid position-absolute w-100 h-100" style="z-index: -1;opacity: 0.8;filter: grayscale(50%);" alt="...">
    <div class="d-flex flex-row mb-3 justify-content-center ">
      <div class="d-flex flex-column m-5 w-50 bg-info ">
         <div class="p-1 bg-info text-center" style="height: 100px;font-size: 50px">Persib</div>
         <div class=" bg-light text-center text-secondary" style="height: 400px;padding-top: 35px;font-size: 200px"><?=$score_1?></div>
      </div>
      <div class="d-flex flex-column m-5 w-50 bg-danger ">
         <div class="p-1 bg-danger text-center"style="height: 100px;font-size: 50px">Bali United</div>
         <div class=" bg-light text-center text-secondary" style="height: 400px;padding-top: 35px;font-size: 200px;"><?=$score_2?></div>
        </div>
    </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>