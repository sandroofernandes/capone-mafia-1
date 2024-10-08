<?php $this->layout('master_wheel', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div id="root"></div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  const CONFIG = {
    "prefixSite": "<?= PREFIX_SITE; ?>",
    "baseUrl": "<?= makeUrlToJsonUrl(SITE_URL) . '\/'; ?>",
    "timeRedirect": "<?= TIME_REDIRECT; ?>",
    "siteLgpd": "<?= SITE_LGPD; ?>",
    "siteLgpdTime": "<?= SITE_LGPD_TIME; ?>",
    "wheelSiteBg": "assets/img/wheel/bg-site.avif",
    "wheelLogo": "assets/img/wheel/oferta-top.png",
    "wheelLastTitle": "assets/img/wheel/blank.png",
    "wheelBg": "assets/img/wheel/bg-roleta.png",
    "wheelBtn": "assets/img/wheel/button.avif",
    "wheelArrow": "assets/img/wheel/arrow.avif",
    "wheel": "assets/img/wheel/roleta.avif",
    "wheelCongrats": "assets/img/wheel/parabens.png",
    "wheelSound": "assets/sound/success-trumpets.mp3"
  };
</script>
<script>
  function backfrio() {
    history.pushState({}, "", location.href), history.pushState({}, "", location.href), window.onpopstate = function() {
      setTimeout((function() {
        location.href = "linkafiliado"
      }), 1)
    }
  }
  setTimeout("backfrio()", 6e4), backfrio()
</script>

<script defer="defer" src="<?= SITE_URL; ?>/assets/js/script-wheel.js"></script>

<script>
  // fbq("track", "Lead");
  var offerLink = "https://go.aff.ganhabet.com/x3ccofu6";
</script>