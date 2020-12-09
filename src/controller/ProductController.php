<?php


namespace app\controller;


use app\model\product_model\ProductModel;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function show(){

        $products = $this->productModel->getAll();
        include_once "src/view/view_customer/homepage.php";
    }
    public function showPhoneType($productType){
        $products = $this->productModel->getPhone($productType);
        include_once "src/view/view_customer/phoneType.php";
    }
    public function productDetail(){
        $product = $this->productModel->getAll();
        include_once "src/view/view_customer/productDetail.php";
    }
    public function search(){
        $search = $_REQUEST['search'];
        $products = $this->productModel->searchProduct($search);
        include_once "src/view/view_customer/phoneType.php";
    }

}