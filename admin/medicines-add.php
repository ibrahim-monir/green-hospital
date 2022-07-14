<?php
require_once 'conn.php';
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="body">
                <form action="confirm-medicine-add.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Medicine Name</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Medicine Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="generic_name">Generic Name</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="generic_name" class="form-control" id="generic_name" placeholder="Enter Generic Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="other_brand_name">Other Brand Name</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="other_brand_name" class="form-control" id="other_brand_name" placeholder="Enter Other Brand Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="manufacturer">Manufacturer</label>
                        <div class="col-md-6 col-sm-10">
                            <select name="brand_id" id="manufacturer" class="form-control" required>
                                <?php
                                    $brandSql = "SELECT * FROM brands";
                                    $brandQuery = mysqli_query( $conn, $brandSql );
                                    if( $brandQuery ){
                                        while( $brandData = mysqli_fetch_assoc( $brandQuery ) ){
                                            echo '<option value="'.$brandData['id'].'">'.$brandData['name'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="category_id">Category</label>
                        <div class="col-md-6 col-sm-10">
                            <select name="category_id" id="category_id" class="form-control" required>
                                <?php
                                    $medicineSql = "SELECT * FROM medicine_cat";
                                    $medicineQuery = mysqli_query( $conn, $medicineSql );
                                    if( $medicineQuery ){
                                        while( $medicineData = mysqli_fetch_assoc( $medicineQuery ) ){
                                            echo '<option value="'.$medicineData['id'].'">'.$medicineData['name'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="buy_price">Buy Price</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="buy_price" class="form-control" id="buy_price" placeholder="Enter Buy Price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="sell_price">Sell Price</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="sell_price" class="form-control" id="sell_price" placeholder="Enter Sell Price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="side_effect">Side Effect</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="text" name="side_effect" class="form-control" id="side_effect" placeholder="Enter side Effect here" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                        <div class="col-md-6 col-sm-10">
                            <textarea name="description" id="description" cols="20" rows="4" class="form-control" placeholder="Enter Medicine Description" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-md-6 col-sm-10">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';