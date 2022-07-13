<?php
require_once 'conn.php';
require_once 'header.php';
$sql = "SELECT * FROM bed_booking";
$query = mysqli_query( $conn, $sql );
?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing5">
                <thead>
                    <tr> 
                        <th>Bed No</th>
                        <th>Patient</th>
                        <th>Allotment</th>
                        <th>Discharge</th>
                        <th>Bed Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if( $query ){
                            while( $row = mysqli_fetch_assoc( $query ) ){
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                                $bedId = $row['bed_id'];
                                                $bsql = "SELECT bed_name, category_id FROM beds WHERE id={$bedId}";
                                                $bedQuery = mysqli_query( $conn, $bsql );
                                                $bedData = mysqli_fetch_assoc( $bedQuery );
                                                echo $bedData['bed_name']; 
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $patientId = $row['patient_id'];
                                                $patientSql = "SELECT full_name FROM patients WHERE id={$patientId}";
                                                $patientQuery = mysqli_query( $conn, $patientSql );
                                                $patientData = mysqli_fetch_assoc( $patientQuery );
                                                echo $patientData['full_name'];
                                            ?>
                                        </td>
                                        <td><?php echo $row['allotment']; ?></td>
                                        <td><?php echo $row['discharge']; ?></td>
                                        <td>
                                            <?php
                                                $bedCategoryId = $bedData['category_id'];
                                                $bedCategorySql = "SELECT name FROM bed_categories WHERE id={$bedCategoryId}";
                                                $bedCategoryQuery = mysqli_query( $conn, $bedCategorySql );
                                                $bedCaterogyData = mysqli_fetch_assoc( $bedCategoryQuery );
                                                if( 'General' == $bedCaterogyData['name'] ){
                                                    echo '<span class="badge badge-danger">General</span>';
                                                }else if( 'Delux' == $bedCaterogyData['name'] ){
                                                    echo '<span class="badge badge-success">Delux</span>';
                                                }else if( 'Super Delux' == $bedCaterogyData['name'] ){
                                                    echo '<span class="badge badge-primary">Super Delux</span>';
                                                }else if ( 'ICU' == $bedCaterogyData['name'] ){
                                                    echo '<span class="badge badge-warning">ICU</span>';
                                                }
                                            ?>
                                            
                                        </td>
                                        <td>
                                            <a href="bed-allotment-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="bed-allotment-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
<?php
require_once 'footer.php';