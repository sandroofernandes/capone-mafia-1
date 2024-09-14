<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<nav class="container-fluid header_nav text-center py-2 sticky-top">
  <div class="countdown top" id="countdown">
    <p>A partida manipulada inicia em:</p>
    <!-- <div class="time">
          <h2 id="days">00</h2>
          <small>days</small>
        </div> -->
    <div class="time">
      <h2 id="hours">00</h2>
      <small>hours</small>
    </div>
    <div class="time">
      <h2 id="minutes">00</h2>
      <small>minutes</small>
    </div>
    <div class="time">
      <h2 id="seconds">00</h2>
      <small>seconds</small>
    </div>
  </div>
</nav>

<section class="container">

  <div class="row">
    <div class="col-12 col-lg-8 mx-auto person text-center">

      <div class="col-11 col-md-8 col-xl-7 col-xxl-6 mx-auto">

        <div class="row">
          <div class="col-12 text-presentation">
            <h3>
              Máfia
              <span class="">Polonesa</span>
              <span class="flag"><img src="assets/img/flags/polonia.png"></span>
            </h3>
            <h1>ODD <span>3.00</span></h1>
            <h6>Resultado Garantido <img src="assets/img/check.png"></h6>
          </div>
        </div>

        <form class="row" action="<?= SITE_URL; ?>/page-redirect" method="post">
          <div class="col-12 mb-3">
            <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Seu nome" required>
          </div>
          <div class="col-12 mb-3">
            <input class="form-control form-control-lg" type="text" name="phone" id="phone" placeholder="DDD + Celular" required>
          </div>
          <div class="col-12">
            <div class="d-grid gap-2 py-3">
              <button class="btn btn-warning btn-lg btn-submit animation-pulse-scale-green-light py-3" type="submit">
                Receber Manipulação <img class="btn-icon ms-2" src="assets/img/money-wings.png">
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 col-xxl-5 mx-auto text-center notice">
      <img src="assets/img/bell.png" alt="bell">
      <p>Nós <span>não cobramos</span> e nem queremos <span>nenhum centavo</span> do seu dinheiro, todas informações <span>privilegiadas</span> são <span>enviadas</span> para você <span><b>GRATUITAMENTE!</b></span></p>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 mx-auto">
      <div class="content_text w-100 mb-5 pt-5">
        <p>Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook. Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site. Fazemos todos os esforços para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. Nós não vendemos o seu e-mail ou qualquer informação para terceiros. Jamais fazemos nenhum tipo de spam. </p>
        <p>Se você tiver alguma dúvida, sinta-se à vontade para usar o link de contato e falar conosco em horário comercial de Segunda a Sextas das 09h00 ás 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.</p>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>