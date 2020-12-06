<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

</body>
</html>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <!--<h1 style="text-align: center;">Game 01 (9137)</h1>-->
            <div class="login-panel panel panel-default" style="margin-top:15%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="/login.html" th:action="@{/login.html}" method="POST">
                        <fieldset>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa"
                                                                       aria-hidden="true"></i></span>
                                    <input class="form-control" placeholder="Tên đăng nhập" name="j_username"
                                           type="text" autofocus="autofocus" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input class="form-control" placeholder="Mật khẩu" name="j_password" type="password"
                                           value="" required/>
                                </div>
                            </div>
                            <button href="index.html" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer text-center">
                    Copyright © All right reserved. <a href="http://yotel.vn/">yotel.vn</a>™
                </div>
            </div>
        </div>
    </div>
</div>