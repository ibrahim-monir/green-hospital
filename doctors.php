<?php
    require_once 'admin/conn.php';
    require_once 'header.php';
?>

    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="assets/images/bg/about-breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Doctors</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Doctors</li>
                        </ul>
                        <h1 class="back-title">Doctor</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- our-expert area start -->
    <section class="our-expert-area our-expert-area-2 our-expert-area-3 bg-2 pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-heading mb-50">
                        <h2 class="section-title shape">Our Doctors</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
                            or incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <?php
                    $sql = "SELECT * FROM doctors";
                    $query = mysqli_query( $conn, $sql );
                    if( $query ){
                        while( $data = mysqli_fetch_assoc( $query ) ){
                            ?>
                                <div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
                                    <div class="single-carousel-item">
                                        <div class="thumb">
                                            <img src="assets/images/team/doctor-03.jpeg" alt="">
                                            <span class="icon">
                                                <img src="assets/images/icons/heart-icon.png" alt="">
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><?php echo $data['full_name']; ?></h4>
                                            <span class="sub-title"><?php echo $data['designation']; ?></span>
                                            <p><?php echo $data['shortbio']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- our-expert area end -->
<?php
    require_once 'footer.php';