<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/d9932d8fb8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styletora.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Review</title>
</head>

<body>

    <!-- membuat navbar  -->
    <nav class="navbar navbar-expand-md shadow" style="background-color: #efc2d3;">
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
                        <a class="nav-link" style="color:white;" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="{{ route('review-index') }}">Review</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar selesai -->

    <section>
        <div class="container d-flex min-vh-100 justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 halo py-3">Write a review</div>
                <p class="col-12 py-3 text-center"> Anyreview will make us better</p>
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
                <form method="POST" action="{{ route('review-store') }}">
                    @csrf
                    <div class="form-group row py-2">
                        <label for="product-name" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" id="product-name" class="form-control" readonly name="username" value="{{ $user->username }}" placeholder="Username" disabled>
                        </div>
                      </div>
                    <div class="form-group row py-2">
                      <label for="product-name" class="col-sm-3 col-form-label">Product name</label>
                      <div class="col-sm-9">
                        <input type="text" id="product-name" class="form-control" name="product">
                      </div>
                    </div>
                    <div class="form-group row py-2">
                      <label for="inputreview" class="col-sm-3 col-form-label">Review</label>
                      <div class="col-sm-9">
                        <textarea name="review" id="inputreview" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group row py-2">
                        <div class="col-sm-3">
                            <label for="inputreview" class="col-sm-3 col-form-label">Rating</label>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rate" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rate" id="inlineRadio2" value="5">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                              </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <button type="submit" class="btn12">Submit</button>
                        </div>
                    </div>

                  </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init()</script>
</body>

</html>
