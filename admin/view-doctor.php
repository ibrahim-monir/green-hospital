<?php
require_once 'header.php';
require_once 'overview.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM doctors where id=$id";
$query = mysqli_query($conn, $sql);
if($query){
    $data = mysqli_fetch_assoc($query);
}
?>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card profile-header">
            <div class="body text-center">
                <img src="assets/images/user.png" class="rounded-circle" alt="">
                <div class="mt-3">
                    <h5 class="mb-0"><?php echo $data['full_name']; ?></h5>
                    <span><?php echo $data['specialist']; ?></span>
                </div>
                <div class="m-t-15">
                    <button class="btn btn-primary"><?php echo $data['doctor_type']; ?></button>
                    <button class="btn btn-outline-secondary">Message</button>
                </div>                            
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>About Me</h2>
                <hr>
                <p>
                    <?php echo $data['shortbio']; ?>
                </p>
            </div>
            <div class="body">
                <small class="text-muted">Designation: </small>
                <p><?php echo $data['designation']; ?></p>
                <small class="text-muted">Email address: </small>
                <p><?php echo $data['email']; ?></p>
                <small class="text-muted">Mobile: </small>
                <p><?php echo $data['mobile_number']; ?></p>
                <small class="text-muted">Address: </small>
                <p><?php echo $data['address']; ?></p>
                <!-- <hr>
                <small class="text-muted">Social: </small>
                <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                <p class="mb-0"><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p> -->
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="padding-0">
            <div class="tab-pane active" id="Basic">
                <div class="card">
                    <div class="header">
                        <h2>Bio</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <p>
                            <?php echo $data['details']; ?>
                        </p>
                    
                        <h6 class="font-bold">Education</h6>
                        <ul class="list-group">
                            <li class="list-group-item">M.B.B.S.,Harvard University, USA.</li>
                            <li class="list-group-item">M.S.,Harvard University, USA.</li>
                            <li class="list-group-item">SPINAL FELLOWSHIP Dr. John Adam, Allegimeines Krakenhaus, Schwerin, Germany.</li>
                            <li class="list-group-item">Fellowship in Endoscopic Spine Surgery Phoenix, USA.</li>
                            <li class="list-group-item">D.N.B from AIIMS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';