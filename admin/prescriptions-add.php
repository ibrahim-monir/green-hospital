<?php 
    require_once 'conn.php';
    require_once 'header.php';
?>
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="card">
                <div class="body">
                    <form method="POST" action="confirm-prescription-add.php" class="repeater" id="add_name" name="add_name">
                        <!-- Basic information start here -->
                        <div class="form-group row">
                            <label class="col-md-2 col-sm-4 col-form-label">Prescription Information</label>
                            <div class="col-md-10 col-sm-8">
                                <div class="row clearfix">
                                    <input type="hidden" name="prescription_id" value="<?php echo rand(1, 10000000); ?>">
                                    <div class="col">
                                        <div class="form-group c_form_group">
                                            <label>Date <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group c_form_group">
                                            <label>appointment id <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="appaointment_id" value="<?php echo isset($_REQUEST['appointment_id']); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group c_form_group">
                                            <label>Details <span class="text-danger">*</span></label>
                                            <textarea name="case_history" id="" cols="20" rows="2" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- medicine group start here -->
                         <div data-repeater-list="medicine-group" class="">
                            <div data-repeater-item class="mb-2">
                                <input type="hidden" name="id" id="medicine-id"/>
                                <div class="row">
                                    <div class="col">
                                        <select name="medicine_id" id="" class="form-control">
                                            <?php
                                                $medicineSql = "SELECT * FROM medicines";
                                                $medicineQuery = mysqli_query( $conn, $medicineSql );
                                                if( $medicineQuery ){
                                                    while( $row = mysqli_fetch_assoc( $medicineQuery ) ){
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="instruction" class="form-control" placeholder="Instruction"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="dose" class="form-control" placeholder="Dose"/>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="duration" class="form-control" placeholder="Day"/>
                                    </div>
                                    <div class="col-md-1">
                                        <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3" value="Add"/>
                        <!-- medicine group stop here -->
                        <div class="clearfix mb-4"></div>
                        <input type="submit" value="Submit" class="btn btn-primary" id="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require_once 'footer.php';