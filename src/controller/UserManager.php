<?php


namespace app\controller;


use app\model\user_model\User;
use app\model\user_model\UserModel;

class UserManager
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showUser()
    {
        $users = $this->userModel->showListUser();

        include_once "src/view/view_admin/user_management/list_user.php";
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/view_admin/user_management/add_user.php";
        } else {
            $userName = $_REQUEST['userName'];
            $passWord = $_REQUEST['passWord'];
            $fullname = $_REQUEST['fullname'];
            $address = $_REQUEST['address'];
            $sex = $_REQUEST['sex'];
            $email = $_REQUEST['email'];
            $phoneNumber = $_REQUEST['phoneNumber'];
            $user = new User($userName,$passWord,$fullname,$address,$sex, $email, $phoneNumber);
            $this->userModel->addUser($user);
            header("location:routeAdmin.php?admin=user");
        }
    }

    public function editUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $user = $this->userModel->getUserById($id);
            include_once "src/view/view_admin/user_management/edit_user.php";
        }
        else{
            $userName = $_REQUEST['userName'];
            $passWord = $_REQUEST['passWord'];
            $fullname = $_REQUEST['fullname'];
            $address = $_REQUEST['address'];
            $sex = $_REQUEST['sex'];
            $email = $_REQUEST['email'];
            $phoneNumber = $_REQUEST['phoneNumber'];
            $id = $_REQUEST['id'];
            $newUser = new User($userName,$passWord,$fullname,$address,$sex, $email, $phoneNumber);
            $newUser->setId($id);
            $this->userModel->editUser($newUser);
            header("location:routeAdmin.php?admin=user");
        }
    }

    public function deleteUser()
    {
        $id =$_REQUEST['id'];
        $this->userModel->deleteUser($id);
        header("location:routeAdmin.php?admin=user");
    }
}