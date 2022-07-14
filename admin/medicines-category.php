<?php
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <a href="/admin/medicines-category.php?add=1" class="btn btn-success pull-right my-4">Add New</a>
        <?php
            if( 1 == isset( $_REQUEST['add'] ) ){
                ?>
                <!-- Medicine Add start here -->
                <div class="card">
                    <div class="body">
                        <form action="confirm-medicines-add-category.php" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="name">Name</label>
                                <div class="col-md-6 col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="status">Status</label>
                                <div class="col-md-6 col-sm-10">
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- Medicine Add stop here -->
                <?php
            }else{
        ?>
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
        <?php } ?>
    </div>
</div>
<?php
require_once 'footer.php';