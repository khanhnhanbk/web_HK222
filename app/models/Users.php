<?php
class Users
{
  private $conn;
  public function __construct()
  {
    $this->conn = DB::getInstance();
  }
  public function all()
  {
    $query = "SELECT * FROM users";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
  }

  public function getBy(array $data = [])
  {
    $query = "SELECT * FROM users WHERE ";
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
  public function create(array $data = [])
  {
    $query = "INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sssi", ...array_values($data));
    $stmt->execute();
    return $stmt->insert_id;
  }
}
