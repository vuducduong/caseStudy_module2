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
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <img  width="80px" src="http://localhost/case_studymodule2/uploads/nhatcuong.png" class="img-fluid rounded-square border bg-secoundry mb-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="http://localhost/case_studymodule2/index.php">Home</a>
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

                <form method="post" action="http://localhost/case_studymodule2/index.php?page=search" class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" name="search" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary btn-number">
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

