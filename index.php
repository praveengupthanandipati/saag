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
    <!--/ styles -->
</head>
<body>

<!-- header -->
    <div id="load"></div>
<!-- header-->
<header class="fixed-top">
    <div class="custom-container">
        <div class="navbar navbar-expand-xl py-0" aria-label="Offcanvas navbar large">
            <a class="navbar-brand" href="index.php">
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
                            function isActive($page, $current_page) {
                                return ($page == $current_page) ? 'active-nav' : 'nav-link';
                            }
                        ?>
                        <li class="nav-item">
                            <a class="<?= isActive('index.php', $current_page) ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= isActive('about.php', $current_page) ?>" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= isActive('services.php', $current_page) ?>" href="services.php">Services</a>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="<?= isActive('payment-methods.php', $current_page) ?>" href="payment-methods.php">Production</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= isActive('contact.php', $current_page) ?>" href="contact.php">Careers</a>
                        </li>
                         <li class="nav-item">
                            <a class="<?= isActive('contact.php', $current_page) ?>" href="contact.php">Admissions</a>
                        </li>
                         <li class="nav-item">
                            <a class="<?= isActive('contact.php', $current_page) ?>" href="contact.php">Courses</a>
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
                            <a class="primary-btn d-inline-block ms-2" href="#"> Get Started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-->

 <!-- main -->
    <main></main>

<!-- footer -->
    <footer></footer>


   <!-- scripts -->
    <!--[if lte IE 9]>
      <script src="js/ie.lteIE9.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>
    <!--/ scripts -->
   </body>
    
</body>
</html>