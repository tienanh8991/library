<?php


class Database
{
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '123456@abc';
    }
    public function connect()
    {
        try {
            new PDO('mysql:host=localhost;dbname=library', $this->username, $this->password);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return new PDO('mysql:host=localhost;dbname=library', $this->username, $this->password);
    }
}