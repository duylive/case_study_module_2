<?php

namespace controller;

use model\user_password;
use model\DBConnect;
use model\DBLogin;

include 'model/DBConnect.php';

class ControllerLogin
{
    public $DBConnectionLogin;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=gun_manager', 'admin', '123456');
        $this->DBConnectionLogin = new DBLogin($connection->connection());
    }

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->DBConnectionLogin->checkLogin($_POST['email']);
            if ($result) {
                header('location: index.php');
            } else {
                $message = "wrong password or account";
                header('location: index_1.php');
            }
        }
        include 'view/loginpage.php';

    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = new user_password($_POST['email'], $_POST['password'], $_POST['name'], $_POST['address'],
                $_POST['phone']);
            $this->DBConnectionLogin->register($user);
            header('location: index_1.php');

        }
        include 'view/register.php';


    }

    public function getBackPassword()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result = $this->DBConnectionLogin->getpassword($email, $phone);
            if ($result) {
                $message = 'you password is ' . $result['password'];
            }

        }
        include 'view/forgotPassword.php';
    }
}