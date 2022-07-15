<?php
    session_start();
    require_once 'header.php';
?>

    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="assets/images/bg/about-breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Contact Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Contact Us</li>
                        </ul>
                        <h1 class="back-title">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- contact info area start -->
    <section class="contact-info-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 contact-info-box-wrap">
                    <div class="row pr-20">
                        <div class="col-lg-6">
                            <div class="contact-info-box">
                                <h4 class="title"><i class="fal fa-flag-checkered"></i> Dhaka</h4>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            Mirpur - 10, Dhaka, Bangladesh
                                        </div>
                                    </li>
                                    <li>
                                        <a href="mailto:info@greenhms.com">
                                            <span class="icon"><i class="fal fa-envelope-open"></i></span>
                                            <span class="content">info@greenhms.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:01786860880">
                                            <span class="icon"><i class="fal fa-phone"></i></span>
                                            <span class="content">+88017 (86) 860880</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-touch">
                        <div class="section-title">
                            <h2 class="title">Get In Touch</h2>
                        </div>
                        <div class="contact-form-getin mt-35">
                            <?php
                                if( isset( $_SESSION['query'] ) == 1 ){
                                    ?>
                                    <div class="alert alert-success">
                                        <p>Sucess</p>
                                    </div>
                                    <?php
                                }
                            ?>
                            <form action="confirm-contact.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fullname" id="fullname-label">Full Name Here</label>
                                            <input type="text" name="name" id="fullname" placeholder="Monzur" required>
                                            <span><i class="fal fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email" id="email-label">Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="monzur@gmail.com" required>
                                            <span><i class="fal fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mobile" id="email-label">Mobile Number</label>
                                            <input type="text" name="mobile" id="mobile" placeholder="01786860880" required>
                                            <span><i class="fal fa-phone"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="subject" id="email-label">Subject</label>
                                            <input type="text" name="subject" id="subject" placeholder="General Query" required>
                                            <span><i class="fal fa-sticky-note"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="messages" id="messages-label">Leave A Message</label>
                                            <textarea name="message" id="messages" placeholder="Write here" required></textarea>
                                            <span><i class="fal fa-pen-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="site-btn mt-30" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info area end -->

    <!-- google map area start -->
    <div class="map-area">
        <div id="contact-map" class="contact-map"></div>
    </div>
    <!-- google map area end -->

<?php
require_once 'footer.php';
unset( $_SESSION['query'] );