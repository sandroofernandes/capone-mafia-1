<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div class="container page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">
  <div class="row text-center">

    <div class="col-12 col-md-6 col-lg-5 mx-auto min-vh-100 d-flex align-items-center justify-content-center flex-column">
      <h1 class="display-5 mb-5">É NECESSÁRIO O USO DE <span class="fw-900 text-warning">JAVASCRIPT</span> !</h1>
      <h4 class="mb-4">Para o bom funcionamento deste site é necessário ter o <b class="fw-900 text-warning">JavaScript</b> ativado em seu Navegador/Browser.</h4>
      <h6><span class="fst-italic">Para ver o site, ative o </span><b>JavaScript</b>!</h6>
      <p><a class="btn btn-primary btn-sm rounded-pill fw-normal mt-3" href="<?= SITE_URL; ?>">&laquo; Voltar para Home</a></p>
    </div>

  </div>
</div>