<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class UserController extends BaseController
{
  private $userModel;
  private $table;
  function __construct()
  {
    $this->folder = 'users';
    $this->table = 'users';
    $this->userModel = $this->model( 'AdminUserModel');
    
  }
  public function home()
  {
    $users = $this->userModel->getBy(['role' => 0]);
    $data = array('users' => $users);
    $this->render('home', $data);
  }

  public function ban()
  {
    echo "hello: " . $_POST['id'];
    if (isset($_POST['btn-banUser'])) {
      $id = $_POST['id'];
      $this->userModel->ban($this->table,$id);
      header('Location: /admin/user/home');
    }
  }
  public function detail()
  {
    if (isset($_POST['detail-user-btn'])) {
      $id = $_POST['id'];
      $result = $this->userModel->getById($id);
      $user = $result;
      $data = array('user' => $user);
      $this->render('detail', $data);
    }
  }
}