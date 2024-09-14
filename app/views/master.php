<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->e($title) ?></title>
  <meta name="description" content="<?= SITE_DESCRIPTION; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= SITE_URL; ?>">
  <meta property="og:title" content="<?= $this->e($title) ?>">
  <meta property="og:description" content="<?= SITE_DESCRIPTION; ?>">
  <meta property="og:image" content="<?= SITE_URL; ?>/uploads/seo/image-default-512x512.png">
  <meta name="twitter:title" content="<?= $this->e($title) ?>">
  <meta name="twitter:description" content="<?= SITE_DESCRIPTION; ?>">
  <meta name="twitter:image" content="<?= SITE_URL; ?>/uploads/seo/image-default-512x512.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_URL; ?>/uploads/seo/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?= SITE_URL; ?>/uploads/seo/favicon-64x64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL; ?>/uploads/seo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_URL; ?>/uploads/seo/favicon-16x16.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= SITE_URL; ?>/assets/fonts/fontawesome/6.2/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= SITE_URL; ?>/assets/css/animista.css">
  <link rel="stylesheet" href="<?= SITE_URL; ?>/assets/css/services.css">
  <link rel="stylesheet" href="<?= SITE_URL; ?>/assets/css/default.css">
  <link rel="stylesheet" href="<?= SITE_URL; ?>/assets/css/style.css">
  <?php if ($this->e($thisPage) !== 'js_required') : ?>
    <noscript>
      <meta http-equiv="refresh" content="0; url=<?= SITE_URL; ?>/js-required">
    </noscript>
  <?php endif; ?>
  <?php require 'codes/code_header.php'; ?>
</head>

<body class="body_<?= $this->e($pageGroup) ?>" id="<?= $this->e($thisPage) ?>">

  <?php echo $this->section('content') ?>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const CONFIG = {
      "prefixSite": "<?= PREFIX_SITE; ?>",
      "baseUrl": "<?= makeUrlToJsonUrl(SITE_URL) . '\/'; ?>",
      "timeRedirect": "<?= TIME_REDIRECT; ?>",
      "siteLgpd": "<?= SITE_LGPD; ?>",
      "siteLgpdTime": "<?= SITE_LGPD_TIME; ?>"
    };
  </script>
  <script src="<?= SITE_URL; ?>/assets/js/services.js"></script>
  <script src="<?= SITE_URL; ?>/assets/js/jquery.mask.js"></script>
  <script src="<?= SITE_URL; ?>/assets/js/app.js"></script>

  <?php if (isset($_SESSION['url_redirect']) && $thisPage == 'page_redirect') : ?>
    <script>
      let rTimer = 5000; // 5000 = 5 segundos
      let displayTimer = rTimer / 1000;
      let timerView = document.querySelector('.timer_view');
      timerView.textContent = displayTimer + ' segundos';

      rTimerInterval = setInterval(() => {
        --displayTimer;
        timerView.textContent = displayTimer <= 1 ? displayTimer + ' segundo' : displayTimer + ' segundos';
        if (displayTimer <= 0) {
          timerView.innerHTML = 'Redirecionando...';
          clearInterval(rTimerInterval);
          window.location.href = "<?= $_SESSION['url_redirect']; ?>";
        }
      }, 1000);
    </script>

  <?php
    unset($_SESSION['url_redirect']);
  endif;
  ?>

</body>

</html>