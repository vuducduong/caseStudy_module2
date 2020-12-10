<?php


namespace app\controller;


use app\model\user_model\Member;
use app\model\user_model\MemberModel;

class MemberController
{
    protected $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "src/view/Sign_in/sign_in.php";
        } else {
            $user_name = $_REQUEST['userName'];
            $pass_word = $_REQUEST['passWord'];
            $CheckUserPass = $this->memberModel->login($user_name);
            if ($user_name == "admin" && $CheckUserPass['passWord'] === $pass_word){
                $_SESSION['user'] = $user_name;
                $_SESSION['password'] = $pass_word;
                header("location:routeAdmin.php");
            }
            elseif(!empty($CheckUserPass) && $CheckUserPass['passWord'] === $pass_word) {
                $_SESSION['user'] = $user_name;
                $_SESSION['password'] = $pass_word;
                header("location:index.php");

            }
            else{
                include_once "src/view/Sign_in/sign_in.php";
            }

        }
    }

    public function logOut()
    {

        if (!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('location:index.php');

    }
}

