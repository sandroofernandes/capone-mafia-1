<?php

namespace app\controllers;

use app\classes\Utils;
use app\library\Redirect;
use app\library\View;

class WheelPageController
{
  public function bonus_seubet()
  {
    View::render('wheel/page_seubet', [
      'title' => 'Bônus Seubet' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'landing_page page_seubet',
      'thisPage' => 'page_seubet',
      'favicon' => SITE_ICON
    ]);
  }

  public function bonus_ganhabet()
  {
    View::render('wheel/page_ganhabet', [
      'title' => 'Bônus Ganhabet' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'landing_page page_ganhabet',
      'thisPage' => 'page_ganhabet',
      'favicon' => SITE_ICON
    ]);
  }
}
