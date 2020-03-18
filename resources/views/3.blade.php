<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <title>page 1</title>
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">Navbar</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home (page3)
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 4</a>
    </li>



  </ul>
  <!-- Links -->

  <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    </div>
  </form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->




<!-- Default form login -->
<form method="POST" class="text-center border border-light p-5" action="{{ url('/4') }}">
@csrf
  <p class="h4 mb-4">Sign in</p>

  <!-- Email -->
  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

  <!-- Password -->
  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

  <div class="d-flex justify-content-around">
      <div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01"
              aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
          </div>
      </div>
      <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
      </div>
  </div>

  <!-- Sign in button -->
  <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

  <!-- Register -->
  <p>Not a member?
      <a href="">Register</a>
  </p>

  <!-- Social login -->
  <p>or sign in with:</p>

  <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>



{{-- 
  @isset ($email)
  <a style="color: red;"> {{$email}} </a>
  @endisset

  @isset ($password)
  <a style="color: red;"> {{$password}} </a>
  @endisset --}}


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
</form>
<!-- Default form login -->
</body>
</html>