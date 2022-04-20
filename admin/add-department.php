<?php 
require_once 'header.php';
require_once 'overview.php';
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="/admin/confirm-add-department.php" method="post">
            <!-- card start here  -->
            <div class="card">
                <div class="header">
                    <h2>Department Information</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="dname">Department Name <span class="text-danger">*</span></label>
                                <input id="dname" class="form-control" type="text" name="name" value="" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="description">Department Description <span class="text-danger">*</span></label>
                                <textarea rows="3" id="description" class="form-control no-resize" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group c_form_group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select id="status" class="form-control show-tick" name="status">
                                    <option value="" disabled>- select -</option>
                                    <option value="active">Active</option>
                                    <option value="deactive">Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div><!-- card stop here  -->
        </form>
    </div>
</div>
<?php
require_once 'footer.php';