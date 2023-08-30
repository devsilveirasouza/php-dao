<?php

class Sql extends PDO
{

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=phpDao", "usertest", "123456");
    }

    private function setParams($statments, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($statments, $key, $value);
        }
    }

    private function setParam($statment, $key, $value)
    {
        $statment->bindParam(":{$key}", $value);
    }

    public function execQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array())
    {
        $stmt = $this->execQuery($rawQuery, $params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>