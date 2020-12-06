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
        $this->memberModel->login();
        header("index.php");
        $user_name = $_REQUEST['userName'];
        $pass_word = $_REQUEST['passWord'];
        $member = new Member($user_name,$pass_word);
        $this->memberModel->login($member);
    }
}