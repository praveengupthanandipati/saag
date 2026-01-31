<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saag</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png" />
    <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <!--/ styles -->
    <script>
        // Header: add or remove class on scroll
    </script>
</head>

<body>

    <!-- header -->
    <div id="load"></div>
    <!-- header-->
    <header class="fixed-top">
        <div class="custom-container">
            <div class="navbar navbar-expand-xl py-0" aria-label="Offcanvas navbar large">
                <a class="navbar-brand p-0 m-0" href="index.php">
                    <img src="img/logo.svg" alt="b1 Onluine Trainings" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                    aria-controls="offcanvasNavbar2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end justify-content-lg-end" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
                            <img src="img/logo.png" alt="" />
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav m-auto cetnter-nav">
                            <?php
                            $current_page = basename($_SERVER['PHP_SELF']);
                            function isActive($page, $current_page)
                            {
                                return ($page == $current_page) ? 'active-nav' : 'nav-link';
                            }
                            ?>
                            <li class="nav-item">
                                <a class="<?= isActive('index.php', $current_page) ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= isActive('about.php', $current_page) ?>" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Short-Term Courses</a></li>
                                    <li><a class="dropdown-item" href="#">Long-Term Courses</a></li>
                                    <li><a class="dropdown-item" href="#">Career Counselling</a></li>
                                    <li><a class="dropdown-item" href="#">Entrance Preparation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Production
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Print Media</a></li>
                                    <li><a class="dropdown-item" href="#">VFX</a></li>
                                    <li><a class="dropdown-item" href="#">Advertising & Digital Marketing</a></li>
                                    <li><a class="dropdown-item" href="#">Rental Desk & Creative Workspace</a></li>
                                    <li><a class="dropdown-item" href="#">Green Matte Studio & Dubbing Room</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="<?= isActive('contact.php', $current_page) ?>" href="contact.php">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= isActive('contact.php', $current_page) ?>" href="contact.php">Admissions</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Courses
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Photography</a></li>
                                    <li><a class="dropdown-item" href="#">Videography & Editing</a></li>
                                    <li><a class="dropdown-item" href="#">Smartphone Cinematography</a></li>
                                    <li><a class="dropdown-item" href="#"> Content Creation</a></li>
                                    <li><a class="dropdown-item" href="#">Dubbing & Voice Recording</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=+919542520797&text=Hi"
                                    class="whatsappicon">
                                    <img src="img/whatsapp.png" alt="" />
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="primary-btn d-inline-block ms-2 text-uppercase" href="#"> Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-->

    <!-- main -->
    <main>
        <!-- hero section -->
        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-7">
                        <article>
                            <h1>Unlock the ultimate where creativity becomes history.</h1>
                            <p>Saag Infinite Creatives is a multidisciplinary creative studio, learning hub, and production space designed for artists, brands, students, creators, and businesses who want more than just services — they want impact. </p>
                        </article>
                    </div>
                </div>

            </div>
            <div class="right-pattern"><img src="img/right-pattern.png" alt=""></div>
            <div class="bulbimg"><img src="img/bulbs.png" alt=""></div>
        </section>

        <!-- services -->
        <section class="home-services section-spacing">
            <div class="custom-container">
                <div class="title-section">
                    <h5 class="font-primary">What We Do</h5>
                    <h2 class="font-bold">Build your bold ideas with SAAG</h2>
                </div>
                <div class="row pt-2 pt-lg-5">
                    <div class="col-lg-6">
                        <div class="video-pop">
                            <a href="#" class="video-btn text-center d-flex flex-column justify-content-center align-items-center">
                                <i class="fi fi-brands-youtube h1"></i>
                                <h4>Watch our video</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <a class="service-col" href="#">
                                    <figure>
                                        <img src="img/shortterm-home-service-img.jpg" alt="" class="img-fluid w-100">
                                    </figure>
                                    <h5>Short-Term Creative Courses</h5>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a class="service-col" href="#">
                                    <figure>
                                        <img src="img/career-counselling.jpg" alt="" class="img-fluid w-100">
                                    </figure>
                                    <h5>Career Counselling</h5>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a class="service-col" href="#">
                                    <figure>
                                        <img src="img/entrance-preparation-home.jpg" alt="" class="img-fluid w-100">
                                    </figure>
                                    <h5>Entrance Preparation</h5>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a class="service-col" href="#">
                                    <figure>
                                        <img src="img/long-term-coaching.jpg" alt="" class="img-fluid w-100">
                                    </figure>
                                    <h5>Long Term Coaching</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 pt-lg-4">
                    <div class="col-lg-3">
                        <a class="service-col" href="#">
                            <figure>
                                <img src="img/greenmatt-studio-home-img.jpg" alt="" class="img-fluid w-100">
                            </figure>
                            <h5>Green Matte Studio & Dubbing Room</h5>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a class="service-col" href="#">
                            <figure>
                                <img src="img/rental-desk-home.jpg" alt="" class="img-fluid w-100">
                            </figure>
                            <h5>Rental Desk & Creative Workspace</h5>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a class="service-col" href="#">
                            <figure>
                                <img src="img/print-production-home-img.jpg" alt="" class="img-fluid w-100">
                            </figure>
                            <h5>Print, Production & Creative Services</h5>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a class="service-col" href="#">
                            <figure>
                                <img src="img/advertising-home-img.jpg" alt="" class="img-fluid w-100">
                            </figure>
                            <h5>Advertising & Digital Marketing</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- why choose -->
        <section class="whychoose-home">
            <div class="custom-container">

                <h4>Why Choose Saag Infinite Creatives?</h4>

                <div class="row pt-4 mt-5 border-top">
                    <div class="col-lg-5">
                        <div class="title-section">
                            <h2 class="font-bold"><span class="font-primary">We collaborate </span> with clients to achieve design solutions.</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 align-self-center offset-lg-1">
                        <ul class="pb-3">
                            <li>One-stop solution for learning, creating & producing </li>
                            <li>Industry-relevant training & services </li>
                            <li>Professional infrastructure & creative environment </li>
                            <li>Experienced mentors & creative professionals </li>
                            <li>Designed for students, creators, brands & businesses</li>
                        </ul>
                        <a href="javascript:void(0)" class="primary-btn">Read more about us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- courses -->
         <section class="home-courses section-spacing">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-6">
                          <div class="title-section">
                                <h5 class="font-primary">Our Popular Masterclasses</h5>
                                <h2 class="font-bold"><span class="font-primary">Learn the skills</span> that shape the creative industry today.</h2>
                          </div>
                    </div>
                </div>
            </div>
         </section>
    </main>

    <!-- footer -->
    <footer></footer>
    <!-- scripts -->
    <!--[if lte IE 9]>
      <script src="js/ie.lteIE9.js"></script>
    <![endif]-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>
    <!--/ scripts -->
</body>

</body>

</html>