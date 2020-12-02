<?php


namespace app\controller;


use app\model\ProductModel;

class AdminController
{
    protected $adminController;

    public function __construct()
    {
        $this->adminController = new ProductModel();
    }

    public function showProduct()
    {
        $products = $this->adminController->getAll();
        include_once "src/view/pageAdmin.php";
    }
    public function addProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            include_once "src/view/add.php";
        }
        else{
            $name = $_REQUEST['productName'];
            $type = $_REQUEST['productType'];
            $price = $_REQUEST['price'];
        }
    }

    public function editProduct()
    {

    }

    public function deleteProduct()
    {

    }
}