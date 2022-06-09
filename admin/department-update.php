<?php
require_once 'header.php';
require_once 'overview.php';
/**
* Query Department Data with ID
    */
$id = $_REQUEST['id'];
$sql = "SELECT * FROM departments where id={$id}";
$query = mysqli_query( $conn, $sql );
if( $query ){
    $data = mysqli_fetch_assoc($query);
}
?>
<div class="row clearfix">
    <div class="col-12">
        <!-- Edit Department start here  -->
        <div class="card">
            <div class="header">
                <h2>Update Department Information</h2>
            </div>
            <div class="body">
                <form action="/admin/confirm-update-department.php" method="POST">
                    <div class="row clearfix">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="dname">Department Name <span class="text-danger">*</span></label>
                                <input id="dname" class="form-control" type="text" name="name" value="<?php echo $data['name'] ?>" required="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="description">Department Description <span class="text-danger">*</span></label>
                                <textarea rows="3" id="description" class="form-control no-resize" name="description"><?php echo $data['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select id="status" class="form-control show-tick" name="status">
                                    <option value="" disabled="">- select -</option>
                                    <option value="active" <?php echo ('active' == $data['status']) ? 'selected' : '' ?>>Active</option>
                                    <option value="deactive" <?php echo ('deactive' == $data['status']) ? 'selected' : '' ?>>Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" value="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Edit Department stop here  -->
    </div>
</div>
<?php
require_once 'footer.php';