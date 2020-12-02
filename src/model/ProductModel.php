<?php


namespace app\model;


class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }
    public function getAll(){
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function getPhone($productType){
        $sql = "SELECT * FROM products WHERE productType =:productType";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productType',$productType);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getId($id){
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function addProduct($product){
        $sql = "INSERT INTO `products`(`productName`, `price`,`productType`, `image`) 
        VALUES (:productName,:price,:productType,:image)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName',$product->getProductName());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':productType',$product->getProductType());
        $stmt->bindParam(':image',$product->getImage());
        $stmt->execute();
    }
}