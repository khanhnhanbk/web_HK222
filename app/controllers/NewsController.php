<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class NewsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'news';
  }

  public function home()
  {
    $this->render('home');
  }
  public function detail()
  {
    $calculate = $this->model('calculate');
    $data = $calculate->add(1, 2);
    $this->render('detail', [
      'title' => 'Detail page',
      'subtitle' => 'Lorem Ipsum Dolor',
      'img_url' => 'https://picsum.photos/200/300',
    ]); // 'key' => value
  }
}
