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
    public function addProduct(){

    }
    public function editProduct(){

    }
    public function deleteProduct(){

    }
}