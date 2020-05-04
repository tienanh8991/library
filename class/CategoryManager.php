<?php


class CategoryManager
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Database();
    }
    public function setData($id,$name)
    {
        $sql = 'INSERT INTO categories VALUES (?,?); ';
        $stmt = $this->conn->connect();
        $stmt = $stmt->prepare($sql);

        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$name);

        $stmt->execute();
    }
    public function deleteData($id)
    {
        $sql = 'DELETE FROM categories WHERE id = ?;';
        $stmt = $this->conn->connect();
        $stmt = $stmt->prepare($sql);

        $stmt->bindParam(1,$id);

        $stmt->execute();
    }
    public function updateData($name,$id)
    {
        $sql = 'UPDATE categories SET name = :name WHERE id = :id ;';
        $stmt = $this->conn->connect();
        $stmt = $stmt->prepare($sql);

        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
    }
    public function getAllData()
    {
        $sql = 'SELECT * FROM categories;';
        $stmt = $this->conn->connect();
        $stmt = $stmt->prepare($sql);

        $stmt->execute();
        return $stmt->fetchAll();
    }
}