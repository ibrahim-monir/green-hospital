<?php 
    require_once 'header.php';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM patients WHERE id={$id}";
    $query = mysqli_query( $conn, $sql );
    if( $query ){
        $data = mysqli_fetch_assoc( $query );
    }
?>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card social">
                <div class="profile-header d-flex justify-content-between justify-content-center theme-bg gradient">
                    <div class="d-flex">
                        <div class="mr-3">
                            <img src="assets/images/user.png" class="rounded" alt="">
                        </div>
                        <div class="details">
                            <h5 class="mb-0"><?php echo $data['full_name'] ?></h5>
                            <div class="mt-2"><a href="tel:<?php echo $data['mobile_number']; ?>"><?php echo $data['mobile_number']; ?></a></div>
                        </div>                                
                    </div>
                    <div>
                        <button class="btn btn-default btn-sm">Message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-5">
            <!-- card start here  -->
            <div class="card">
                <div class="body">
                    <small class="text-muted">Address: </small>
                    <p><?php echo $data['address']; ?></p>                         
                    <hr>
                    <small class="text-muted">Mobile: </small>
                    <p><?php echo $data['mobile_number']; ?></p>
                    <hr>
                    <small class="text-muted">Birth Date: </small>
                    <p class="m-b-0"><?php echo $data['dob']; ?></p>
                </div>
            </div>
            <!-- card stop here -->
        </div>
        <div class="col-xl-8 col-lg-8 col-md-7">
            <div class="card">
                <div class="body">
                    <p><?php echo $data['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';
?>