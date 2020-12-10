<?php


namespace app\controller;


use app\model\product_model\Product;
use app\model\product_model\ProductModel;

class AdminController
{
    protected $admin_Model;

    public function __construct()
    {
        $this->admin_Model = new ProductModel();
    }

    public function showProduct()
    {
        $products = $this->admin_Model->getAll();
        include_once "src/view/view_admin/product_management/pageAdmin.php";
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/view_admin/product_management/add_product.php";
        } else {
            $name = $_REQUEST['productName'];
            $type = $_REQUEST['productType'];
            $price = $_REQUEST['price'];
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo 'success';
            } else {
                echo 'fail';
            }
            $image = $path == 'uploads/' ? 'upload/default.png' : $path;
            $product = new Product($name, $price, $type, $image);
            $this->admin_Model->addProduct($product);
            header("location:routeAdmin.php");
        }
    }

    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $products = $this->admin_Model->getId($id);
            include_once "src/view/view_admin/product_management/edit_product.php";
        } else {
            $name = $_REQUEST['productName'];
            $type = $_REQUEST['productType'];
            $price = $_REQUEST['price'];
            $id = $_REQUEST['id'];
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo 'success';
            } else {
                echo 'fail';
            }
            $image = $path == 'uploads/' ? 'upload/default.png' : $path;
            if (!empty($name) && !empty($type) && !empty($price) && !empty($id) && !empty($image)) {
                $newProduct = new Product($name, $price, $type, $image);
                $newProduct->setId($id);
                $this->admin_Model->editProduct($newProduct);
                header("location:routeAdmin.php");
            } else {
                include_once "src/view/view_admin/product_management/edit_product.php";
            }
        }
    }

    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->admin_Model->deleteProduct($id);
        header("location:routeAdmin.php");
    }

    public function search()
    {
        $key = "%".$_REQUEST['productName']."%";
        $products = $this->admin_Model->search($key);
        include_once "src/view/view_admin/product_management/pageAdmin.php";
    }
}