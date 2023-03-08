
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laundry in Aja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/laundry-machine.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('laundry/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('laundry/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">Laundry</span> in Aja</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home-page.blade.php" class="nav-item nav-link active">Home</a>
                        <a href="/login" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/bga.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry in Aja</h4>
                            <h1 class="display-3 text-white mb-md-4">Baju Bersih. Andapun Nyaman</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/laundry.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry in Aja</h4>
                            <h1 class="display-3 text-white mb-md-4">Dilayani Oleh Staff yang Profesional</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/hand.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Tentang Kita</h6>
                    <h1 class="mb-4">Laundry in Aja</h1>
                    <h5 class="font-weight-medium font-italic mb-4">Mengapa Memilih Kami?</h5>
                    <p class="mb-2">Tidak punya waktu mencuci sendiri? Mau laundry tapi takut baju hilang dan hasilnya
                        berantakan? Tenang, DiLaundry in Aja bisa bantu kamu ngelaundry sambil menikmati waktu
                        istirahatmu dirumah dengan mesin cuci kualitas di kelasnya. Semua jenis baju, tas, dan
                        sepatu kesayanganmu, serahkan kepada kita! Dijamin hasilnya rapi, bersih, plus wangi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-12 col-md-12 mb-12">
                <a href=""><h1 class="text-secondary mb-3"><span class="text-white">Laundry</span> in Aja</h1></a>
                <p>Di Laundry in Aja bisa bantu kamu ngelaundry sambil menikmati waktu
                    istirahatmu dirumah dengan mesin cuci kualitas di kelasnya. Semua jenis baju, tas, dan
                    sepatu kesayanganmu, serahkan kepada kita! Dijamin hasilnya rapi, bersih, plus wangi.</p>
                    <br>
            </div>
            <div class="col-lg-12 col-md-12 mb-12">
                <h4 class="text-white mb-4">Alamat</h4>
                <p>Kalian Bisa Mencari kita di:</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>JL. Pahlawan No.00, Jakarta Pusat</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+62812 2562 7432</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium">Laundry in Aja</a>. Di Desain oleh
            <a class="text-white font-weight-medium" href="https://github.com/Andyatama">Andyatama</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('laundry/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('laundry/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('laundry/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('laundry/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('laundry/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('laundry/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('laundry/js/main.js')}}"></script>
</body>

</html>