<?php


namespace app\model;

use PDO;
class DBconnect
{
    protected $username;
    protected $password;
    protected $dsn;

    public function __construct()
    {
        $this->username="root";
        $this->password='f';
        $this->dsn='mysql:host=localhost;dbname=casestudy';
    }
    public function connect(){
        $connect = new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}