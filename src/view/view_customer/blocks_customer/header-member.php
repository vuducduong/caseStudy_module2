<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smobile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #FF6347;">
    <div class="container">
        <a class="navbar-brand">
            <img width="80px" src="http://localhost/case_studymodule2/uploads/hn.png"
                 class="img-fluid rounded-square border bg-secoundry mb-3"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <h4><a class="nav-link text-light" href="http://localhost/case_studymodule2/index.php">Home</a></h4>
                </li>
                <li class="nav-item active dropdown">
                    <h4><a class="nav-link text-light" href="#" id="navbarDropdown">Sản phẩm</a></h4>
                    <div class="dropdown-content">
                        <a class="dropdown-item" href="index.php?page=iphone">Iphone</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=samsung">Samsung</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=Vinsmart">Vinsmart</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li
                        style="height: 20px;margin: auto;position: relative;top: -10px;">
                    <form method="post" action="http://localhost/case_studymodule2/index.php?page=search"
                          class="form-inline my-2 my-lg-0">
                        <div class="input-group input-group-sm">
                            <input type="text" name="search" class="form-control" aria-label="Small"
                                   aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
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
                </li>
                <li class="nav-item active">
                    <h5 style="height: 20px">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <?php echo $_SESSION['user'] ?>
                        <a class="nav-link text-light" href="index.php?page=log-out">Log out</a></h5>
                </li>
            </ul>
        </div>
    </div>
</nav>

