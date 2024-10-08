<?php

namespace app\controllers;

use app\classes\Utils;
use app\library\Redirect;
use app\library\View;

class LandingPageController
{
  public function landing_page_03()
  {
    View::render('landing_page_03', [
      'title' => 'Direto da Fábrica' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'landing_page landing_page_03',
      'thisPage' => 'landing_page_03',
      'favicon' => SITE_ICON
    ]);
  }

  public function pageRedirectGet()
  {
    if (!isset($_SESSION['url_redirect'])) {
      return Redirect::to('/');
    }

    View::render('page_redirect', [
      'title' => $_SESSION['client_name'] . ' aguarde você será direcionado!' . TITLE_SEPARATOR . SITE_NAME,
      'pageGroup' => 'landing_page page_redirect',
      'thisPage' => 'page_redirect',
      'favicon' => SITE_ICON
    ]);
  }

  public function pageRedirectPost()
  {
    $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_DEFAULT);

    if (!isset($name) || !isset($phone)) {
      return Redirect::to('/');
    }

    $phoneClient = Utils::cleanString($phone);

    // $phoneZap = "5522992216934";
    $phoneZap = "554499560659";

    $textZap = "Manda a ODD 3 da Mafia Polonesa!";
    // $textZap = "Oi meu nome é " . $name . ", meu número de contato é " . $phoneClient  . ".\nManda pra mim a ODD da máfia Polonesa.";
    // https://wa.me/554499560659?text=Manda%20a%20ODD%203%20da%20Mafia%20Polonesa!

    $textZapEncode = urlencode(str_replace('\n', '%0A', $textZap));

    // $link = 'https://wa.me/' . $phoneZap . '?text=' . $textZapEncode;
    $link = 'https://t.me/mafiacapone_bot?start=w30423039';

    $_SESSION['client_name'] = $name;
    $_SESSION['client_phone'] = $phoneClient;
    $_SESSION['url_redirect'] = $link;

    // return Redirect::to($link);
    return Redirect::to('/page-redirect');
  }

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
