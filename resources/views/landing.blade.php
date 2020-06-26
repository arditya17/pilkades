<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
    <!-- Website Title -->
    <title>E-voting Pilkades</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="/landing/css/bootstrap.css" rel="stylesheet">
    <link href="/landing/css/fontawesome-all.css" rel="stylesheet">
    <link href="/landing/css/swiper.css" rel="stylesheet">
	<link href="/landing/css/magnific-popup.css" rel="stylesheet">
	<link href="/landing/css/styles.css" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="/landing/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="/">Evoting</a> -->
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="/landing/images/LOGOO.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#Voting">Cara Voting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row" id="home">
                    <div class="col-lg-8">
                        <div class="text-container">
                            <h2><span class="turquoise">Sistem informasi E-Voting</span>
                            <br>
                            Pemilihan Kepala Desa
                            <br>
                            Online Berbasis Web</h2>
                            <p class="p-large">
                            Selamat datang disistem informasi E-voting online yang dibuat berbasis web.
                            <br>
                            Sehingga memudahkan dalam proses pemungutan suara.
                            </p>
                            <a class="btn-solid-lg page-scroll" href="#Voting">Cara Voting</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <div class="image-container">
                            <img class="img-fluid" src="/landing/images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <!-- CARA VOTE -->
    <div id="Voting" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cara Voting</h2>
                    <p class="p-heading p-large">Berikut adalah langkah melakukan voting pemilihan Kepala Desa</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                    <h4>1</h4>
                        <img class="card-image" src="landing/images/login.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <p>Pemilih melakukan proses login terlebih dahulu menggunakan akun yaang telah terdaftar dan terverifikasi</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                    <h4>2</h4>
                        <img class="card-image" src="landing/images/voted.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Voting</h4>
                            <p>Pemilih melakukan proses Voting terhadap kandidat calon Kepala Desa yang telah terdaftar</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                    <h4>3</h4>
                        <img class="card-image" src="landing/images/logout.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Logout</h4>
                            <p>Pemilih melakukan proses logout setelah melakukan voting terhadap calon Kepala Desa dan pemilih hanya bisa voting 1 kali</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
      <!-- About -->
      <div id="About" class="form-1 slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="landing/images/header-home.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>About E-voting</h3>
                        <p>E-Voting atau yang disingkat dengan Electronic Voting adalah sebuah sistem pemungutan suara dalam proses sebuah pemilihan yang dilakukan secara online.</p>
                        <br>
                        <a>E-voting Pilkades ini terfokus pada sistem pemungutan suara pada pemilihan kepala desa di sebuah desa. dimana sistem dapat mendata nama-nama kandidat yang akan mengikuti pemilihan, sistem juga mampu mendata data-data warga desa sebagai pemilih yang yang akan mengikuti pemilihan kepala desa secara online.</a>
                    <div class="footer">
                        <div class="footer-col">
                            <h4>Social Media</h4>
                            <span class="fa-stack">
                                <a href="#">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google-plus-g fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                        </div> 
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of About -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a>E-voting Pilkades</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- Scripts -->
    <script src="/landing/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="/landing/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="/landing/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="/landing/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="/landing/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/landing/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="/landing/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="/landing/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>