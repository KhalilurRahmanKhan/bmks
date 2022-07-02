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
    <form method="post" action="{{url('dashboard/store')}}">
      @csrf
      <div class="row justify-content-center mt-5">
        <div class="col-md-5 p-3" style="border:1px solid #ddd1d1 ;border-radius:10px;">
          <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="" placeholder="name@example.com">
          </div>
          @error('email')
          {{$message}}
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="">
          </div>
          @error('password')
          {{$message}}
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="" placeholder="">
          </div>
      

          <button type="submit" class="btn btn-primary">Registration</button>
        </div>
      </div>
    </form>
  </div>




  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>