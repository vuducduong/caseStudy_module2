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
        include_once "src/view/homepage.php";
    }
    public function showPhoneType($productType){
        $products = $this->productModel->getPhone($productType);
        include_once "src/view/phoneType.php";
    }
    public function productDetail(){
        $product = $this->productModel->getAll();
        include_once "src/view/productDetail.php";
    }

}