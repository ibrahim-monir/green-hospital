<?php
    require_once 'header.php';
    require_once 'admin/conn.php';
?>

    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="assets/images/bg/about-breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Our Departments</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>departments</li>
                        </ul>
                        <h1 class="back-title" style="font-size: 200px;">Departments</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- service area start -->
    <section class="service-area-4 pt-120 pb-120">
        <div class="container">
            <div class="row mt-none-30">
                <?php
                    $sql = "SELECT * FROM departments WHERE status = 'active' ";
                    $query = mysqli_query( $conn, $sql );
                    $counter = 00;
                    if( $query ){
                        while( $data = mysqli_fetch_assoc( $query ) ){
                            $counter++;
                            ?>
                                <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                                    <div class="single-service-box-4">
                                        <div class="thumb">
                                            <img src="assets/images/service/service-thumb-1.jpeg" alt="">
                                            <span class="count">0<?php echo $counter; ?></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><?php echo $data['name']; ?></h4>
                                            <div class="service-box-text">
                                                <p><?php echo $data['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .col-xl-4 col-lg-6 -->
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- service area end -->

<?php
    require_once 'footer.php';