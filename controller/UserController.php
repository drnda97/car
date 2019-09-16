<?php

class UserController
{
  public function userpage()
  {
    View::loadpage('user', 'userpage');
  }
  public function mark()
  {
    $user = new User();
    $mark = $_GET['mark'];
    $_SESSION['marks'] = $user->getMark($mark);
    View::loadpage('user', 'mark');
  }
  public function car()
  {
    $user = new User();
    $model = $_GET['model'];
    $_SESSION['models'] = $user->getModel($model);
    $_SESSION['descriptions'] = $user->getDescription();
    View::loadpage('user', 'car');
  }
  public function gallery()
  {
    $user = new User();
    $_SESSION['images'] = $user->getImages();
    View::loadpage('user', 'gallery');
  }
}
