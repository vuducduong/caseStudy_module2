<?php require_once "src/view/view_admin/blocks_admin/header.php"?>
<div class="main-body-content w-100 ets-pt">
    <h1 align="center" ><strong>Danh sách hóa đơn</strong></h1>
    <a href="routeAdmin.php?admin=order&order=add-order" class="btn btn-success">Add</a>
    <table class="table table-bordered table-hover" style="text-align: center">
        <thead>
        <tr>
            <th scope="col">Order Number</th>
            <th scope="col">User Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Order Date</th>
            <th scope="col">Shipped Date</th>
            <th scope="col">Status</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $key=>$order):?>
            <tr>
                <th scope="row"><?php echo $key+1?></th>
                <td><?php echo $order['name']?></td>
                <td><?php echo $order['productName']?></td>
                <td><?php echo $order['priceEach']?></td>
                <td><?php echo $order['quantityOrdered']?></td>
                <td><?php echo $order['orderDate']?></td>
                <td><?php echo $order['shippedDate']?></td>
                <td><?php echo $order['status']?></td>
                <td><a type="button" href="http://localhost/case_studymodule2/routeAdmin.php?admin=user&user=edit-user&id=<?php echo $user['id']?> "class="btn btn-warning">Edit</a></td>
                <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Delete</a></td>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center">Bạn thật sự muốn xóa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="http://localhost/case_studymodule2/routeAdmin.php?admin=user&user=delete-user&id=<?php echo $user['id']?> " type="button" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>



