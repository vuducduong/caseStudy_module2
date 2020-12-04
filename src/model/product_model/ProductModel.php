<?php


namespace app\model\product_model;


use app\model\DBconnect;

class ProductModel extends DBconnect
{
    public function getAll(){
        $sql = "SELECT * FROM products";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();

    }
    public function getPhone($productType){
        $sql = "SELECT * FROM products WHERE productType =:productType";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':productType',$productType);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getId($id){
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function addProduct($product){
        $sql = "INSERT INTO products(productName,price,productType,image) VALUES (:productName,:price,:productType,:image)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':productName',$product->getProductName());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':productType',$product->getProductType());
        $stmt->bindParam(':image',$product->getImage());
        $stmt->execute();
    }
    public function editProduct($newProduct){
        $sql = "UPDATE products SET productName=:productName,price=:price,productType=:productType,image=:image WHERE id =:id";
        $stmt = $this->connect()->prepare($sql);
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
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

    public function searchProduct($search)
    {
        $sql = "SELECT * FROM `products` WHERE productName=:productName or productType=:productType or price=:price";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':productName',$search);
        $stmt->bindParam(':productType',$search);
        $stmt->bindParam(':price',$search);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
