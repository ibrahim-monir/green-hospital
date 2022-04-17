<?php
require_once 'header.php';
require_once 'overview.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Doctor">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>specialist</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM doctors";
                            $query = mysqli_query( $conn, $sql);
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr>
                                        <td class="w60">
                                            <img src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar rounded-circle" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <div><?php echo $row['full_name']; ?></div>
                                            <p class="mb-0"><?php echo $row['designation']; ?></p>
                                        </td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                            <?php echo $row['mobile_number']; ?>
                                        </td>
                                        <td>
                                            <?php
                                                $departmentsql = "SELECT name from departments WHERE id='$row[department_id]'";
                                                $department = mysqli_query($conn, $departmentsql);
                                                if($department){
                                                    echo mysqli_fetch_assoc($department)['name'];
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $row['specialist'] ?></td>
                                        <td>
                                            <a href="/admin/edit-doctor.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/delete-doctor.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
require_once 'footer.php';