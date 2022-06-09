<?php
require_once 'header.php';
require_once 'overview.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <!-- Departments start here  -->
        <div class="card">
            <div class="body">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Departments">
                        <div class="input-group-append">
                            <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr> 
                            <th>#</th>
                            <th>Department Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM departments";
                            $query = mysqli_query( $conn, $sql);
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <a href="/admin/department-update.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/delete-department.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
        <!-- Department stop here -->
    </div>
</div>
<?php
require_once 'footer.php';