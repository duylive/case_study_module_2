<?php

namespace Model;

class GunDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($gun)
    {
        $sql = "INSERT INTO guns (name, series, branch, content, origin, price, status, type_id, size_bullet_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $gun->name);
        $statement->bindParam(2, $gun->series);
        $statement->bindParam(3, $gun->branch);
        $statement->bindParam(4, $gun->content);
        $statement->bindParam(5, $gun->origin);
        $statement->bindParam(6, $gun->price);
        $statement->bindParam(7, $gun->status);
        $statement->bindParam(8, $gun->type_id);
        $statement->bindParam(9, $gun->size_bullet_id);
        $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM guns";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $guns = [];
        foreach ($result as $row) {
            $gun = new Gun($row['name'], $row['series'], $row['branch'], $row['content'], $row['origin'], $row['price'], $row['status'], $row['type_id'], $row['size_bullet_id']);
            $gun->id = $row['id'];
            $guns[] = $gun;
        }
        return $guns;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM guns WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $gun = new Gun($row['name'], $row['series'], $row['branch'], $row['content'], $row['origin'], $row['price'], $row['status'], $row['type_id'], $row['size_bullet_id']);
        $gun->id = $row['id'];
        return $gun;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM guns WHERE id =  ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
    }

    public function update($id, $gun)
    {
        $sql = "UPDATE gun SET name = ?, series = ?, branch = ?, content = ?, origin = ?, price = ?, status = ?, type_id = ?, size_bullet_id = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $gun->name);
        $statement->bindParam(2, $gun->series);
        $statement->bindParam(3, $gun->branch);
        $statement->bindParam(4, $gun->content);
        $statement->bindParam(5, $gun->origin);
        $statement->bindParam(6, $gun->price);
        $statement->bindParam(7, $gun->status);
        $statement->bindParam(8, $gun->type_id);
        $statement->bindParam(9, $gun->size_bullet_id);
        $statement->bindParam(10, $id);
        $statement->execute();
    }
}
