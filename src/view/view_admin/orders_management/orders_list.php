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
        </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $key=>$order):?>
            <tr>
                <th scope="row"><?php echo $key+1?></th>
                <td><?php echo $order['fullname']?></td>
                <td><?php echo $order['productName']?></td>
                <td><?php echo $order['priceEach']?></td>
                <td><?php echo $order['quantityOrdered']?></td>
                <td><?php echo $order['orderDate']?></td>
                <td><?php echo $order['shippedDate']?></td>
                <td><?php echo $order['status']?></td>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>



