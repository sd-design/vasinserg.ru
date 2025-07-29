<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>Васин Сергей - Настройка Mikrotik и не только</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="assets/css/metismenu.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="body-wrapper">

<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                    <span data-text-preloader="V" class="letters-loading">
                        V
                    </span>
            <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
            <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
            <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
            <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- welcome content start from here -->

<header class="header-wrap header-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-sm-5 col-xl-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-7 d-none d-xl-block">
                <div class="main-menu">
                    <ul>
                        <li><a href="#">Главная <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="index.html">home 1</a></li>
                                <li><a href="index-2.html">home 2</a></li>
                                <li><a href="index-3.html">home 3</a></li>
                                <li><a href="index-4.html">home 4</a></li>
                                <li><a href="index-5.html">home 5</a></li>
                                <li><a href="index-6.html">home 6</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">Обо мне</a> </li>
                        <li><a href="services.html">Скилы</a></li>
                        <li><a href="#">Статьи <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="cases-grid.html">Технические</a></li>
                                <li><a href="project-details.html">Богословские</a></li>
                                <li><a href="faq.html">Про жизнь</a></li>
                            </ul>
                        </li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 d-none d-sm-block pl-xl-0 text-right">
                <a href="contact.html" class="theme-btn">Вызвать на помощь <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="mobile-nav-bar d-block col-sm-1 col-6 d-xl-none">
                <div class="mobile-nav-wrap">
                    <div id="hamburger">
                        <i class="fal fa-bars"></i>
                    </div>
                    <!-- mobile menu - responsive menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li><a class="has-arrow" href="#">Homes</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                        <li><a href="index-4.html">Homepage 4</a></li>
                                        <li><a href="index-5.html">Homepage 5</a></li>
                                        <li><a href="index-6.html">Homepage 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="services.html">services</a></li>
                                <li>
                                    <a class="has-arrow" href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">faq</a></li>
                                        <li><a href="services-details.html">services details</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="cases-grid.html">Case Grid</a></li>
                                        <li><a href="case-2.html">Case Grid 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="/news">Новости</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                            </ul>
                        </nav>

                        <div class="action-bar">
                            <a href="mailto:modinatheme@gmail.com"><i class="fal fa-envelope-open-text"></i>info@webmail.com</a>
                            <a href="tel:123-456-7890"><i class="fal fa-phone"></i>987-098-098-09</a>
                            <a href="contact.html" class="d-btn theme-btn black">Вызвать на помощь</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>

<section class="hero-slide-wrapper hero-1">
    <div class="hero-slider-active owl-carousel">
        <div class="single-slide bg-cover">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8 col-lg-10">
                        <div class="hero-contents">
                            <h2>Решения для</h2>
                            <h1 class="fs-lg">IT Бизнеса</h1>
                            <p>Уже более 10-ти лет в решении задач по Mikrotik</p>
                            <a href="/services" class="theme-btn">Мои услуги <i class="fas fa-arrow-right"></i></a>
                            <a href="/about" class="theme-btn minimal-btn">Узнать больше <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-top-img d-none d-lg-block bg-overlay bg-cover" style="background-image: url('assets/img/home1/hero1.jpg')"></div>
            <div class="slide-bottom-img d-none d-xl-block bg-overlay bg-cover" style="background-image: url('assets/img/home1/hero2.jpg')"></div>
        </div>
    </div>
</section>

<section class="features-wrapper features-1 section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="section-title text-center">
                    <p>Как я могу быть полезен вам</p>
                    <h1>Mikrotik нуждается в настройке</h1>
                </div>
            </div>
        </div>

        <div class="row mt-3 mt-lg-5">
            <div class="col-xl-4 d-none d-xl-block">
                <div class="features-banner mt-30 bg-cover" style="background-image: url('assets/img/home1/feature_img.jpg')">
                </div>
            </div>
            <div class="col-xl-8 col-12">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="single-features-item">
                            <div class="icon">
                                <i class="flaticon-speech-bubble"></i>
                            </div>
                            <div class="content">
                                <h3>Консультирование</h3>
                                <p>Подбор оборудования под ваши задачи</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="single-features-item">
                            <div class="icon">
                                <i class="flaticon-unlock"></i>
                            </div>
                            <div class="content">
                                <h3>Сетевая безопасность</h3>
                                <p>Профессиональная настройка сетевого оборудования</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="single-features-item">
                            <div class="icon">
                                <i class="flaticon-mobile-app"></i>
                            </div>
                            <div class="content">
                                <h3>Разработка</h3>
                                <p>Архитектурная разработка сети. Настройка пользовательских прав</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="feature-cta bg-cover bg-center text-white" style="background-image: url('assets/img/home1/wave.png')">
                            <p>«Вместо того, чтобы бояться кибератак или игнорировать их, обеспечьте свою киберустойчивость к ним».</p>
                            <small>― Стефан Наппо</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 pr-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
                <div class="section-title mb-30">
                    <p>Обо мне</p>
                    <h1>Получите оперативно<br>
                        экспертное решение</h1>
                </div>

                <p class="pr-5">Васин Сергей &mdash; сертифицированный специалист по сетевому оборудованию Mikrotik. Более 10 лет практики в сфере сетевого администрирования промышленной сферы.</p>

                <div class="about-icon-box">
                    <div class="icon">
                        <i class="fal fa-users"></i>
                    </div>
                    <div class="content">
                        <h3>Сертификация компании Mikrotik</h3>
                        <p>Это не просто слова, а закрепленный опыт экзаменами от компании производителя Mirkotik</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pl-lg-5 col-12 order-1 order-lg-2">
                <span class="dot-circle"></span>
                <div class="about-us-img" style="background-image: url('assets/img/home1/about-us.jpg')">
                </div>
                <span class="triangle-bottom-right"></span>
            </div>
        </div>
    </div>
</section>

<section class="services-wrapper service-1 section-padding section-bg">
    <div class="container">
        <div class="row mb-4 mb-lg-5">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p>Popular IT services</p>
                    <h1>Our Professional Solutions <br>
                        For IT Business</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3 col-12">
                <div class="single-service-item">
                    <div class="icon">
                        <img src="assets/img/icon/sicon1.png" alt="service">
                    </div>
                    <h4>Manage IT Services</h4>
                    <p>Sed perspicias unde omnis natus error volute</p>
                    <a href="services-details.html">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12">
                <div class="single-service-item">
                    <div class="icon">
                        <img src="assets/img/icon/sicon2.png" alt="service">
                    </div>
                    <h4>Product  Engineering</h4>
                    <p>Sed perspicias unde omnis natus error volute</p>
                    <a href="services-details.html">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12">
                <div class="single-service-item">
                    <div class="icon">
                        <img src="assets/img/icon/sicon3.png" alt="service">
                    </div>
                    <h4>Web Development</h4>
                    <p>Sed perspicias unde omnis natus error volute</p>
                    <a href="services-details.html">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12">
                <div class="single-service-item">
                    <div class="icon">
                        <img src="assets/img/icon/sicon4.png" alt="service">
                    </div>
                    <h4>Digital Solutions</h4>
                    <p>Sed perspicias unde omnis natus error volute</p>
                    <a href="services-details.html">learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="funfact-wrapper text-white">
    <div class="container">
        <div class="funfact-content-grid bg-cover" style="background-image: url('assets/img/funfact-line.png')">
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-gem"></i>
                </div>
                <h3>368</h3>
                <p>Project Completed</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-drafting-compass"></i>
                </div>
                <h3>785</h3>
                <p>Expert Consultants</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-stars"></i>
                </div>
                <h3>896</h3>
                <p>5 Stars Rating</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-trophy-alt"></i>
                </div>
                <h3>125</h3>
                <p>Awards Winning</p>
            </div>
        </div>
    </div>
</section>

<section class="our-team-wrapper section-padding pb-0">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-6">
                <div class="section-title">
                    <p>Exclusive Members</p>
                    <h1>Meet Our Experience Team Members</h1>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-right">
                <a href="team.html" class="theme-btn off-white">View all Member <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="team-members-list row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team1.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Wallace S. Camacho</h4>
                        <p>Business Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member active">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team2.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Lawrence Pacheco</h4>
                        <p>Web Developer</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team3.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Timothy L. Figueroa</h4>
                        <p>Business Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team4.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Michael L. Branch</h4>
                        <p>Product Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case-study-wrapper section-padding">
    <div class="container">
        <div class="row mb-50 align-items-center">
            <div class="col-12 col-md-5">
                <div class="section-title">
                    <p>our Recent project</p>
                    <h1>Latest Case Studies</h1>
                </div>
            </div>
            <div class="col-12 col-md-7 mt-4 mt-md-0 text-md-right">
                <div class="case-cat-filter">
                    <button data-filter="*" class="active">All</button>
                    <button data-filter=".business">Business</button>
                    <button data-filter=".consulting">Consulting</button>
                    <button data-filter=".product">Product</button>
                    <button data-filter=".engineering">Engineering</button>
                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="col-xl-4 col-md-6 grid-item business product engineering">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/1.jpg')"></div>
                    <div class="content">
                        <h3>Business Knowledge</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item product engineering">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/2.jpg')"></div>
                    <div class="content">
                        <h3>Business Knowledge</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item consulting product">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/3.jpg')"></div>
                    <div class="content">
                        <h3>Relationship Buildup</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item business engineering">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/4.jpg')"></div>
                    <div class="content">
                        <h3>Financial Investment</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item consulting business">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/5.jpg')"></div>
                    <div class="content">
                        <h3>Research & Market Plan</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 grid-item consulting product">
                <div class="single-case-study">
                    <div class="features-thumb bg-cover" style="background-image: url('assets/img/case/6.jpg')"></div>
                    <div class="content">
                        <h3>Business Knowledge</h3>
                        <p>IT Consultation</p>
                        <a href="project-details.html">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="client-brand-logo-wrap">
    <div class="container">
        <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
            <div class="single-client">
                <img src="assets/img/brand/1.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/2.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/3.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/4.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/b4.png" alt="">
            </div>
        </div>
    </div>
</div>

<section class="our-pricing-wrapper section-bg section-padding">
    <div class="container">
        <div class="row mb-35">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p>our pricing plan</p>
                    <h1>Awesome Pricing Plan</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="single-pricing-plan">
                    <h3>Basic Plan</h3>
                    <p>Quis autem vel eum iure reprehes derit quin voluptate velite</p>
                    <div class="pricing">
                        <span>$</span>
                        <h2>25.63</h2>
                        <p>monthly</p>
                    </div>
                    <ul class="plan-features">
                        <li class="active">IT Consulting</li>
                        <li>Product Engineering</li>
                        <li>Digital Solutions</li>
                    </ul>
                    <div class="buy-btn">
                        <a href="contact.html" class="theme-btn">Get started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-pricing-plan active">
                    <h3>Regular Plan</h3>
                    <p>Quis autem vel eum iure reprehes derit quin voluptate velite</p>
                    <div class="pricing">
                        <span>$</span>
                        <h2>54.99</h2>
                        <p>monthly</p>
                    </div>
                    <ul class="plan-features">
                        <li class="active">IT Consulting</li>
                        <li class="active">Product Engineering</li>
                        <li>Digital Solutions</li>
                    </ul>
                    <div class="buy-btn">
                        <a href="contact.html" class="theme-btn">Get started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-pricing-plan">
                    <h3>Premium Plan</h3>
                    <p>Quis autem vel eum iure reprehes derit quin voluptate velite</p>
                    <div class="pricing">
                        <span>$</span>
                        <h2>95.75</h2>
                        <p>monthly</p>
                    </div>
                    <ul class="plan-features">
                        <li class="active">IT Consulting</li>
                        <li class="active">Product Engineering</li>
                        <li class="active">Digital Solutions</li>
                    </ul>
                    <div class="buy-btn">
                        <a href="contact.html" class="theme-btn">Get started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-wrapper section-padding">
    <div class="testimonial-bg bg-cover" style="background-image: url('assets/img/testi_bg.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-4 col-xl-5 offset-xl-7">
                <div class="testimonial-carousel-active owl-carousel owl-theme">
                    <div class="single-testimonial">
                        <div class="icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <h2>On the other hand denounc with
                            ghteo indignation and dislike men
                            who so beguiled and demoralized
                            the charms of pleasure the momen
                            blinded by desire cannot foresee
                            the pain and trouble.</h2>
                        <div class="client-info">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                            <div class="client-bio">
                                <h3>Salman Ahmed</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <h2>On the other hand denounc with
                            ghteo indignation and dislike men
                            who so beguiled and demoralized
                            the charms of pleasure the momen
                            blinded by desire cannot foresee
                            the pain and trouble.</h2>
                        <div class="client-info">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                            <div class="client-bio">
                                <h3>Steven M. McLean</h3>
                                <p>UI Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('/layout/blog')

<section class="cta-banner">
    <div class="container-fluid bg-cover section-bg" style="background-image: url('assets/img/cta_bg1.png')">
        <div class="cta-content">
            <div class="row align-items-center">
                <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                    <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                </div>
                <div class="col-xl-5 col-12 text-center text-xl-right">
                    <a href="contact.html" class="theme-btn mt-4 mt-xl-0">Получить консультацию <i class="fas fa-arrow-right"></i></a>
                    <a href="services-details.html" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">узнать больше <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('/layout/footer')

</html>
