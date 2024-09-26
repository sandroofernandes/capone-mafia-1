<?php

namespace app\controllers;

use app\library\View;

class PageController
{
  public function privacyCookie()
  {
    View::render('default_pages/page_privacy_cookie', [
      'title' => 'Política de Cookies' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => 'privacy_cookie',
      'favicon' => SITE_ICON
    ]);
  }

  public function privacyPolicy()
  {
    View::render('default_pages/page_privacy_policy', [
      'title' => 'Política de Privacidade' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => 'privacy_policy',
      'favicon' => SITE_ICON
    ]);
  }

  public function termosUso()
  {
    View::render('default_pages/page_terms_conditions', [
      'title' => 'Termos e Condições' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => 'terms_conditions',
      'favicon' => SITE_ICON
    ]);
  }

  public function page404()
  {
    View::render('default_pages/page_404', [
      'title' => '404 - Página não encontrada' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => '404',
      'favicon' => SITE_ICON
    ]);
  }

  public function page403()
  {
    View::render('default_pages/page_403', [
      'title' => '403 - Acesso Negado' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => '403',
      'favicon' => SITE_ICON
    ]);
  }

  public function jsRequired()
  {
    View::render('default_pages/page_js_required', [
      'title' => 'JavaScript Necessário' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'page',
      'thisPage' => 'js_required',
      'favicon' => SITE_ICON
    ]);
  }
}
