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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body class="body-custom">

    <!-- membuat navbar -->
    <nav class="navbar navbar-expand-md shadow">
        <div class="container">
            <a class="navbar-brand">Beauty and Soul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto my-2 my-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="form my-4 mx-5" data-aos="fade-out" data-aos-duration="2000">
        <div class="container">
            <div class="row login-card g-0">
                <div class="col-lg-5 mh-50">
                    <img src="/gambarhtml/cream2.jpg" class="img-fluid login-image" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="title-signup"> <b>Beauty and Soul</b></h1> <br>
                    <h4>Sign-up into your account </h4>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-lg-8">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="col-lg-8">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" name="name" id="username"
                                placeholder="Name">
                        </div>
                        <div class="col-lg-8">
                            <label for="username">Age</label>
                            <input type="text" class="form-control" name="age" id="username"
                                placeholder="Age">
                        </div>
                        <div class="col-lg-8">
                            <label for="username">Username for your account</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="username">
                        </div>
                        <div class="col-lg-8">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="***">
                        </div>
                        <div class="col-lg-8">
                            <label for="born">Date of birth</label>
                            <input type="date" class="form-control" name="birth" id="born" placeholder="">
                        </div>
                        <div class="col-lg-8 py-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="gender" value="0"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Female</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="gender" value="1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">male</label>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="skintype">Skin Type</label>
                                <select class="form-select" aria-label="Default select example" name="skin_type">
                                    <option value="Dry">Dry</option>
                                    <option value="Oily">Oily</option>
                                    <option value="Combination">Combination</option>
                                    <option value="Oily to Dry">Oily to Dry</option>
                                </select>
                            </div>
                            <div class="col-lg-8 mt-4">
                                <button type="submit" class="btn-signup">Sign-up</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir sign in -->
    <!-- <script type="text/javascript" src="validasiForm.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()

    </script>
</body>

</html>
