<?php $this->layout('master_wheel', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div id="root"></div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  const CONFIG = {
    "prefixSite": "<?= PREFIX_SITE; ?>",
    "baseUrl": "<?= makeUrlToJsonUrl(SITE_URL) . '\/'; ?>",
    "timeRedirect": "<?= TIME_REDIRECT; ?>",
    "siteLgpd": "<?= SITE_LGPD; ?>",
    "siteLgpdTime": "<?= SITE_LGPD_TIME; ?>"
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
  fbq("track", "Lead");
  var offer = "https://seubet.com/affiliates/?btag=2001350_l330785";
</script>