<?php

namespace app\controllers;

use app\library\View;

class HomeController
{
  public function index()
  {
    View::render('home', [
      'title' => SITE_NAME,
      'pageGroup' => 'home',
      'thisPage' => 'home',
      'favicon' => SITE_ICON
    ]);
  }
}
