<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="fa-header">
</div>
<div class="main-body-content w-100 ets-pt">
    <h1 align="center"><strong>Danh sách sản phẩm</strong></h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form action="routeAdmin.php?admin=search" method="post" class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" name="productName"
                                   type="search" placeholder="Search topics or keywords">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
            <!--end of col-->
        </div>
    </div>
    <a href="http://localhost/case_studymodule2/routeAdmin.php?admin=add" class="btn btn-success">Add</a>
    <table class="table table-bordered table-hover" style="text-align: center">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Price</th>
            <th>Image</th>
            <th colspan="2">Action</th>
            <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $product['productName'] ?></td>
            <td><?php echo $product['productType'] ?></td>
            <td><?php echo number_format($product['price']) ?> đ</td>
            <td><img style="width: 100px" src="<?php echo $product['image'] ?>"</td>
            <td><a type="button"
                   href="http://localhost/case_studymodule2/routeAdmin.php?admin=edit&id=<?php echo $product['id'] ?>"
                   class="btn btn-warning">Edit</a></td>
            <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $product['id']?>">Delete</a>
            </td>
            <div class="modal fade" id="exampleModalCenter<?php echo $product['id']?>" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center">Xóa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">Bạn có thật sự muốn xóa</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <a href="http://localhost/case_studymodule2/routeAdmin.php?admin=delete&id=<?php echo $product['id'] ?>"
                               type="button" class="btn btn-success">OK</a>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
        <?php endforeach ?>
    </table>
</div>
</div>
</div>

<?php require_once "src/view/view_admin/blocks_admin/footer.php" ?>

