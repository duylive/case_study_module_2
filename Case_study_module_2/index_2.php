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
    require 'model/assassinModel/DBAssassin.php';
    require 'model/assassinModel/Assassin.php';
    require 'model/assassinModel/DBconnect.php';
    include 'controller/assassinController/ControllerAssassin.php';
    $page = isset($_REQUEST['page'])?$_REQUEST['page']:null;
    $controller= new ControllerAssassin();
    switch ($page){
        case 'add':$controller->add();break;
        case 'search':$controller->search();break;
        case 'update':$controller->update();break;
        case 'delete':$controller->delete();break;
        default:$controller->Viewlist();break;
    }
?>
</body>
</html>
