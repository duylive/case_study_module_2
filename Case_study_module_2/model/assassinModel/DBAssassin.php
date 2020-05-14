<?php


namespace model;


class DBAssassin
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection=$connection;
    }
    public function getList(){
        $sql = "SELECT * FROM `assassin` ";
        $stmt=$this->connection->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function add($person){
        $sql = "INSERT INTO `assassin`(`name`, `image`, `text`) VALUES ('$person->name','$person->image','$person->text')";
        $this->connection->exec($sql);
    }
}