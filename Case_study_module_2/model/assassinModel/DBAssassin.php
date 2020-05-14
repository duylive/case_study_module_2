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
        $sql = "INSERT INTO `assassin`(`name`, `image`, `text`, `price`) VALUES ('$person->name','$person->image','$person->info','$person->price')";
        $this->connection->exec($sql);
    }
    public function delete($id){
        $sql="DELETE FROM `assassin` WHERE id =$id";
        $this->connection->exec($sql);
    }
    public function update($id,$person){
        $sql = "UPDATE `assassin` SET `name`='$person->name',`image`='$person->image',`text`='$person->info',`price`='$person->price' WHERE id=$id";
        $this->connection->exec($sql);
    }

}