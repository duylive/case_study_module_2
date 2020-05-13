<?php


namespace model;


class DBLogin
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function checkLogin($username)
    {
        $sql = "SELECT * FROM `users` WHERE email='$username'";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetch();
        return $result;
    }

    public function register($user)
    {
        $sql = "INSERT INTO `users`( `name`, `email`, `password`, `address`, `phone`) VALUES ('$user->name','$user->email','$user->password','$user->address','$user->phone')";
        $this->connection->exec($sql);
    }

    public function getpassword($email, $phone)
    {
        $sql = "SELECT * FROM `users` WHERE email='$email' AND phone ='$phone'";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetch();
        return $result;
    }

}