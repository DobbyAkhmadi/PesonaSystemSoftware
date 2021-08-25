<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Pesona Game Center</title>
<meta content="" name="description">
<meta content="" name="keywords">
<!-- Favicons -->
<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
<link href="{{asset('assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!-- =======================================================
  * Template Name: Multi - v4.2.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="#" class="logo"><img src="{{asset('assets/img/PesonaGameLogo.png')}}" alt="" class="img-fluid"></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    <nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">Pesona Game Center</a></li>
        <li><a class="nav-link scrollto" href="#services">Status Pesanan</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Merchandise Resmi</a></li>
        <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login Anggota</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{('assets/img/slide/slide-1.jpg')}})">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di<span> Pesona Game Center</span></h2>
            <p class="animate__animated animate__fadeInUp">Pesona Game Center memberikan pengalaman bermain ps5 terbaik, Lebih hemat dan ramah di kantong.</p>
            <p class="animate__animated animate__fadeInUp">Yuk Bergabung sekarang dengan daftar menjadi Anggota agar bisa booking online tanpa menunggu.</p>
            <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
            </div>
        </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{('assets/img/slide/slide-2.jpg')}})">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Lets Play FIFA 2021 On Next Gen Console</h2>
            <p class="animate__animated animate__fadeInUp">Pesona game center memberikan pengalaman bermain ps5 terbaik, Lebih hemat dan ramah di kantong.</p>
                <p class="animate__animated animate__fadeInUp">Yuk Bergabung sekarang dengan daftar menjadi Anggota agar bisa booking online tanpa menunggu.</p>
            <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
            </div>
        </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{('assets/img/slide/slide-3.jpg')}})">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Lets Play PES 2021 On Next Gen Console</h2>
            <p class="animate__animated animate__fadeInUp">Pesona game center memberikan pengalaman bermain ps5 terbaik, Lebih hemat dan ramah di kantong.</p>
                <p class="animate__animated animate__fadeInUp">Yuk Bergabung sekarang dengan daftar menjadi Anggota agar bisa booking online tanpa menunggu.</p>
            <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
            </div>
        </div>
        </div>
            <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url({{('assets/img/slide/slide-4.jpg')}})">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Lets Play Darksouls Remaster On Next Gen Console</h2>
            <p class="animate__animated animate__fadeInUp">Pesona game center memberikan pengalaman bermain ps5 terbaik, Lebih hemat dan ramah di kantong.</p>
                <p class="animate__animated animate__fadeInUp">Yuk Bergabung sekarang dengan daftar menjadi Anggota agar bisa booking online tanpa menunggu.</p>
            <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
            </div>
        </div>
        </div>
        <!-- Slide 5 -->
        <div class="carousel-item" style="background-image: url({{('assets/img/slide/slide-5.jpg')}})">
        <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Lets Play Genshin Impact On Next Gen Console</h2>
            <p class="animate__animated animate__fadeInUp">Pesona game center memberikan pengalaman bermain ps5 terbaik, Lebih hemat dan ramah di kantong.</p>
            <p class="animate__animated animate__fadeInUp">Yuk Bergabung sekarang dengan daftar menjadi Anggota agar bisa booking online tanpa menunggu.</p>
            <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
            </div>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>About Pesona Game Center</h2>
        <a href="#" class="logo"><img src="{{asset('assets/img/PesonaGameLogo.png')}}" alt="" class="img-fluid"></a>
        </div>
        <div class="row content">
        <div class="col-lg-6">

            <ul>
            <li><i class="ri-check-double-line"></i><strong>Support TV 4k UHD 43 Inch For Next Gen</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Support Ray Tracing For Next Gen</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Support Fast Loading Using SSD For Next Gen</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Gratis Wifi Up To 5Ghz Signal</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Gratis Minum Air Putih</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Gratis Parkir</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Lokasi Dekat Indomaret</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Lokasi Dekat Alfamart</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Lokasi Dekat Satpam</strong></li>
            <li><i class="ri-check-double-line"></i><strong>Pembayaran Dinamis Non Tunai menggunakan Qris (OVO,GOPAY,DANA,LINKAJA)</strong></li>
            </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            <strong>Pesona Game Center</strong> Memberikan Pengalaman Bermain PS4 Dan PS5 terbaik serta Lebih hemat dan ramah di kantong.
            </p>
            <p>Yuk Bergabung sekarang dengan daftar menjadi member agar bisa booking online tanpa menunggu via website
            </p>
            <a href="{{ route('register') }}" class="btn-learn-more">Daftar Yuk!</a>
        </div>
        </div>
    </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="row no-gutters">
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
            <a href="#">Find out more &raquo;</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
            <a href="#">Find out more &raquo;</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
            <a href="#">Find out more &raquo;</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
            <a href="#">Find out more &raquo;</a>
            </div>
        </div>
        </div>
    </div>
    </section><!-- End Counts Section -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            <div class="content">
            <h3>S&K <strong>Syarat Dan Ketentuan Berlaku !</strong></h3>
            <p>
            Berikut adalah syarat dan ketentuan ketika bermain demi kenyamanan bersama.
            </p>
            </div>
            <div class="accordion-list">
            <ul>
                <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Cara Pembayaran <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Untuk Pemesanan, Pengguna melakukan payment terlebih dahulu dan payment yang support untuk pembayaran yaitu OVO,Gopay dan DANA.
                    jangan lupa upload <strong>Screenshoot</strong> via website setelah melakukan pembayaran.
                    </p>
                    <p>
                    <strong>Catatan : Jangan lupa Kode Booking Berikan kepada admin yah! Agar Lebih mempermudah Verifikasi.</strong>
                    </p>
                    <p>
                    <strong>Setelah Pengguna sudah melakukan pembayaran hasil pembayaran tidak bisa di Batalkan!.</strong>
                    </p>
                </div>
                </li>
                <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Etika Saat Bermain <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    <strong>1. Menjaga Kebersihan tempat buang sampah pada tempatnya.</strong>
                    </p>
                    <p>
                    <strong>2. Menggunakan Masker demi protokol yang sehat dari Covid-19</strong>
                    </p>
                    <p>
                    <strong>3. Tidak boleh menggangu pengguna lain seperti berteriak kencang atau apapun yang dapat mengganggu pengguna lain.</strong>
                    </p>
                </div>
                </li>
                <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tentang Syarat Dan Ketentuan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Dengan mendaftar menggunakan situs www.pesonagamecenter.net,maka pengguna di anggap telah membaca,mengerti,memahami dan menyetujui semua isi syarat ketentuan.
                    </p>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>Informasi Status Pesanan Online</h2>
        <p>Yuk kita Pesan PS nya dulu, Biar Gak Lama nunggu di tempat !</p>
        </div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nomer Tempat</th>
            <th scope="col">Nama Anggota</th>
            <th scope="col">Console</th>
            <th scope="col">Status Paket</th>
            <th scope="col">Start Play</th>
            <th scope="col">End Play</th>
            <th scope="col">Hours Play</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
            <th scope="row">#</th>
            <td scope="row">{{ $row->seatno }}</td>
            <td scope="row">{{ $row->name }}</td>
            <td scope="row">{{ $row->devicename }}</td>
            <td scope="row">{{ $row->packagename }}</td>
            <td scope="row">{{ date_format(date_create($row->start), 'h:i A') }} </td>
            <td scope="row">{{ date_format(date_create($row->end), 'h:i A')}} </td>
            <td scope="row">{{ $row->hours }} Hours</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class="alert alert-success" role="alert">
            Anggota yang terdaftar di atas sudah setuju dengan Syarat dan ketentuan berlaku.
        </div>
        <a class="logo"><img src="{{('assets/img/ps5.png')}}" alt="" class="img-fluid"></a>
        </div>
    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>Testimonials</h2>
        <p>Testimonials</p>
        </div>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                </div>
            </div>
            </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>Merchandise</h2>
        <p>Merchandise Resmi</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            </ul>
        </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>Informasi Kontak</h2>
        <p>Saran dan Kritikan Teman" Mengenai Pelayanan Kami</p>
        </div>
        <div class="row">
        <div class="col-lg-5">
            <div class="row">
            <div class="col-md-12">
                <div class="info-box">
                <a class="logo"><img src="{{('assets/img/play.png')}}" alt="" class="img-fluid"></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-7">
            <form action="#" method="post"  class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul Kritikan/Saran" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan !</button></div>
            </form>
        </div>
        </div>
    </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="footer-info">
            <a class="logo"><img src="{{('assets/img/signs.png')}}" alt="" class="img-fluid"></a>
            <p class="pb-3"><em>Kunjungi kami di.</em></p>
            <p>
                Pesona Asri Estate Block D NO 1 LT 2<br>
                Bojongsoang Kab Bandung 40288<br><br>
                <strong>Whatsapp:</strong> +6285861415914<br>
                <strong>Email Us :</strong> pesonagamecenter@gmail.com<br>
            </p>
            <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
            <h4>Pesona Game Center</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Pesona Game Center</a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Rental PS4 Pro</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Rental PS5</a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="copyright">
        <footer class="main-footer">
        <strong>Copyright &copy; 2021 Pesona Game Center</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Web Version</b> 0.1.0 <strong>BETA</strong>
    </div>
</footer>
    </div>
    <div class="credits">
        Designed by DAP2021</a>
    </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
