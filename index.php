<?php

require 'vendor/autoload.php';

setlocale(LC_ALL, "pt_BR");
date_default_timezone_set('America/Sao_Paulo');

session_start();

require 'app/settings/siteSettings.php';
require 'app/functions/functions.php';
require 'bootstrap.php';
require 'app/routes/web.php';
