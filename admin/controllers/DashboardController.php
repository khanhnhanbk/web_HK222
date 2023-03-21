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
    /*$products =
      [
        ['id' => 1, 'name' => "Product 1", 'price' => 1000, 'image' => "https://picsum.photos/200/300"],
        ['id' => 2, 'name' => "Product 2", 'price' => 2000, 'image' => "https://picsum.photos/200/300"],
        ['id' => 3, 'name' => "Product 3", 'price' => 3000, 'image' => "https://picsum.photos/200/300"],
      ];
    $data = array('products' => $products);
    $this->render('home', $data);*/
    $this->render('home');
  }

  public function error()
  {
    $this->render('error');
  }

}
