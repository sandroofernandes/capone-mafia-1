<?php

try {
  $router->add('/', 'GET', 'HomeController:index');
  $router->add('/page-redirect', 'GET', 'LandingPageController:pageRedirectGet');
  $router->add('/page-redirect', 'POST', 'LandingPageController:pageRedirectPost');
  $router->add('/ld-3', 'GET', 'LandingPageController:landing_page_03');

  $router->add('/acesso-privado', 'GET', 'ThanksPageController:thanks_01');

  $router->add('/politica-privacidade', 'GET', 'PageController:privacyPolicy');
  $router->add('/politica-cookie', 'GET', 'PageController:privacyCookie');
  $router->add('/termos-uso', 'GET', 'PageController:termosUso');
  $router->add('/403', 'GET', 'PageController:page403');
  $router->add('/404', 'GET', 'PageController:page404');
  $router->add('/js-required', 'GET', 'PageController:jsRequired');

  $router->init();
} catch (Exception $e) {
  var_dump($e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine());
}
