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

        include 'view/assassinView/add.php';
    }
}