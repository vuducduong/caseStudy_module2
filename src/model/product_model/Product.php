<?php


namespace app\model\prodt_model;

class Product
{
    protected $id;
    protected $productName;
    protected $price;
    protected $productType;
    protected $image;

    public function __construct($productName,$price,$productType,$image)
    {
        $this->productName=$productName;
        $this->price=$price;
        $this->productType=$productType;
        $this->image=$image;
    }
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}