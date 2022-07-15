<?php
/**
 * Database connection
 */
require_once 'conn.php';
/**
 * Header file
 */
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr> 
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Doctor</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM prescriptions";
                            $query = mysqli_query( $conn, $sql );
                            if($query){
                                while( $row = mysqli_fetch_assoc( $query ) ){
                                    ?>
                                    <tr>
                                        <?php
                                            /**
                                             * Appointments information query
                                             */
                                            $appointmentId = $row['appointments_id'];
                                            $appointmentSql = "SELECT * FROM appointments WHERE id={$appointmentId}";
                                            $appointmentQuery = mysqli_query( $conn, $appointmentSql );
                                            $appointmentData = mysqli_fetch_assoc( $appointmentQuery );
                                            /**
                                             * Patient data query
                                             */
                                            $patientId = $appointmentData['patient_id'];
                                            $psql = "SELECT full_name, mobile_number, photo from patients WHERE id={$patientId}";
                                            $patientQuery = mysqli_query( $conn, $psql );
                                            $patientData = mysqli_fetch_assoc($patientQuery);
                                        ?>
                                        <td class="w60">
                                            <div><?php echo $row['id']; ?></div>
                                        </td>
                                        
                                        <td>
                                            <div><?php echo $patientData['full_name']; ?></div>
                                            <p class="mb-0"><?php echo $patientData['mobile_number']; ?></p>
                                        </td>
                                        <td>
                                            <div><?php echo $row['date']; ?></div>
                                            <span class="text-muted font-12"></span>
                                        </td>
                                        <?php 
                                            $doctorId = $appointmentData['doctor_id'];
                                            $dsql = "SELECT full_name FROM doctors WHERE id={$doctorId}";
                                            $doctorQuery = mysqli_query( $conn, $dsql );
                                            $doctorData = mysqli_fetch_assoc( $doctorQuery );
                                        ?>
                                        <td><?php echo $doctorData['full_name']; ?></td>
                                        <td>
                                            <a href="prescriptions-view.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="View"><i class="fa fa-paperclip"></i></a>
                                            <a href="prescriptions-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="confirm-prescriptions-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';