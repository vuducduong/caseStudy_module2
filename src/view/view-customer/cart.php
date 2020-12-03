<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">NHẬT CƯỜNG MOBILE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.html">Home</a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Cart <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                           placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="index.php?page=action&action=cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"></span>
                </a>
            </form>
        </div>
    </div>
</nav>
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
    <footer class="text-light">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

</div><!--Section: Block Content-->
</body>
</html>
