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
        $sql = "INSERT INTO users(userName,passWord,fullname,address,sex,email,phoneNumber) VALUES (:userName,:passWord,:fullname,:address,:sex,:email,:phoneNumber)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userName",$user->getUserName());
        $stmt->bindParam(":passWord",$user->getPassWord());
        $stmt->bindParam(":fullname",$user->getFullName());
        $stmt->bindParam(":address",$user->getAddress());
        $stmt->bindParam(":sex",$user->getSex());
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
        $sql = "UPDATE `users` SET userName=:userName,passWord=:passWord,`fullname`=:fullname,`address`=:address,sex=:sex,`email`=:email,`phoneNumber`=:phoneNumber WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userName",$newUser->getUserName());
        $stmt->bindParam(":passWord",$newUser->getPassWord());
        $stmt->bindParam(":fullname",$newUser->getFullName());
        $stmt->bindParam(":address",$newUser->getAddress());
        $stmt->bindParam(":sex",$newUser->getSex());
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