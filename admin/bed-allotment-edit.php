<?php
$id = $_REQUEST['id'];
require_once 'conn.php';
require_once 'header.php';
$sql = "SELECT * FROM bed_booking WHERE id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    $data = mysqli_fetch_assoc( $query );
    // print_r( $data );
}
?>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="body">
                <form action="confirm-bed-allotment-update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="old_bed_id" value="<?php echo $data['bed_id'] ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="bed_id">Bed No.</label>
                        <div class="col-md-6 col-sm-10">
                            <select name="bed_id" id="bed_id" class="form-control">
                                <?php
                                    $bedSql = "SELECT * FROM beds";
                                    $bedQuery = mysqli_query( $conn, $bedSql );
                                    if( $bedQuery ){
                                        while( $bedData = mysqli_fetch_assoc( $bedQuery ) ){
                                            ?>
                                            <option value="<?php echo $bedData['id']; ?>" <?php if( $data['bed_id'] == $bedData['id'] ) echo "Selected"; ?>><?php echo $bedData['bed_name']; ?></option>
                                            <?php
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
                                            ?>
                                            <option value="<?php echo $patientData['id']; ?>" <?php if( $data['patient_id'] == $patientData['id'] ) echo "Selected"; ?>><?php echo $patientData['full_name']; ?></option>';
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="allotment">Allotment Date</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="date" name="allotment" class="form-control" id="allotment" value="<?php echo $data['allotment']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="discharge">Discharge Date</label>
                        <div class="col-md-6 col-sm-10">
                            <input type="date" name="discharge" class="form-control" id="discharge" value="<?php echo $data['discharge']; ?>">
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