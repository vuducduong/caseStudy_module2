
<?php require_once "src/view/view_customer/blocks_customer/header.php"?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th colspan="2" scope="col"></th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col"></th>
                        <th scope="col" class="text-right">Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tr>
                        <?php $total = 0 ?>
                        <form method="post" action="/case_studymodule2/index.php?page=action&action=update">
                            <?php if (!empty($_SESSION['cart'])): ?>
                            <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                            <?php $total += ($value['price'] * $value['quantity']); ?>
                    <tr>
                        <td><img class="img-responsive" src="<?php echo $value['image'] ?>"
                                 style="width:100px;"></td>
                        <td colspan="2"><strong><?php echo $value['productName'] ?></strong></td>
                        <td><input type="text" style="width:min-content;position: relative;left: 59px" class="form-control input-sm"
                                   name="cart[<?php echo $key ?>][quantity]"
                                   value="<?php echo $_SESSION['cart'][$key]['quantity'] ?>">
                            <input type="hidden" class="form-control input-sm"
                                   name="cart[<?php echo $key ?>][price]"
                                   value="<?php echo $_SESSION['cart'][$key]['price'] ?>">
                            <input type="hidden" class="form-control input-sm"
                                   name="cart[<?php echo $key ?>][productName]"
                                   value="<?php echo $_SESSION['cart'][$key]['productName'] ?>">
                            <input type="hidden" class="form-control input-sm"
                                   name="cart[<?php echo $key ?>][image]"
                                   value="<?php echo $_SESSION['cart'][$key]['image'] ?>"></td>
                        <td></td>
                        <td class="text-right"><?php echo number_format($value['price']) ?> đ</td>
                        <td class="text-right"><a
                                    href="/case_studymodule2/index.php?page=action&action=remove&id=<?php echo $key ?>"><i
                                        class="fa fa-trash"></i> </a></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>

                    <tr>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Update" class="btn btn-info btn-sm btn-block"></td>
                        <td><a href="/case_studymodule2/index.php?page=action&action=delete"
                               class="btn btn-danger btn-sm btn-block"><span class="glyphicon glyphicon-remove"> Delete all</span></a>
                        </td>

                        </form>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total:</strong></td>
                        <td class="text-right"><strong><?php echo number_format($total) ?> đ</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                </div>
                <div class="col-sm-12  col-md-3">
                    <a href="index.php" style="text-decoration: #007bff">
                        <button class="btn btn-lg btn-block btn-info text-uppercase">Tiếp tục</button>
                    </a></div>
                <div class="col-sm-12 col-md-3 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>

    </div>
    <?php require_once "src/view/view_customer/blocks_customer/footer.php"?>

</div><!--Section: Block Content-->
</body>
</html>
