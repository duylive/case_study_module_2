<?php
require "model/Gun.php";
require 'model/GunDB.php';
require "model/DBconnection.php";
require 'model/DBConnect.php';
require 'model/DBLogin.php';
require 'model/user_password.php';
require "controller/GunController.php";
use \Controller\GunController;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guns is my life</title>
</head>
<body>

<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php"><h1>Guns management</h1></a>
    </div>
    <?php
    $controller = new GunController();
    $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
    switch ($page){
        case 'add':
            $controller->add();
            break;
        case 'view':
            $controller->view();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>

</body>
</html>
