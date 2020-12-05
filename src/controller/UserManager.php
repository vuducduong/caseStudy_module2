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

        include_once "src/view/view_admin/view_admin_user/list_user.php";
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/view_admin/view_admin_user/add_user.php";
        } else {
            $name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $phoneNumber = $_REQUEST['phoneNumber'];
            $user = new User($name, $address, $email, $phoneNumber);
            $this->userModel->addUser($user);
            header("location:routeAdmin.php?admin=user");
        }
    }

    public function editUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $user = $this->userModel->getUserById($id);
            include_once "src/view/view_admin/view_admin_user/edit_user.php";
        }
        else{
            $name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $phoneNumber = $_REQUEST['phoneNumber'];
            $id = $_REQUEST['id'];
            $newUser = new User($name,$address,$email,$phoneNumber);
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