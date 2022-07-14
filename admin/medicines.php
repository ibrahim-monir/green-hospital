<?php
require_once 'header.php';
?>
<div class="row clearfix">
    <div class="col-12">
        <!-- Medicine start here  -->
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr> 
                            <th>#</th>
                            <th>Medicine Name</th>
                            <th>Generic Name</th>
                            <th>Other Brand Name</th>
                            <th>Manufacturer</th>
                            <th>Buy Price</th>
                            <th>Sell Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM medicines";
                            $query = mysqli_query( $conn, $sql);
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['generic_name']; ?></td>
                                        <td><?php echo $row['other_brand_name']; ?></td>
                                        <td>
                                            <?php
                                                /**
                                                 * Manufacturar Query by brand id
                                                 */
                                                $manufacturar_id = $row['brand_id'];
                                                $manufacturarSql = "SELECT name FROM brands WHERE id={$manufacturar_id}";
                                                $manufacturarQuery = mysqli_query( $conn, $manufacturarSql );
                                                $manufacturarData = mysqli_fetch_assoc( $manufacturarQuery );
                                                echo  $manufacturarData['name'];
                                            ?>
                                        </td>
                                        <td><?php echo $row['buy_price']; ?></td>
                                        <td><?php echo $row['sell_price']; ?></td>
                                        <td>
                                            <a href="/admin/medicines-view.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="/admin/medicines-update.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/medicines-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
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
        <!-- Medicine stop here -->
    </div>
</div>
<?php
require_once 'footer.php';