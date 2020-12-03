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
        return $stmt->fetchAll();

    }
    public function getPhone($productType){
        $sql = "SELECT * FROM products WHERE productType =:productType";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productType',$productType);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getId($id){
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function addProduct($product){
        $sql = "INSERT INTO products(productName,price,productType,image) VALUES (:productName,:price,:productType,:image)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName',$product->getProductName());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':productType',$product->getProductType());
        $stmt->bindParam(':image',$product->getImage());
        $stmt->execute();
    }
    public function editProduct($newProduct){
        $sql = "UPDATE products SET productName=:productName,price=:price,productType=:productType,image=:image WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName',$newProduct->getProductName());
        $stmt->bindParam(':price',$newProduct->getPrice());
        $stmt->bindParam(':productType',$newProduct->getProductType());
        $stmt->bindParam(':image',$newProduct->getImage());
        $stmt->bindParam(':id',$newProduct->getId());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `products` WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function searchProduct($productName,$productType,$price)
    {
        $sql = "SELECT * FROM `products` WHERE productName=:productName or productType=:productType or price=:price";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName',$productName);
        $stmt->bindParam(':productType',$productType);
        $stmt->bindParam(':price',$price);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
