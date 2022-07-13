<?php
require_once 'conn.php';
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="body">
                <form action="confirm-bed-allotment-add.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="bed_id">Bed No.</label>
                        <div class="col-md-6 col-sm-10">
                            <select name="bed_id" id="bed_id" class="form-control">
                                <?php
                                    $bedSql = "SELECT * FROM beds WHERE status='Free'";
                                    $bedQuery = mysqli_query( $conn, $bedSql );
                                    if( $bedQuery ){
                                        while( $bedData = mysqli_fetch_assoc( $bedQuery ) ){
                                            echo '<option value="'.$bedData['id'].'">'.$bedData['bed_name'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="patient_id">Patient Name</label>
                        <div class="col-md-6 col-sm-10">
                            <select name="patient_id" id="patient_id" class="form-control">
                                <?php
                                    $patientSql = "SELECT * FROM patients";
                                    $patientQuery = mysqli_query( $conn, $patientSql );
                                    if( $patientQuery ){
                                        while( $patientData = mysqli_fetch_assoc( $patientQuery ) ){
                                            echo '<option value="'.$patientData['id'].'">'.$patientData['full_name'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="allotment">Allotment Date</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="date" name="allotment" class="form-control" id="allotment">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="discharge">Discharge Date</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="date" name="discharge" class="form-control" id="discharge">
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