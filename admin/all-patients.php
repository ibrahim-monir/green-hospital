<?php
require_once 'header.php';
require_once 'overview.php';
?>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="body">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Patients">
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
                            <th>Photo</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM patients";
                            $query = mysqli_query($conn, $sql);
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td class="w60">
                                            <img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar rounded-circle" data-original-title="Avatar Name">
                                        </td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['mobile_number']; ?></td>
                                        <td>
                                            <?php 
                                                if($row['status'] == 'approved'){
                                                    echo '<span class="badge badge-success">Approved</span>';
                                                }elseif($row['status'] == 'pending'){
                                                    echo '<span class="badge badge-warning">Pending</span>';
                                                }
                                            ?>
                                            
                                        </td>
                                        <td>
                                            <a href="/admin/patients-view.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/patients-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/delete-patient.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
require_once 'footer.php';
