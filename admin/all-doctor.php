<?php
require_once 'header.php';
require_once 'sidebar.php';
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
                        
                        <tr>
                            <td class="w60">
                                <img src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar rounded-circle" data-original-title="Avatar Name">
                            </td>
                            <td>
                                <div>Jason Porter</div>
                                <p class="mb-0">+ 264-625-5858</p>
                            </td>
                            <td>jason-porter@example.com</td>
                            <td>
                                <div>13 June 2019</div>
                                <span class="text-muted font-12">7:12PM to 8:30PM</span>
                            </td>
                            <td>Dr. David</td>
                            <td>Fever</td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></button>
                                <button type="button" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
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