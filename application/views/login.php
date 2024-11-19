<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'Travel Website'; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets_front/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets_front/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets_front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets_front/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets_front/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    


   


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Login</h1>

                        <?php if ($this->session->flashdata('success')): ?>
                            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('error')): ?>
                            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                        <?php endif; ?>
                        
                        <form method="post" action="<?php echo base_url('user/login'); ?>">
                            <div class="row g-3">                                
                                <div class="col-12">
                                    <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" name="username" id="username" placeholder="Your Username" value="<?=set_value('username')?>">
                                    <label for="username">Your Username</label>
                                    <?php $username_err = form_error('username'); if(isset($username_err)) { ?>
                                    <span style="color:red"><?php echo $username_err; ?></span>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" name="password" id="password" placeholder="Your Password" value="<?=set_value('password')?>">
                                    <label for="password">Your Password</label>
                                    <?php $password_err = form_error('password'); if(isset($password_err)) { ?>
                                    <span style="color:red"><?php echo $password_err; ?></span>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-1.jpg') ?>" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-2.jpg') ?>" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-3.jpg') ?>" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-2.jpg') ?>" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-3.jpg') ?>" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('assets_front/img/package-1.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets_front/lib/wow/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/easing/easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/tempusdominus/js/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
    <script src="<?php echo base_url('assets_front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets_front/js/main.js') ?>"></script>
</body>

</html>