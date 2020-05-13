<?php
    require 'model/DBConnection.php';
    require 'model/DBLogin.php';
    require 'model/user_password.php';
    include 'controller/ControllerLogin.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $page = isset($_REQUEST['page'])?$_REQUEST['page']:null;
    $controller=new \controller\ControllerLogin();
    switch ($page){
        case 'register':$controller->register();break;
        case 'forgotPassword':$controller->getBackPassword();break;
        default:$controller->login();break;

    }

?>
</body>
</html>
