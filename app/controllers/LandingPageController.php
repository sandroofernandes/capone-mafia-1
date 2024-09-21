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
      'title' => $_SESSION['clientName'] . ' aguarde você será direcionado!' . TITLE_SEPARATOR . SITE_NAME,
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
    $phoneZap = "5522992216934";
    // $phoneZap = "554499560659";

    // https://wa.me/554499560659?text=Manda%20a%20ODD%203%20da%20Mafia%20Polonesa!
    // $textZap = "Oi meu nome é " . $name . ", meu número de contato é " . $phoneClient  . ".\nManda pra mim a ODD da máfia Polonesa.";
    $textZap = "Manda a ODD 3 da Mafia Polonesa!";

    $textZapEncode = urlencode(str_replace('\n', '%0A', $textZap));

    $link = 'https://wa.me/' . $phoneZap . '?text=' . $textZapEncode;

    $_SESSION['clientName'] = $name;
    $_SESSION['url_redirect'] = $link;

    // return Redirect::to($link);
    return Redirect::to('/page-redirect');
  }
}
