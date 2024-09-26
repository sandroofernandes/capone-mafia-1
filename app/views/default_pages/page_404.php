<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div class="container page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">
  <div class="row text-center">

    <div class="col-12 min-vh-100 d-flex align-items-center justify-content-center flex-column">
      <h1 class="fw-900 lh-1 mb-0">404</h1>
      <h2 class="fw-bold">Página não encontrada!</h2>
      <p><a class="btn btn-primary btn-sm rounded-pill fw-normal mt-4" href="<?= SITE_URL; ?>">&laquo; Voltar para Home</a></p>
    </div>

  </div>
</div>