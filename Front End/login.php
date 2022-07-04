<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <img src="gambar/pexels-pixabay-46798.jpg" class="img-fluid" style="  filter: blur(3px);
    -webkit-filter: blur(3px);" alt="...">

    <div class="container  h-50 p-5  position-absolute top-50 start-50 translate-middle rounded bg-light" style="width: 30%;">
     <center><h1 class="bg-success text-light p-3 w-100 position-absolute top-0 start-0">KLASEMEN LIGA 1</h1></center>
     <form>
          <div class="mb-3 mt-5">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control">
          </div>
          <div class="mb-3 form-check position-relative">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
              <label class="position-absolute top-50 end-0 translate-middle-y">lupa password?</label>
          </div>
          <button type="submit" class="btn btn-dark">Login</button>
          <button type="submit" class="btn btn-dark" ><a class="text-light" style="text-decoration: none;" href="registrasi.php">Registrasi</a></button>
     </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>