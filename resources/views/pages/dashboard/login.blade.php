<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


  <div class="container">

    <div class="row justify-content-center mt-5">
      <div class="col-md-5 p-3" style="border:1px solid black ;border-radius:10px;">
        <form action="{{url('check')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="" placeholder="">
          </div>
          @error("username")
          {{$message}}
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="">
          </div>
          @error("password")
          {{$message}}
          @enderror
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
    </form>
  </div>




  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>