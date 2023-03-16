<?php 
require_once(BASE_PATH  . 'lib/BaseModel.php');

class AdminUserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($table,array $data = [])
    {
        $query = "INSERT INTO " . $table ."(name, email, password, role) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", ...array_values($data));
        $stmt->execute();
        return $stmt->insert_id;
    }
    public function ban($table,$id)
    {
        $query = "UPDATE users SET role = -1 WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    public function getById($table,$id){
        $query = "SELECT * FROM " . ($table) . " WHERE id = " . $id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;

    }
    public function insert($table,$row){
        $columns = array();
        $values = array();
        foreach ($row as $key => $value) {
        $columns[] = $key;
        $values[] = mysqli_real_escape_string($this->conn, $value);
        }
        $sql = "INSERT INTO $table (" . implode(",", $columns) . ") VALUES ('" . implode("','", $values) . "')";
        return mysqli_query($this->conn, $sql);
    }
}