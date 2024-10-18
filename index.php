<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "inc/common-meta-tags.php";?>

    <title>Company Title </title>

    <?php include_once "inc/common-stylings.php";?>

    <link rel="stylesheet" href="<?php echo HOST_BASE_URL; ?>assets/css/pages/home/style.css">
</head>

<body>
    <?php include_once "inc/navbar.php";?>

    <!-- Hero Section Start -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title text-sm-start text-center">
                            <h3>About Our Company</h3>
                            <h1>Web Design, SEO & Internet Marketing For Your <span> <img
                                        src="<?php echo HOST_BASE_URL; ?>assets/images/hero-text-icon.svg" /></span>
                                Business</h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Body Start -->
                        <div class="hero-body">
                            <p class="text-sm-start text-center">Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae ab illo veritatis et quasi architecto beatae vitae dicta sunt.</p>
                        </div>
                        <!-- Hero Body End -->

                        <!-- Hero Footer Start -->
                        <div class="hero-footer text-sm-start text-center">
                            <a href="#" class="btn-default">Get Started</a>
                        </div>
                        <!-- Hero Footer End -->
                    </div>
                    <!-- Hero Left Content End -->
                </div>

                <div class="col-lg-5">
                    <!-- Hero  Image Start -->
                    <div class="hero-image hero-shadow mt-4 mt-sm-0">
                        <picture>
                            <source type="image/webp"
                                srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/hero-images/home-hero-image.webp" />
                            <source type="image/png"
                                srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/hero-images/home-hero-image.png" />
                            <img loading="lazy"
                                src="<?php echo ASSETS_BASE_URL; ?>assets/images/hero-images/home-hero-image.png"
                                class="img-fluid" alt="Home Hero image">
                        </picture>
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Who We are Section End -->
    <div class="who-we-are-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center ">
                        <h3>Who we are</h3>
                        <h2>Websites that tell your brand's story</h2>
                    </div>
                    <p class="text-center col-md-9 mx-auto">It is a long established fact that a reader will be
                        distracted by the
                        readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                        a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English.
                    </p>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Who We are Image Start -->
                    <div class="who-we-are-image">
                        <div class="who-we-are-img">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/home/who-we-are-image.webp" />
                                <source type="image/png"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/home/who-we-are-image.png" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/home/who-we-are-image.png"
                                    class="img-fluid" alt="Who we are image">
                            </picture>
                        </div>

                    </div>
                    <!-- Who We are Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Who We are Content Start -->
                    <div class="who-we-are-content">
                        <ul>
                            <li>Ease of Scalability</li>
                            <li>Instant Impact</li>
                            <li>Expertise and Experience</li>
                            <li>Time Zone Aligned</li>
                            <li>Full Flexibility</li>
                            <li>Proactive Support</li>
                        </ul>

                        <p class="text-sm-start text-center">Many desktop publishing packages and web page editors now
                            use Lorem Ipsum as their default
                            model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                            infancy.</p>
                        <div class="text-sm-start text-center"> <a href="#" class="btn-default">CTA Button</a>
                        </div>
                    </div>
                    <!-- Who We are Content End -->
                </div>
            </div>


        </div>
    </div>
    <!-- Who We are Section End -->



    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h3>our services</h3>
                        <h2>What we can offer today</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row section-row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>web development</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item" data-wow-delay="0.5s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Digital Marketing</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item" data-wow-delay="0.75s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Game Development</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item" data-wow-delay="1s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Mobile App Development</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item" data-wow-delay="1.25s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Networking Services</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item" data-wow-delay="1.5s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Graphics Design</h2>
                                <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                        </div>
                        <div class="service-image">
                            <picture>
                                <source type="image/webp"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.webp" />
                                <source type="image/jpg"
                                    srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg" />
                                <img loading="lazy"
                                    src="<?php echo ASSETS_BASE_URL; ?>assets/images/services/web-devlopment.jpg"
                                    class="img-fluid" alt="web devlopment image">
                            </picture>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn-default">View All Services</a>
                </div>
            </div>


        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h3>Why Choose US</h3>
                        <h2>Why you should choose us?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item">
                        <div class="icon-image-item">
                            <img src="assets/images/home/wave-round.svg" alt="">
                        </div>
                        <div class="icon-box">
                            <img src="assets/images/home/icon-whyus-1.svg" alt="">
                        </div>
                        <h3>innovation</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item">
                        <div class="icon-image-item">
                            <img src="assets/images/home/wave-round.svg" alt="">
                        </div>
                        <div class="icon-box">
                            <img src="assets/images/home/icon-whyus-2.svg" alt="">
                        </div>
                        <h3>quality-focused</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item">
                        <div class="icon-image-item">
                            <img src="assets/images/home/wave-round.svg" alt="">
                        </div>
                        <div class="icon-box">
                            <img src="assets/images/home/icon-whyus-3.svg" alt="">
                        </div>
                        <h3>value for money</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

            </div>

        </div>
    </div>
    <!-- Choose Us Section End -->


    <!-- ----Got a Idea Start---- -->

    <div class="got-an-idea">
        <div class="container">
            <div class="row align-items-center got-an-idea-box">
                <div class="col-lg-7">
                    <div class="got-an-idea-body">
                        <!-- Section Title Start -->
                        <div class="section-title text-center">
                            <h2>Got a idea in mind?</h2>
                            <p>Reach out and we’ll get in touch as soon as possible.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- ---form section start-- -->
                        <div class="form-body">
                            <form action="">
                                <!-- ---row start-- -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="firstname"
                                                placeholder="Your first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="lastname"
                                                placeholder="Your last name">
                                        </div>

                                    </div>
                                </div>
                                <!-- ---row end-- -->
                                <!-- ---row start-- -->
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="firstname"
                                                placeholder="Your email address">
                                        </div>
                                    </div>

                                </div>
                                <!-- ---row End-- -->

                                <!-- ---row start-- -->
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control text-area-controal" id="message" rows="3"
                                                placeholder="Write message..."></textarea>
                                        </div>
                                    </div>

                                </div>
                                <!-- ---row End-- -->

                                <!-- ---row start-- -->
                                <div class="row section-row">
                                    <div class="col-md-12"> <label for="services" class="form-label">Services</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="web-development">
                                            <label class="form-check-label" for="web-development">
                                                Web Development
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="digital-marketing">
                                            <label class="form-check-label" for="digital-marketing">
                                                Digital Marketing
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="mobile-app-development">
                                            <label class="form-check-label" for="mobile-app-development">
                                                Mobile App Development
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="networking-services">
                                            <label class="form-check-label" for="networking-services">
                                                Networking Services
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="graphics-design">
                                            <label class="form-check-label" for="graphics-design">
                                                Graphics Design
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="game-development">
                                            <label class="form-check-label" for="game-development">
                                                Game Development
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <!-- ---row End-- -->

                                <!-- ---row start-- -->
                                <div class="row section-row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default form-sub-btn">Send Message</button>
                                    </div>
                                </div>
                                <!-- ---row End-- -->
                            </form>
                        </div>
                        <!-- ---form section End-- -->

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="got-an-idea-image">
                        <picture>
                            <source type="image/webp"
                                srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/home/got-and-idea.webp" />
                            <source type="image/jpg"
                                srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/home/got-and-idea.png" />
                            <img loading="lazy" src="<?php echo ASSETS_BASE_URL; ?>assets/images/home/got-and-idea.png"
                                class="img-fluid" alt="web devlopment image">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----Got a Idea End---- -->
    <!-- Footer Start -->
    <?php include_once "inc/footer.php";?>
    <!-- Footer End -->


    <?php include_once "inc/common-scripts.php";?>

</body>

</html>