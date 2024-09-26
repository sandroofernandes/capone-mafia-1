<?php

namespace app\controllers;

use app\classes\Utils;
use app\library\Redirect;
use app\library\View;

class ThanksPageController
{
  public function thanks_01()
  {
    View::render('thanks/thanks_01', [
      'title' => 'Obrigado' . TITLE_SEPARATOR . SITE_NAME,
      'favicon' => SITE_ICON,
      'pageGroup' => 'thanks_page thanks_01',
      'thisPage' => 'thanks_01',
      'linkRedirect' => 'https://t.me/+XLZLg6YmIiAyNGUx',
    ]);
  }
}
