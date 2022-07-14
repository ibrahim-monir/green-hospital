<?php
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <!-- Medicine category start here  -->
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr> 
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            /**
                             * Medicine Category Query 
                             */
                            $sql = "SELECT * FROM medicine_cat";
                            $query = mysqli_query( $conn, $sql);
                            $counter = 0;
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){
                                    $counter++;
                                    ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td>
                                            <?php
                                                if( 1 == $row['status'] ){
                                                    echo '<span class="badge badge-success">Active</span>';
                                                }else{
                                                    echo '<span class="badge badge-warning">Deactive</span>';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="/admin/medicines-category.php?update=1&id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/medicines-category.php?delete=1&id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
        <!-- Medicine category stop here -->
    </div>
</div>
<?php
require_once 'footer.php';