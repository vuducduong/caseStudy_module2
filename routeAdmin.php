
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleAdmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<?php
require_once __DIR__.'/vendor/autoload.php';
$userManager = new \app\controller\UserManager();
$user = (isset($_REQUEST['user']))?$_REQUEST['user']:"";
$adminController = new \app\controller\AdminController();
$admin = (isset($_REQUEST['admin']))?$_REQUEST['admin']:"";
$orderManager = new \app\controller\OrderManager();
$order = (isset($_REQUEST['order']))? $_REQUEST['order']:"";
switch ($admin){
    case 'add':
        $adminController->addProduct();
        break;
    case 'edit':
        $adminController->editProduct();
        break;
    case 'delete':
        $adminController->deleteProduct();
        break;
    case 'user':
        switch ($user){
            case 'add-user':
                $userManager->addUser();
                break;
            case 'edit-user':
                $userManager->editUser();
                break;
            case 'delete-user':
                $userManager->deleteUser();
                break;
            default:
                $userManager->showUser();
        }
        break;
    case 'order':
        switch ($order){
            case 'add-order':
                $orderManager->addOrder();
                break;
            default:
                $orderManager->showOrders();
        }
        break;
    default:
        $adminController->showProduct();
}
