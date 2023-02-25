<?php 
require_once(BASE_PATH  . 'lib/BaseModel.php');

class AdminUserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "users";
    }

    public function create(array $data = [])
    {
        $query = "INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", ...array_values($data));
        $stmt->execute();
        return $stmt->insert_id;
    }
    public function ban($id)
    {
        $query = "UPDATE users SET role = -1 WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}