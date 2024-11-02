<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styletora.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300&display=swap" rel="stylesheet">
  <title>Login</title>
</head>

<body class="body-custom">

  <!-- membuat navbar -->

  <nav class="navbar navbar-expand-md shadow">
    <div class="container">
      <a class="navbar-brand">Beauty and Soul</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto my-2 my-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar selesai -->

  <!-- membuat bagian login -->
  <section class="form my-3 mx-3">
    <div class="container">
      <div class="row login-card g-0">
        <div class="col-lg-4">
          <img src="/gambarhtml/skincare1.jpg" class="login-image" alt="" width="100%" height="600">
        </div>
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="title"> <b>Beauty and Soul</b></h1> <br>
          <h4>Sign into your account </h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-row">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              <div class="col-lg-7">
                <input type="email" placeholder="Email-address" name="email" class="form-control my-2 p-3">
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="********" name="password" class="form-control  my-2 p-3">
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" class="btn12 mt-3 mb-5">Login</button>
              </div>
            </div>
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--bagian login selesai-->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f3f4f5" fill-opacity="1"
      d="M0,96L34.3,96C68.6,96,137,96,206,80C274.3,64,343,32,411,32C480,32,549,64,617,96C685.7,128,754,160,823,165.3C891.4,171,960,149,1029,149.3C1097.1,149,1166,171,1234,154.7C1302.9,139,1371,85,1406,58.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
    </path>
  </svg>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
