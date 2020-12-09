<?php


namespace app\model\orders_model;


use app\model\DBconnect;

class OrderModel extends DBconnect
{
    public function showOrder()
    {
        $sql = "SELECT orders.orderNumber,users.fullname,products.productName,orders.priceEach,orders.quantityOrdered,orders.orderDate,orders.shippedDate,orders.status FROM `orders` 
                INNER JOIN users on orders.user_id = users.id
                INNER JOIN orderdetails on orders.orderNumber = orderdetails.orderNumber
                INNER Join products on orderdetails.product_Id = products.id";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }

}