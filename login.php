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
                        <h2 class="title">login</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>login</li>
                        </ul>
                        <h1 class="back-title">login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form action="confirm-login.php" method="POST">
                            <label for="name">Mobile Number <span>**</span></label>
                            <input id="name" type="number" name="mobile_number" placeholder="Enter Mobile Number..." required/>
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" type="password" name="password" placeholder="Enter password..." />
                            <input type="submit" value="Login Now" class="site-btn red w-100 text-center text-white">
                            <div class="or-divide"><span>or</span></div>
                            <a href="register.php" class="site-btn w-100 text-center">Register Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
<?php
require_once 'footer.php';