<?php


namespace app\controller;


use app\model\ProductModel;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function show(){
        $products = $this->productModel->getAll();
        include_once "src/view/view-customer/homepage.php";
    }
    public function showPhoneType($productType){
        $products = $this->productModel->getPhone($productType);
        include_once "src/view/view-customer/phoneType.php";
    }
    public function productDetail(){
        $product = $this->productModel->getAll();
        include_once "src/view/view-customer/productDetail.php";
    }
    public function search(){
        $name = $_REQUEST['productName'];
        $type = $_REQUEST['productType'];
        $price = $_REQUEST['price'];
        $this->productModel->searchProduct($name,$type,$price);
        include_once "src/view/view-customer/homepage.php";
    }

}