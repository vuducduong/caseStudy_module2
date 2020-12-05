

<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
    <div class="main-body-content w-100 ets-pt">
        <h1 align="center" ><strong>Danh sách sản phẩm</strong></h1>
        <a href="routeAdmin.php?admin=add" class="btn btn-success">Add</a>
            <table class="table table-bordered table-hover" style="text-align: center">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                <?php foreach ($products as $key=>$product):?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $product['productName']?></td>
                    <td><?php echo $product['productType']?></td>
                    <td><?php echo  number_format($product['price'])?> đ</td>
                    <td><img style="width: 100px" src="<?php echo $product['image']?>"</td>
                    <td><a href="http://localhost/case_studymodule2/routeAdmin.php?admin=edit&id=<?php echo $product['id']?>" class="btn btn-warning">Edit</a></td>
                    <td><a  onclick="return confirm('Bạn có muốn xóa sản phẩm không?')" href="http://localhost/case_studymodule2/routeAdmin.php?admin=delete&id=<?php echo $product['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach?>
            </table>
    </div>
</div>
</div>

<?php require_once "src/view/view_admin/blocks_admin/footer.php"?>

