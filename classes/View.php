<?php

class View
{
  public static function loadpage($folder, $page)
  {
    include('./view/inc/header.php');
    include('./view/'.$folder.'/'.$page.'.php');
    include('./view/inc/footer.php');
  }
}
