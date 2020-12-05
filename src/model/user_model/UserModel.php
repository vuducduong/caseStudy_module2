<?php


namespace app\model\user_model;


use app\model\DBconnect;

class UserModel extends DBconnect
{

    public function showListUser()
    {
        $sql = "SELECT * FROM `users`";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }
    public function addUser($user){
        $sql = "INSERT INTO users(name,address,email,phoneNumber) VALUES (:name,:address,:email,:phoneNumber)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":name",$user->getName());
        $stmt->bindParam(":address",$user->getAddress());
        $stmt->bindParam(":email",$user->getEmail());
        $stmt->bindParam(":phoneNumber",$user->getPhoneNumber());
        $stmt->execute();
    }
    public function getUserById($id){
        $sql = "SELECT * FROM `users` WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function editUser($newUser)
    {
        $sql = "UPDATE `users` SET `name`=:name,`address`=:address,`email`=:email,`phoneNumber`=:phoneNumber WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":name",$newUser->getName());
        $stmt->bindParam(":address",$newUser->getAddress());
        $stmt->bindParam(":email",$newUser->getEmail());
        $stmt->bindParam(":phoneNumber",$newUser->getPhoneNumber());
        $stmt->bindParam(":id",$newUser->getId());
        $stmt->execute();
    }
    public function deleteUser($id)
    {
     $sql = "DELETE FROM `users` WHERE id=:id";
     $stmt = $this->connect()->prepare($sql);
     $stmt->bindParam(":id",$id);
     $stmt->execute();
    }

}