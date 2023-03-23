<?php

class BaseModel
{
    protected $conn;
    protected $table;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    public function __destruct()
    {

    }
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function getBy(array $data = [])
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ";
        $i = 0;
        foreach ($data as $key => $value) {
            $query .= $key . "=?";
            if ($i < count($data) - 1) {
                $query .= " AND ";
            }
            $i++;
        }
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(str_repeat("s", count($data)), ...array_values($data));
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }
    // need override
}
