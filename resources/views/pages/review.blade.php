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
                        <a class="nav-link" style="color: white;" href="{{ route('review-create') }}">Write a Review</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar selesai -->

    <!-- melihat review  -->
    <section id="testimonial">
        <div class="container">
            <!-- INI BIASA DI LOOP SESUAI DI DATABASE DIP -->
            <div class="testimonial-heading">
                <span>Welcome</span>
                <h1 class="halo py-3"> <b>Make your beauty Journal</b></h1>
                @foreach($review->chunk(2) as $chunk)
                <div class="row testimonial-box-conatainer">
                    @foreach ($chunk as $data)
                    <div class="col-lg-5 testimonial-box">
                        <div class="box-top">
                            <div class="profile">
                                <!-- gambar -->
                                <div class="img-profile">
                                    <img src="/gambarhtml/profile1.jpg" alt="">
                                </div>
                                <!-- nama profil -->
                                <div class="name-profile">
                                    <strong>{{ $data->name }}</strong>
                                    <!-- Ini ntr diganti pkek user yang sedang login sekalian umur sama skin type-->
                                    <span>{{ $data->users->age }},{{ $data->users->skin_type }}
                                    @if ($data->users->gender == 0)
                                        Female
                                    @else
                                        Male
                                    @endif</span>
                                </div>
                            </div>
                            <!-- review bintang SAMAIN SAMA YANG DI PRODUCT REVIEW ADA RATING-->
                            <div class="review">
                                @for ($i = 1; $i <= $data->rate; $i++)
                                    <i class='fas fa-star'></i>
                                @endfor
                                @for ($i = 1; $i <= 5 - $data->rate; $i++)
                                <i class='far fa-star'></i>
                                @endfor
                            </div>
                        </div>
                        <div class="product-name">
                            <!--INI NAMA PRODUCT YANG DIREVIEW -->
                            <h5 class="prodcut" style="color: white;">{{ $data->product }}</h4>
                        </div>
                        <div class="client-coment">
                            <!--INI DESKRIPSI DARI PRODUCTNYA -->
                            <p style="text-align: justify;">{!! $data->review !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- akhir review -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()

    </script>
</body>

</html>
