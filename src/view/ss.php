<?php //session_start()?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Nhật Cường Mobile<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown">Sản phẩm</a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="index.php?page=iphone">Iphone</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?page=samsung">Samsung</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?page=Vinsmart">Vinsmart</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    </nav>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-9">
                                <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                            </div>
                            <div class="col-xs-3">
                                <a href="index.php" class="btn btn-primary btn-sm btn-block"><span
                                            class="glyphicon glyphicon-share-alt"> Continue shopping</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <?php $total = 0 ?>
                    <form method="post" action="/case_studymodule2/index.php?page=action&action=update">
                        <?php if (!empty($_SESSION['cart'])):?>
                            <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                            <?php $total += ($value['price'] * $value['quantity']); ?>
                            <div class="row">
                                <div class="col-xs-2"><img class="img-responsive" src="<?php echo $value['image'] ?>"
                                                           alt="">
                                </div>
                                <div class="col-xs-4">
                                    <h4 class="product-name"><strong><?php echo $value['productName'] ?></strong></h4>
                                    <h4><small>Product description</small></h4>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-6 text-right">
                                        <h6><strong><?php echo number_format($value['price']) ?> đ<span
                                                        class="text-muted"></span></strong>
                                        </h6>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control input-sm"
                                               name="cart[<?php echo $key ?>][quantity]" value="<?php echo $_SESSION['cart'][$key]['quantity'] ?>">
                                        <input type="hidden" class="form-control input-sm"
                                               name="cart[<?php echo $key ?>][price]" value="<?php echo $_SESSION['cart'][$key]['price'] ?>">
                                        <input type="hidden" class="form-control input-sm"
                                               name="cart[<?php echo $key ?>][productName]" value="<?php echo $_SESSION['cart'][$key]['productName'] ?>">
                                        <input type="hidden" class="form-control input-sm"
                                               name="cart[<?php echo $key ?>][image]" value="<?php echo $_SESSION['cart'][$key]['image'] ?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="button" class="btn btn-link btn-xs">
                                            <a
                                                    href="/case_studymodule2/index.php?page=action&action=remove&id=<?php echo $key  ?>"><span
                                                        class="glyphicon glyphicon-trash"></span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php endif ?>
                        <div class="col-xs-6"></div>
                        <div class="col-xs-3">
                            <input type="submit" value="Update" class="btn btn-info btn-sm btn-block">
                        </div>
                        <div class="col-xs-3">
                            <a href="/case_studymodule2/index.php?page=action&action=delete"
                               class="btn btn-danger btn-sm btn-block"><span class="glyphicon glyphicon-remove"> Delete all</span></a>
                        </div>
                    </form>
                    <div class="row mt-5">
                        <div class="text-center">
                            <div class="col-xs-6"></div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9">
                                <h4 class="text-right">Total <strong><?php echo number_format($total) ?> đ</strong></h4>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="btn btn-success btn-block">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>