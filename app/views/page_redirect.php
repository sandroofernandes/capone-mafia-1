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
    <div class="col-12 col-lg-8 mx-auto person redirect text-center">

      <div class="col-11 col-md-8 col-xl-7 col-xxl-6 mx-auto">

        <div class="row">
          <div class="col-12 text-presentation">
            <img class="preloader" src="<?= SITE_URL; ?>/assets/img/preload.gif">
            <h4><b>Olá <?= $_SESSION['clientName']; ?>!</b> <br>Aguarde você será<br> redirecionado em breve.</h4>
            <p class="timer_view">...</p>
          </div>
        </div>
      </div>
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