<?php
require_once 'conn.php';
$id = $_REQUEST['id'];
require_once 'header.php';
/**
 * Data Query for show medicines
 */
$sql = "SELECT * FROM medicines WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
$data = mysqli_fetch_assoc( $query );
?>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card profile-header">
            <div class="body text-center">
                <div class="mt-3">
                    <h5 class="mb-0"><strong><?php echo $data['name']; ?></strong></h5>
                    <span><?php echo $data['generic_name']; ?></span>
                </div>                            
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Overview</h2>
            </div>
            <div class="body">
                <small class="text-muted">Other Brand Name: </small>
                <p><?php echo $data['other_brand_name']; ?></p>
                <small class="text-muted">Manufacturer: </small>
                <p>
                    <?php
                        /**
                         * Manufacturar show by brand id
                         */
                        $manufacturar_id = $data['brand_id'];
                        $manufacturarSql = "SELECT name FROM brands WHERE id={$manufacturar_id}";
                        $manufacturarQuery = mysqli_query( $conn, $manufacturarSql );
                        $manufacturarData = mysqli_fetch_assoc( $manufacturarQuery );
                        echo  $manufacturarData['name'];
                    ?>
                </p>
                <small class="text-muted">Category: </small>
                <p>
                    <?php
                        /**
                         * Category Name show by category id
                         */
                        $categoryId = $data['category_id'];
                        $categorySql = "SELECT name FROM medicine_cat WHERE id={$categoryId} AND status=1";
                        $categoryQuery = mysqli_query( $conn, $categorySql );
                        $categoryData = mysqli_fetch_assoc( $categoryQuery );
                        echo  $categoryData['name'];
                    ?>
                </p>
                <small class="text-muted">Buy Price: </small>
                <p><?php echo $data['buy_price']; ?></p>
                <small class="text-muted">Sell Price: </small>
                <p><?php echo $data['sell_price']; ?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <ul class="nav nav-tabs3">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Description">Description</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#SideEffect">Side Effect</a></li>
            </ul>
        </div>

        <div class="tab-content padding-0">
            <div class="tab-pane active" id="Description">
                <div class="card">
                    <div class="header">
                        <h2>Description</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <p><?php echo $data['description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="SideEffect">
                <div class="card">
                    <div class="header">
                        <h2>Side Effect</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <p><?php echo $data['side_effect']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php
require_once 'footer.php';