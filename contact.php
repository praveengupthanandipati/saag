<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Saag Infinite Creatives</title>
    <meta name="description"
        content="Get in touch with Saag Infinite Creatives. Contact us for courses, services, or collaborations. We're here to help bring your creative vision to life.">
    <?php include 'includes/styles.php'; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <!-- main -->
    <main class="subpage">
        <section class="subpage-header d-flex justify-content-center align-items-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-10">
                        <h1>Let's Create <span class="font-primary">Something Infinite</span></h1>
                        <p class="lead">Get in touch with us for courses, services, or collaborations</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="subpage-body pb-5">
            <div class="custom-container">

                <!-- Contact Information Cards -->
                <div class="row section-spacing g-4">
                    <!-- Address -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="glass-card p-5 rounded-4 text-center h-100">
                            <div class="bg-secondary text-white rounded-circle p-4 d-inline-flex mb-4">
                                <i class="bi bi-geo-alt-fill fs-1"></i>
                            </div>
                            <h3 class="font-primary fw-bold mb-3">Visit Us</h3>
                            <p class="text-muted mb-0">
                                123 Creative Avenue<br>
                                Film City, Mumbai<br>
                                Maharashtra - 400001<br>
                                India
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="glass-card p-5 rounded-4 text-center h-100">
                            <div class="bg-primary text-white rounded-circle p-4 d-inline-flex mb-4">
                                <i class="bi bi-telephone-fill fs-1"></i>
                            </div>
                            <h3 class="font-primary fw-bold mb-3">Call Us</h3>
                            <p class="text-muted mb-2">
                                <a href="tel:+919876543210" class="text-decoration-none text-muted hover-primary">
                                    +91 98765 43210
                                </a>
                            </p>
                            <p class="text-muted mb-0">
                                <a href="tel:+919876543211" class="text-decoration-none text-muted hover-primary">
                                    +91 98765 43211
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="glass-card p-5 rounded-4 text-center h-100">
                            <div class="bg-warning text-dark rounded-circle p-4 d-inline-flex mb-4">
                                <i class="bi bi-envelope-fill fs-1"></i>
                            </div>
                            <h3 class="font-primary fw-bold mb-3">Email Us</h3>
                            <p class="text-muted mb-2">
                                <a href="mailto:info@saaginfinite.com"
                                    class="text-decoration-none text-muted hover-primary">
                                    info@saaginfinite.com
                                </a>
                            </p>
                            <p class="text-muted mb-0">
                                <a href="mailto:courses@saaginfinite.com"
                                    class="text-decoration-none text-muted hover-primary">
                                    courses@saaginfinite.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="row section-spacing">
                    <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                        <span class="text-secondary fw-bold text-uppercase letter-spacing-2">Get In Touch</span>
                        <h2 class="display-5 fw-bold font-primary mt-2">Send Us A Message</h2>
                        <p class="fs-5 text-muted mt-3">Fill out the form below and we'll get back to you as soon as
                            possible</p>
                    </div>

                    <div class="col-lg-10 offset-lg-1" data-aos="fade-up">
                        <div class="glass-card p-5 rounded-4">
                            <form id="contactForm" method="POST" action="contact_handler.php">
                                <div class="row g-4">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-bold">
                                            Name <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control form-control-lg rounded-3" id="name"
                                            name="name" placeholder="Enter your full name" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control form-control-lg rounded-3" id="email"
                                            name="email" placeholder="Enter your email address">
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label fw-bold">
                                            Phone Number <span class="text-danger">*</span>
                                        </label>
                                        <input type="tel" class="form-control form-control-lg rounded-3" id="phone"
                                            name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}"
                                            required>
                                        <small class="text-muted">Enter 10-digit mobile number</small>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-md-6">
                                        <label for="subject" class="form-label fw-bold">Subject</label>
                                        <select class="form-select form-select-lg rounded-3" id="subject"
                                            name="subject">
                                            <option value="" selected>Select a subject</option>
                                            <option value="Course Inquiry">Course Inquiry</option>
                                            <option value="Service Inquiry">Service Inquiry</option>
                                            <option value="Collaboration">Collaboration</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <!-- Message -->
                                    <div class="col-12">
                                        <label for="message" class="form-label fw-bold">Message</label>
                                        <textarea class="form-control form-control-lg rounded-3" id="message"
                                            name="message" rows="6"
                                            placeholder="Tell us about your project or inquiry..."></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 text-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold">
                                            <i class="bi bi-send-fill me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Business Hours & Social Media -->
                <div class="row section-spacing g-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="glass-panel p-5 rounded-4 h-100">
                            <h3 class="font-primary fw-bold mb-4">
                                <i class="bi bi-clock text-secondary me-2"></i>Business Hours
                            </h3>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Monday - Friday</span>
                                        <span class="text-muted">9:00 AM - 7:00 PM</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Saturday</span>
                                        <span class="text-muted">10:00 AM - 6:00 PM</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">Sunday</span>
                                        <span class="text-muted">Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="glass-panel p-5 rounded-4 h-100">
                            <h3 class="font-primary fw-bold mb-4">
                                <i class="bi bi-share text-secondary me-2"></i>Follow Us
                            </h3>
                            <p class="text-muted mb-4">Stay connected with us on social media for updates,
                                behind-the-scenes content, and creative inspiration.</p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-secondary rounded-circle p-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-facebook fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle p-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-instagram fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle p-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-youtube fs-5"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary rounded-circle p-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-linkedin fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Section -->
                <div class="row section-spacing">
                    <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                        <span class="text-secondary fw-bold text-uppercase letter-spacing-2">Find Us</span>
                        <h2 class="display-5 fw-bold font-primary mt-2">Our Location</h2>
                        <p class="fs-5 text-muted mt-3">Visit our studio and experience creativity in action</p>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <!-- Google Map Embed -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.9373516568847!2d72.8776559!3d19.0759837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact CTA -->
                <div class="row section-spacing justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <div class="cta-box p-5 rounded-5 text-center text-white position-relative overflow-hidden"
                            style="background: linear-gradient(135deg, #460100 0%, #c44800 100%);">
                            <div class="position-relative z-1">
                                <h2 class="display-5 fw-bold mb-3">Ready To Start Your Creative Journey?</h2>
                                <p class="fs-5 mb-4 text-white-50 mx-auto" style="max-width: 700px;">
                                    Whether you want to enroll in a course or book our services, we're here to help you
                                    bring your vision to life.
                                </p>
                                <div class="d-flex justify-content-center gap-3 flex-wrap">
                                    <a href="tel:+919876543210"
                                        class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-bold">
                                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                                    </a>
                                    <a href="mailto:info@saaginfinite.com"
                                        class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">
                                        <i class="bi bi-envelope-fill me-2"></i>Email Us
                                    </a>
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

    <!-- Form Validation Script -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();

            // Validate required fields
            if (!name) {
                alert('Please enter your name');
                document.getElementById('name').focus();
                return false;
            }

            if (!phone) {
                alert('Please enter your phone number');
                document.getElementById('phone').focus();
                return false;
            }

            // Validate phone number format (10 digits)
            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phone)) {
                alert('Please enter a valid 10-digit phone number');
                document.getElementById('phone').focus();
                return false;
            }

            // If validation passes, you can submit the form
            alert('Thank you for contacting us! We will get back to you soon.');
            // this.submit(); // Uncomment when you have a backend handler
            this.reset(); // Reset form after submission
        });
    </script>
</body>

</html>