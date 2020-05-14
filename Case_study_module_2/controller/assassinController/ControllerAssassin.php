<?php
use model\DBAssassin;
use model\Assassin;
use model\DBconnect;

class ControllerAssassin
{
    private $dbAssassin;
    public function __construct()
    {
        $connect = new DBconnect('mysql:host=localhost;dbname=assassin','admin','123456');
        $this->dbAssassin=new DBAssassin($connect->connection());
    }
    public function Viewlist(){
         $result = $this->dbAssassin->getList();
         include 'view/assassinView/list.php';
    }
    public function add(){
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST['name'];
            $info=$_POST['someInfo'];
            $price=$_POST['price'];
            $target ="*image/*".basename($_FILES['image']['name']);
            $image=$_FILES['image']['name'];
            $person = new Assassin($name,$image,$info,$price);
            $this->dbAssassin->add($person);
            /*move_uploaded_file($_FILES['image']['tmp_name'],$target);*/
            header('location: index_2.php?page=');

        }
        include 'view/assassinView/add.php';
    }
    public function search(){

    }
    public function delete(){
        $this->dbAssassin->delete($_GET['id']);
        header('location: index_2.php?page=');
        include 'view/assassinView/delete.php';
    }
    public function update(){
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST['name'];
            $info=$_POST['someInfo'];
            $price=$_POST['price'];
            $target ="*../view/assassinView/image/*".basename($_FILES['image']['name']);
            $image=$_FILES['image']['name'];
            $person = new Assassin($name,$image,$info,$price);
            $id = $_GET['id'];
            $this->dbAssassin->update($id,$person);
            /*move_uploaded_file($_FILES['image']['tmp_name'],$target);*/
            header('location: index_2.php?page=');
        }
        include 'view/assassinView/update.php';
    }
}