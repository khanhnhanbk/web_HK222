<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class UserController extends BaseController
{
  private $userModel;
  function __construct()
  {
    $this->folder = 'users';
    $this->userModel = $this->model('AdminUserModel');
  }
  public function home()
  {
    $users = $this->userModel->getAll();
    $data = array('users' => $users);
    $this->render('home', $data);
  }
  public function edit($id)
  {
    

  }
}