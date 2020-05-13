<?php

namespace Controller;


use function Couchbase\defaultDecoder;

use model\Gun;
use model\GunDB;
use model\DBconnection;


class GunController
{
    public $gunDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost;dbname=gun_manager", "admin", "123456");
        $this->gunDB = new GunDB($connection->connect());
    }

    public function add()
    {   var_dump($_REQUEST);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "view/add.php";
        } else {
            $name = $_POST['name'];
            $series = $_POST['series'];
            $branch = $_POST['branch'];
            $content = $_POST['content'];
            $origin = $_POST['origin'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $type_id = $_POST['type_id'];
            $size_bullet_id = $_POST['size_bullet_id'];
            $gun = new Gun($name, $series, $branch, $content, $origin, $price, $status, $type_id, $size_bullet_id);
            $this->gunDB->create($gun);
            $message = "Created a gun";
            header('location: index.php?page=');
            include "view/add.php";

        }
    }

    public function index()
    {
        $guns = $this->gunDB->getAll();
        include "view/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $gun = $this->gunDB->get($id);
        include "view/view.php";

    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $gun = $this->gunDB->get($id);
            header('location: index.php?page=');
            include "view/delete.php";
        } else {
            $id = $_GET['id'];
            $this->gunDB->delete($id);
            header('location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $gun = $this->gunDB->get($id);
            header('location: index.php?page=');
            include "view/edit.php";
        } else {
            $id = $_GET['id'];
            $gun = new Gun($_POST['name'], $_POST['series'], $_POST['branch'], $_POST['content'], $_POST['origin'], $_POST['price'], $_POST['status'], $_POST['type_id'], $_POST['size_bullet_id']);
            $this->gunDB->update($id, $gun);
            header('location: index.php?page=');
        }
    }





}