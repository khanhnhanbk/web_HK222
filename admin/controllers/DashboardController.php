<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class DashboardController extends BaseController
{
  function __construct()
  {
    $this->folder = 'dashboards';
  }

  public function home()
  {
    $this->render('home');
  }

  public function error()
  {
    $this->render('error');
  }

}
