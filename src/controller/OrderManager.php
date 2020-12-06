<?php


namespace app\controller;


use app\model\orders_model\OrderModel;

class OrderManager
{
    protected $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function showOrders()
    {
        $orders = $this->orderModel->showOrder();
        include_once "src/view/view_admin/orders_management/orders_list.php";
    }
}