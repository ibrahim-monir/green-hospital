<?php
require_once 'conn.php';
require_once 'header.php';
// require_once 'overview.php';
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
                            <th>Date &amp; Time</th>
                            <th>Consulting</th>
                            <th>Injury/Condition</th>
                            <th>New Patients</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $patient_id = $_SESSION["patient_id"];
                            $sql = "SELECT * FROM appointments WHERE patient_id = {$patient_id}";
                            $query = mysqli_query( $conn, $sql );
                            if( 1 == $query->num_rows ){
                                while( $row = mysqli_fetch_assoc( $query ) ){
                                    ?>
                                    <tr>
                                        <?php   
                                            $patientId = $row['patient_id'];
                                            $psql = "SELECT full_name, mobile_number, photo from patients WHERE id={$patientId}";
                                            $patientQuery = mysqli_query( $conn, $psql );
                                            $patientData = mysqli_fetch_assoc($patientQuery);
                                        ?>
                                        <td class="w60">
                                            <img src="<?php echo $patientData['photo']; ?>" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar rounded-circle" data-original-title="Avatar Name">
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
                                            $doctorId = $row['doctor_id'];
                                            $dsql = "SELECT full_name FROM doctors WHERE id={$doctorId}";
                                            $doctorQuery = mysqli_query( $conn, $dsql );
                                            $doctorData = mysqli_fetch_assoc( $doctorQuery );
                                        ?>
                                        <td><?php echo $doctorData['full_name']; ?></td>
                                        <td><?php echo $row['reason']; ?></td>
                                        <td><?php echo $row['is_new']; ?></td>
                                        <td>
                                            <?php 
                                            if( 'pending' == $row['status'] ){
                                                echo '<span class="badge badge-warning">'.$row['status'].'</span>';
                                            }else if ( 'approved' == $row['status'] ){
                                                echo '<span class="badge badge-success">'.$row['status'].'</span>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="/admin/appointments-view.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="View"><i class="fa fa-paperclip"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td><?php echo "Appointments not found"; ?></td>
                                </tr>
                                <?php
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