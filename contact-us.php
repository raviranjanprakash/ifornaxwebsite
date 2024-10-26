<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "inc/common-meta-tags.php";?>

    <title>About us page</title>

    <?php include_once "inc/common-stylings.php";?>

    <link rel="stylesheet" href="<?php echo HOST_BASE_URL; ?>assets/css/pages/contact-us/style.css">
</head>

<body>
    <?php include_once "inc/navbar.php";?>


    <!-- =========contact us page wrap start======= -->
    <div class="contact-wrapper">
        <!-- =============Bradcom Section start============= -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============Bradcom Section End============= -->

        <!-- ============Contact us Form Wrap Start======== -->
        <div class="form-wrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- =========Form Box wrap==== -->
                        <div class="form-box-wrap">

                        <div class="box-side-image">
                        <picture>
                            <source type="image/svg"
                                srcset="<?php echo ASSETS_BASE_URL; ?>assets/images/contact-us-icon.png" />
                            <img loading="lazy"
                                src="<?php echo ASSETS_BASE_URL; ?>assets/images/contact-us-icon.svg"
                                class="img-fluid" alt="About Hero image 1">
                        </picture>
                        </div>


                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h1 class="col-md-5">Have questions? We're here to help!</h1>
                                <p class="mt-3">Feel free to reach out to our friendly support team</p>
                            </div>
                            <!-- Section Title End -->
                            <!-- ---form section start-- -->
                            <div class="form-body">
                                <form action="">
                                    <!-- ---row start-- -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="yourname" class="form-label">Your name</label>
                                                <input type="text" class="form-control" id="yourname"
                                                    placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="youremail" class="form-label">Your Email</label>
                                                <input type="email" class="form-control" id="youremail"
                                                    placeholder="Your email address">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- ---row end-- -->

                                    <!-- ---row start-- -->
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control text-area-controal" id="message" rows="3"
                                                    placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- ---row End-- -->



                                    <!-- ---row start-- -->
                                    <div class="row section-row mt-4">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default form-sub-btn">Send</button>
                                        </div>
                                    </div>
                                    <!-- ---row End-- -->
                                </form>
                            </div>
                            <!-- ---form section End-- -->
                        </div>
                        <!-- =========Form Box End==== -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============Contact us Form Wrap End======== -->

    </div>
    <!-- =========contact us page wrap end======= -->







    <!-- Footer Start -->
    <?php include_once "inc/footer.php";?>
    <!-- Footer End -->


    <?php include_once "inc/common-scripts.php";?>

</body>

</html>