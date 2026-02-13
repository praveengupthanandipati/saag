<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saag - Green Matte Studio & Dubbing Room</title>
    <?php include 'includes/styles.php'; ?>
    <style>
        /* Hover effects for service cards */
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }

        .service-card:hover .icon-box {
            transform: scale(1.1) rotate(5deg);
        }

        .icon-box {
            transition: all 0.3s ease;
        }

        /* Equipment card hover effects */
        .equipment-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .equipment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(196, 72, 0, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .equipment-card:hover::before {
            left: 100%;
        }

        .equipment-card:hover {
            border-color: #c44800 !important;
        }

        /* Feature list hover effects */
        .feature-item {
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 8px;
        }

        .feature-item:hover {
            background: rgba(196, 72, 0, 0.05);
            transform: translateX(10px);
        }

        /* CTA button pulse animation */
        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(196, 72, 0, 0.7);
            }

            50% {
                box-shadow: 0 0 0 15px rgba(196, 72, 0, 0);
            }
        }

        .pulse-btn {
            animation: pulse 2s infinite;
        }

        /* Image overlay effect */
        .image-overlay-card {
            position: relative;
            overflow: hidden;
        }

        .image-overlay-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(70, 1, 0, 0.3), rgba(196, 72, 0, 0.3));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .image-overlay-card:hover::after {
            opacity: 1;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <!-- main -->
    <main class="subpage">

        <section class="subpage-header d-flex justify-content-center align-items-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-9">
                        <h1>Green Matte Studio <span class="font-primary">& Dubbing Room</span></h1>
                        <p class="lead">Our professionally equipped Green Matte Studio is built for creators, educators,
                            filmmakers, and brands who want high-quality visual production.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="subpage-body pb-5">
            <div class="custom-container">

                <!-- Intro Section -->
                <div class="row section-spacing align-items-center">
                    <div class="col-lg-10 mx-auto text-center mb-5" data-aos="fade-up">
                        <span class="text-uppercase text-secondary fw-bold letter-spacing-2">Professional Production
                            Facility</span>
                        <h2 class="display-4 fw-bold mt-2 mb-4 text-gradient-primary">Create Stunning Visual Content
                            with Professional Studio Setup</h2>
                        <p class="lead fs-4 text-muted mx-auto" style="max-width: 900px;">
                            From green screen video production to crystal-clear voice recording, our state-of-the-art
                            facilities provide everything you need to bring your creative vision to life.
                        </p>
                    </div>
                </div>

                <!-- Green Matte Studio Section -->
                <div class="row section-spacing align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <span class="text-uppercase text-secondary fw-bold letter-spacing-2">Green Matte Studio</span>
                        <h3 class="display-5 fw-bold font-primary mt-2 mb-4">Professional <span
                                class="text-gradient-primary">Green Screen Studio</span></h3>
                        <p class="fs-5 text-muted mb-4">
                            Our green matte studio is equipped with professional lighting, high-quality cameras, and
                            advanced chroma key technology for seamless background replacement and visual effects.
                        </p>
                        <ul class="creative-list fs-5 text-muted mb-4">
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Video shoots for ads, reels,
                                films & corporate videos</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Background replacement &
                                visual effects-ready setup</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Content creation for
                                YouTube,
                                Instagram & digital platforms</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Educational videos & online
                                course production</li>
                        </ul>
                        <a href="contact.php" class="primary-btn rounded-pill px-5 py-3 pulse-btn">Book Studio Time</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="position-relative image-overlay-card">
                            <img src="img/saag_studio_collage.png" alt="Green Matte Studio"
                                class="img-fluid rounded-4 shadow-lg">
                            <div class="position-absolute bottom-0 start-0 m-4 bg-white p-4 rounded-4 shadow-sm"
                                style="max-width: 300px;">
                                <h5 class="font-primary fw-bold mb-2">Professional Equipment</h5>
                                <p class="text-muted small mb-0">4K cameras, professional lighting, and advanced chroma
                                    key technology</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Green Matte Studio Services Cards -->
                <div class="row section-spacing g-4">
                    <div class="col-lg-12 text-center mb-4" data-aos="fade-up">
                        <h3 class="display-5 fw-bold font-primary">Green Matte Studio Services</h3>
                        <p class="fs-5 text-muted mx-auto" style="max-width: 700px;">
                            Comprehensive video production services for all your creative needs
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-camera-video fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Commercial Video Production</h5>
                            <p class="text-muted small">High-quality video shoots for advertisements, promotional
                                content, and brand campaigns with professional green screen capabilities.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-film fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Social Media Content</h5>
                            <p class="text-muted small">Create engaging reels, shorts, and videos for Instagram,
                                YouTube,
                                and TikTok with stunning visual effects and backgrounds.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-mortarboard fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Educational Content</h5>
                            <p class="text-muted small">Professional video production for online courses, training
                                materials, and educational content with customizable backgrounds.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-building fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Corporate Videos</h5>
                            <p class="text-muted small">Professional corporate presentations, training videos, and
                                internal communications with polished, broadcast-quality production.</p>
                        </div>
                    </div>
                </div>

                <!-- Divider Section -->
                <div class="row section-spacing">
                    <div class="col-12">
                        <hr class="my-5" style="border-top: 2px solid #e0e0e0;">
                    </div>
                </div>

                <!-- Dubbing & Voice Recording Section -->
                <div class="row section-spacing align-items-center g-5">
                    <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                        <span class="text-uppercase text-secondary fw-bold letter-spacing-2">Dubbing & Voice
                            Recording</span>
                        <h3 class="display-5 fw-bold font-primary mt-2 mb-4">Professional <span
                                class="text-gradient-primary">Sound Recording Studio</span></h3>
                        <p class="fs-5 text-muted mb-4">
                            Our sound-treated dubbing room delivers crystal-clear audio recording with
                            professional-grade
                            equipment and acoustic treatment for perfect voice capture.
                        </p>
                        <ul class="creative-list fs-5 text-muted mb-4">
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Professional sound-treated
                                dubbing room</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Voiceovers for ads, films,
                                reels & podcasts</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Clean audio recording for
                                YouTube & online content</li>
                            <li class="mb-3 feature-item"><i
                                    class="bi bi-check-circle-fill text-secondary me-2"></i>Multilingual voice recording
                                support</li>
                        </ul>
                        <a href="contact.php" class="primary-btn rounded-pill px-5 py-3 mt-3">Book Recording Session</a>
                    </div>
                    <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                        <div class="position-relative image-overlay-card">
                            <img src="img/creative_abstract_hero.png" alt="Dubbing Studio"
                                class="img-fluid rounded-4 shadow-lg">
                            <div class="position-absolute top-50 end-0 translate-middle-y me-n4">
                                <div class="bg-white rounded-4 p-4 shadow-lg" style="max-width: 250px;">
                                    <h6 class="font-primary fw-bold mb-2 text-secondary">Studio-Grade Audio</h6>
                                    <p class="text-muted small mb-0">Professional microphones and acoustic treatment for
                                        broadcast-quality sound</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dubbing Services Cards -->
                <div class="row section-spacing g-4">
                    <div class="col-lg-12 text-center mb-4" data-aos="fade-up">
                        <h3 class="display-5 fw-bold font-primary">Voice Recording Services</h3>
                        <p class="fs-5 text-muted mx-auto" style="max-width: 700px;">
                            Professional audio recording for all your voice and dubbing needs
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-mic fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Commercial Voiceovers</h5>
                            <p class="text-muted small">Professional voice recording for TV commercials, radio ads, and
                                digital marketing campaigns with studio-quality sound.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-broadcast fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Podcast Recording</h5>
                            <p class="text-muted small">Crystal-clear podcast recording with professional audio
                                processing, editing, and mastering for all platforms.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-translate fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">Multilingual Dubbing</h5>
                            <p class="text-muted small">Professional dubbing services in multiple languages for films,
                                videos, and content localization projects.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="saag-card glass-card service-card h-100 p-4 rounded-4 shadow-sm border-0 text-center">
                            <div class="icon-box mb-3 text-secondary">
                                <i class="bi bi-youtube fs-1"></i>
                            </div>
                            <h5 class="font-primary fw-bold mb-3">YouTube Narration</h5>
                            <p class="text-muted small">Professional narration and voiceover recording for YouTube
                                videos, documentaries, and online content creation.</p>
                        </div>
                    </div>
                </div>

                <!-- Studio Equipment Section -->
                <div class="row section-spacing g-4">
                    <div class="col-lg-12 text-center mb-4" data-aos="fade-up">
                        <h3 class="display-5 fw-bold font-primary">Professional Equipment & Facilities</h3>
                        <p class="fs-5 text-muted mx-auto" style="max-width: 700px;">
                            State-of-the-art equipment for broadcast-quality production
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-camera-reels fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">4K Video Cameras</h5>
                                    <p class="text-muted small mb-0">Professional cinema-grade cameras with 4K
                                        resolution
                                        for ultra-high-definition video production.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-lightbulb fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">Professional Lighting</h5>
                                    <p class="text-muted small mb-0">Advanced LED lighting systems with adjustable color
                                        temperature for perfect illumination.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-grid-3x3 fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">Chroma Key Setup</h5>
                                    <p class="text-muted small mb-0">Professional green screen with even lighting for
                                        seamless background replacement and VFX.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-soundwave fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">Studio Microphones</h5>
                                    <p class="text-muted small mb-0">Condenser and dynamic microphones for pristine
                                        audio
                                        capture in any recording scenario.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-volume-up fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">Acoustic Treatment</h5>
                                    <p class="text-muted small mb-0">Professional sound-treated room with acoustic
                                        panels
                                        for echo-free, broadcast-quality audio.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="equipment-card glass-panel p-4 rounded-4 border-2 border-light">
                            <div class="d-flex align-items-start">
                                <div class="icon-box me-3 text-secondary">
                                    <i class="bi bi-pc-display fs-2"></i>
                                </div>
                                <div>
                                    <h5 class="font-primary fw-bold mb-2">Editing Workstations</h5>
                                    <p class="text-muted small mb-0">High-performance editing systems with professional
                                        software for post-production work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Perfect For Section -->
                <div class="row section-spacing">
                    <div class="col-lg-10 mx-auto" data-aos="fade-up">
                        <div
                            class="glass-panel p-5 rounded-5 border-0 bg-white shadow-sm position-relative overflow-hidden">
                            <div class="floating-shape bg-warning opacity-10"
                                style="width: 200px; height: 200px; top: -50px; right: -50px;"></div>
                            <div class="row align-items-center">
                                <div class="col-lg-5 mb-4 mb-lg-0">
                                    <h3 class="display-6 fw-bold font-primary mb-3">Perfect For</h3>
                                    <p class="text-muted">Our studio facilities are designed for a wide range of
                                        creative
                                        professionals and content creators.</p>
                                </div>
                                <div class="col-lg-7">
                                    <ul class="list-unstyled creative-list">
                                        <li class="mb-3">
                                            <strong class="font-primary">Content Creators:</strong> YouTubers, Instagram
                                            influencers, and digital content producers creating engaging video content.
                                        </li>
                                        <li class="mb-3">
                                            <strong class="font-primary">Brands & Agencies:</strong> Marketing teams and
                                            advertising agencies producing commercial content and brand campaigns.
                                        </li>
                                        <li class="mb-3">
                                            <strong class="font-primary">Educators & Trainers:</strong> Online course
                                            creators, teachers, and corporate trainers developing educational materials.
                                        </li>
                                        <li>
                                            <strong class="font-primary">Filmmakers & Producers:</strong> Independent
                                            filmmakers, video producers, and production houses creating professional
                                            content.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="row section-spacing g-4" data-aos="fade-up">
                    <div class="col-lg-3 col-md-6">
                        <div class="glass-panel p-4 rounded-4 text-center">
                            <h2 class="display-4 fw-bold text-secondary mb-2">4K</h2>
                            <p class="text-muted mb-0">Video Resolution</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="glass-panel p-4 rounded-4 text-center">
                            <h2 class="display-4 fw-bold text-secondary mb-2">100%</h2>
                            <p class="text-muted mb-0">Sound Treated</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="glass-panel p-4 rounded-4 text-center">
                            <h2 class="display-4 fw-bold text-secondary mb-2">500+</h2>
                            <p class="text-muted mb-0">Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="glass-panel p-4 rounded-4 text-center">
                            <h2 class="display-4 fw-bold text-secondary mb-2">24/7</h2>
                            <p class="text-muted mb-0">Booking Available</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="row section-spacing justify-content-center" data-aos="zoom-in">
                    <div class="col-lg-10">
                        <div class="cta-box p-5 rounded-5 text-center text-white position-relative overflow-hidden"
                            style="background: linear-gradient(135deg, #460100 0%, #c44800 100%);">
                            <div class="position-relative z-1">
                                <h2 class="display-4 fw-bold mb-3">Ready to Create Professional Content?</h2>
                                <p class="fs-5 mb-4 text-white-50 mx-auto" style="max-width: 700px;">
                                    Book our Green Matte Studio or Dubbing Room today and bring your creative vision to
                                    life with professional-grade equipment and facilities. Perfect for content creators,
                                    brands, trainers, influencers, and filmmakers.
                                </p>
                                <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                                    <a href="contact.php"
                                        class="btn btn-light rounded-pill px-5 py-3 fw-bold text-primary shadow-lg transition-hover">Book
                                        Studio Now</a>
                                    <a href="contact.php"
                                        class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold transition-hover">Get
                                        Pricing Details</a>
                                </div>
                                <div class="mt-5 pt-3 border-top border-white-50 mx-auto" style="max-width: 400px;">
                                    <small class="text-uppercase letter-spacing-2">Saag Infinite Creatives — Your
                                        Professional Production Partner</small>
                                </div>
                            </div>
                            <!-- Decorative circles -->
                            <div class="position-absolute top-0 start-0 translate-middle rounded-circle bg-white opacity-10"
                                style="width: 300px; height: 300px;"></div>
                            <div class="position-absolute bottom-0 end-0 translate-middle-x rounded-circle bg-warning opacity-10"
                                style="width: 200px; height: 200px;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- footer -->
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>