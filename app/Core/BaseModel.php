<?php

require_once __DIR__ . '/../Database/Database.php';

abstract class BaseModel
{
    protected $conn;
    protected $table;
    protected $id;
    protected $primaryKey = 'id';

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function create(array $data)
    {
        $columns = implode(',', array_keys($data));
        $values = ':' . implode(',:', array_keys($data));
        $sql = "INSERT INTO {$this->table}($columns) VALUES ($values)";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function update($id, array $data)
    {
        $columns = [];
        foreach ($data as $key=>$value) {
            $columns[] = "$key = :$key";
        }
        $sql = "UPDATE {$this->table} SET " .implode(', ', $columns). " WHERE {$this->primaryKey} = :id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id ;
        return $stmt->execute($data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function findById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
