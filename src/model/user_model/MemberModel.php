<?php


namespace app\model\user_model;


use app\model\DBconnect;

class MemberModel extends DBconnect
{
    public function login($member)
    {
        $sql = "SELECT userName,passWord FROM users where userName=:userName and passWord =:passWord";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userName",$member->getUserName());
        $stmt->bindParam(":passWord",$member->getPassWord());
        $stmt->execute();
    }
}