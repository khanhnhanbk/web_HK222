<?php 
require_once(BASE_PATH  . 'lib/BaseModel.php');

class AdminUserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function ban($table, $id)
    {
        $sql = "UPDATE $table SET role = -1 WHERE id = $id";
        $this->conn->query($sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM users JOIN user_info ON users.id = user_info.user_id WHERE users.id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    

}