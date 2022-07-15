<?php 
    require_once 'header.php';
?>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="assets/images/bg/about-breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Register</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Register</li>
                        </ul>
                        <h1 class="back-title" style="font-size: 280px;">Register</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- login Area Strat-->
    <section class="login-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Register Here</h3>
                        <form action="confirm-register.php" method="POST">
                            <label for="name">Full Name <span>**</span></label>
                            <input id="name" type="text" name="full_name" placeholder="Enter Full Name..." />
                            <label for="email-id">Mobile Number <span>**</span></label>
                            <input id="email-id" type="number" name="mobile" placeholder="Enter Mobile Number..." />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" type="password" name="password" placeholder="Enter password..." />
                            <input type="hidden" name="doctor_id" value="1">
                            <div class="mt-10"></div>
                            <input type="submit" class="site-btn w-100 text-center text-white" value="Register Now">
                            <div class="or-divide"><span>or</span></div>
                            <a href="login.php" class="site-btn red w-100 text-center">login Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
<?php
require_once 'footer.php';
?>