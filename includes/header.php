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
                                <li><a class="dropdown-item" href="shortterm-courses.php">Short-Term Courses</a></li>
                                <li><a class="dropdown-item" href="#">Long-Term Coaching</a></li>
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