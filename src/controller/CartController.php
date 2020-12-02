<?php


namespace app\controller;


use app\model\ProductModel;

class CartController
{
    protected $cartModel;

    public function __construct()
    {
        $this->cartModel = new ProductModel();
    }

    public function addToCart()
    {
        $id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : "";
        $products = $this->cartModel->getId($id);
        if (!empty($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $item = [
                'id' => $_GET['id'],
                'image' => $products['image'],
                'quantity' => 1,
                'productName' => $products['productName'],
                'price' => $products['price'],
            ];
            if (empty($_SESSION['cart'])) {
                $_SESSION['cart'][$id] = $item;
            } else {
                if (!empty($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['quantity'] += 1;
                } else {
                    $_SESSION['cart'][$id] = $item;
                }
            }
        }
        include_once "src/view/cart.php";
    }

    public function removeProduct()
    {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($key == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
        header('location:http://localhost/case_studymodule2/index.php?page=action&action=cart');
    }

    public function deleteInCart()
    {
        if (!empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        header('location:http://localhost/case_studymodule2/index.php?page=action&action=cart');
    }

    public function updateCart()
    {
        $_SESSION['cart'] = $_REQUEST['cart'];
        header('location:http://localhost/case_studymodule2/index.php?page=action&action=cart');
    }
}