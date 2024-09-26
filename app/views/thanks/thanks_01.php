<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon, 'linkRedirect' => $linkRedirect]); ?>

<nav class="container-fluid header_nav text-center py-2 sticky-top">
  <div class="countdown top" id="countdown">
    <p>Parabéns, agora você faz parte da família!</p>
  </div>
</nav>

<section class="container">

  <div class="row">
    <div class="col-12 col-lg-8 mx-auto person thanks text-center">

      <div class="col-11 col-md-8 mx-auto">

        <div class="row">
          <div class="col-12 text-presentation">
            <h6>Acesso Liberado <img src="assets/img/check.png"></h6>
            <h1 class="mb-5">Grupo Privado</h1>
            <p class="mb-4">clique no botão abaixo</p>
            <a href="<?= $linkRedirect; ?>" class="btn btn-warning btn-lg btn-submit animation-pulse-scale-green-light px-5 py-3 fw-700" target="_blank">
              <i class="fa-solid fa-up-right-from-square me-2"></i> Entrar no Grupo
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once dirname(__DIR__, 1) . '/includes/facebook_directives.php'; ?>
</section>

<?php require_once dirname(__DIR__, 1) . '/includes/footer.php'; ?>