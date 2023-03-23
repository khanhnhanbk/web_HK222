<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class UserModel extends BaseModel
{
  public function __construct()
  {
    parent::__construct();
    $this->table = "users";
  }

  public function create(array $data = [])
  {
    $query = "INSERT INTO users (username, email, password, role) VALUES (?,?,?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sssi", ...array_values($data));
    $stmt->execute();
    return $stmt->insert_id;
  }
}
