<?php


namespace app\controller;


use app\model\user_model\User;
use app\model\user_model\UserModel;

class SignUp
{
    protected $newUser;

    public function __construct()
    {
        $this->newUser = new UserModel();
    }

    public function signUp()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/Sign_up/Sign_Up.php";
        } else {
            $userName = $_REQUEST['userName'];
            $passWord = $_REQUEST['passWord'];
            $fullname = $_REQUEST['fullname'];
            $address = $_REQUEST['address'];
            $sex = $_REQUEST['sex'];
            $email = $_REQUEST['email'];
            $phoneNumber = $_REQUEST['phoneNumber'];
            $users = $this->newUser->showListUser();
            foreach ($users as $key=>$user) {
                if ($userName !== $user['userName'] && $email !== $user['email'] && $phoneNumber !== $user['phoneNumber']) {
                    $user = new User($userName, $passWord, $fullname, $address, $sex, $email, $phoneNumber);
                    $this->newUser->addUser($user);
                    header("location:index.php?page=sign-in");
                }
            }
            echo "tài khoản của bạn đã bị trùng";

        }
    }
}