<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styletora.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <title>Main Page</title>
</head>

<body>

  <!-- membuat navbar  -->
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
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto d-flex align-items-center gap-3 ">
          <li class="nav-item d-flex align-items-center text-center">
            <!-- USER NTR DIGANTI SESUAI YANG LOGIN, KALAU BELUM LOGIN INI NON AKTIFIN AJA DISPLAY NONE -->
            @if ($user)
            <h5 class="helloo">{{ $user->name }}</h5>
            <li class="nav-item d-flex align-items-center text-center">
              <a href="{{ route('logout') }}" class="btn11">Logout </a>
            </li>
            @else
            <li class="nav-item d-flex align-items-center text-center">
              <a href="{{ route('login') }}" class="btn11">Login </a>
            </li>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar selesai -->

  <!-- membuat page utama-->
  <section class="main" data-aos="fade-in" data-aos-duration="2000">
    <div class="container py-lg-5">
      <div class="row py-lg-5">
        <div class="col-md-auto text-center">
          <h1>Everything has <b style="color: #FAF7F0;"><em>beauty</em></b> but not everyone sees it.</h1>
          <a href="{{ route('login') }}">
            <button class="btn1 mt-5">Login</button>
          </a>
          <div class="row py-2">
            <p>
            <p style="color: white;"> “People are like stained-glass windows. They sparkle and shine when the sun is
              out, but when the darkness sets in, their true beauty is revealed only if there is a light from within.”
              —Elisabeth Kubler-Ross

            </p>
            </p>
          </div>
        </div>
      </div>
  </section>
  <!-- akhir utama atas -->

  <!-- membuat menu  -->
  <section class="activity">
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-md-7 m-auto">
          <div class="row text-center">
            <div class="col-md-4 ">
              <a href="{{ route('review-index') }}">
                <img src="/gambarhtml/write.png" class="img-fluid" alt="">
                <h2 class="icon-title">Review</h2>
              </a>
            </div>

            <div class="col-md-4">
              <a href="{{ route('register') }}">
                <img src="/gambarhtml/signin.png" class="img-fluid" alt="">
                <h2 class="icon-title">Create Account</h2>
              </a>
            </div>

            <div class="col-md-4">
              <a href="https://www.sociolla.com/">
                <img src="/gambarhtml/shop.png" class="img-fluid" alt="">
                <h2 class="icon-title">sociolla</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- membuat menu -->


  <!-- memubuat carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/gambarhtml/trending2.jpg.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/gambarhtml/trending1.jpg.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/gambarhtml/trending4.jpg.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <br> <br>
  </div>
  <!-- akhir section carousel-->



  <!-- team -->
  <section class="page-section bg-white" id="team">
    <div class="container">
      <div class="text-center">
        <h1 class="section-heading text-uppercase" style="color: #9A1663;">Team</h1>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="/gambarhtml/shandra.jpeg" alt="..." />
            <h4 style="color: #9A1663;;">Tugek Shandra</h4>
            <p class="text-muted">Sad Gurl tp buaya</p>
            <a class="btn btn-light btn-social mx-2" href="#" aria-label="Parveen Anand Twitter Profile"
              style="color: pink;"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"
              style="color: pink;"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social mx-2" href=https://www.instagram.com/shandraa.v/?next=%2F&hl=id"
              aria-label="Parveen Anand LinkedIn Profile" style="color: pink;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="/gambarhtml/tria.jpeg" alt="..." />
            <h4 style="color: #9A1663;">Triananda</h4>
            <p class="text-muted">Ordinary Person</p>
            <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"
              style="color: pink;"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"
              style="color: pink;"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social mx-2" href="https://www.instagram.com/trianandadewi/?next=%2F&hl=id"
              aria-label="Larry Parker LinkedIn Profile" style="color: pink;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- team -->

  <!-- contact -->

  <section class="contact-section bg-pink">
    <div class="container px-4 px-lg-5" id="contact">
      <a href="contact"></a>
      <div class="row gx-4 gx-lg-5">
        <a href="contact"></a>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-black-50">Denpasar</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-black-50"><a href="#!">beautyandsoul@gmail.com</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4 mx-auto" />
              <div class="small text-pink-50">(+62)81353985536</div>
            </div>
          </div>
        </div>
      </div>
      <div class="social d-flex justify-content-center">
        <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="mx-2" href="https://www.instagram.com/trianandadewi/?next=%2F&hl=id"><i
            class="fab fa-instagram"></i></a>
      </div>
    </div>

  </section>
  <!-- contact -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init()</script>
</body>

</html>
