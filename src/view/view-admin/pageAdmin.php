<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/styleAdmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Infantry</title>
</head>
<body>
<div id="page-container" class="main-admin">
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
        <a class="navbar-brand" href="#"></a>
        <div id="open-menu" class="menu-bar">
            <div class="bars"></div>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown ets-right-0">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="" class="img-fluid rounded-circle border user-profile">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="side-bar">
        <div class="side-bar-links">
            <div class="side-bar-logo text-center py-3">
                <img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
                <h5>Company Name</h5>
            </div>
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
                </li>
            </ul>
        </div>
        <div class="side-bar-icons">
            <!-- <div class="side-bar-logo text-center py-3">
                <img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
                <h5>Company Name</h5>
            </div> -->
            <div class="icons d-flex flex-column align-items-center">
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-home"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-users"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-list"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-file-text"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a>
                <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-database"></i></a>
            </div>
        </div>
    </div>
    <div class="main-body-content w-100 ets-pt">
        <h1 align="center" ><strong>Danh sách sản phẩm</strong></h1>
        <a href="routeAdmin.php?admin=add" class="btn btn-success">Add</a>
            <table class="table table-bordered table-hover">
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
                    <td><a href="routeAdmin.php?admin=delete&id=<?php echo $product['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach?>
            </table>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#open-menu").click(function(){
            if(jQuery('#page-container').hasClass('show-menu')){
                jQuery("#page-container").removeClass('show-menu');
            }

            else{
                jQuery("#page-container").addClass('show-menu');
            }
        });
    });
</script>
</body>
</html>
