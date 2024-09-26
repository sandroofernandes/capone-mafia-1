<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<nav class="container-fluid header_nav text-center py-3">
  <div class="countdown top" id="countdown">
    <p>Seu bônus expira em:</p>
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

<div class="container page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">
  <div class="row">

    <div class="col-12 col-lg-10 mx-auto pt-2 pt-lg-3 pb-3 pb-lg-5">
      <div class="content_text w-100 d-flex flex-column align-items-center">
        <h2 class="text-center mt-5 mb-0 pt-1 pt-lg-3">
          <span class="text-light fw-300">Você Recebeu</span> <b class="text-success fw-900">2 BÔNUS!</b>
        </h2>
        <p class="fs-5 fw-300 mb-4" style="color: #08c18a;">deslize para vê-los</p>
        <img src="<?= SITE_URL; ?>/assets/img/hand-down.png" style="width:50px;">
      </div>
    </div>

    <div class="col-12 col-lg-10 mx-auto pt-5 pt-lg-5 min-vh-100" id="box_1">
      <div class="content_text w-100 mb-5">

        <div class="row mb-5">
          <div class="col-12 col-md-8 col-lg-4 mx-md-auto mb-3 text-center">
            <img src="<?= SITE_URL; ?>/assets/img/gift-04.gif" class="gift_img" style="width: 200px;">
          </div>
        </div>

        <div class="row text-center">
          <div class="d-grid gap-2 col-11 col-md-8 col-lg-6 col-xl-4 mb-5 pt-3 mx-auto">
            <span class="btn btn-lg fw-800 fs-4 text-uppercase py-3 btnGift btnGift_lp3 scale-08 mb-3" data-id="btnGift1_lp3">
              <span>BÔNUS #1</span>
              <small class="d-block">
                <i class="fa-regular fa-lock-keyhole me-1"></i>
                Clique para Desbloquear
              </small>
            </span>

            <span class="btn btn-lg fw-800 fs-4 text-uppercase py-3 btnGift btnGift_lp3 scale-08 mb-3" data-id="btnGift2_lp3">
              <span>BÔNUS #2</span>
              <small class="d-block">
                <i class="fa-regular fa-lock-keyhole me-1"></i>
                Clique para Desbloquear
              </small>
            </span>

            <a class="btn btn-lg fw-800 fs-4 text-uppercase py-3 animation-pulse-scale-green-light btnGift btnSale" href="https://pay.kirvano.com/96da1181-0a55-444c-9287-8a1f25ad38af" target="_blank">
              <span>QUERO AGORA</span>
              <small class="d-block">
                <i class="fa-regular fa-arrow-up-right-from-square me-1"></i>
                Clique para Abrir
              </small>
            </a>
          </div>
        </div>

      </div>
    </div>

  </div>

  <?php require_once __DIR__ . '/includes/footer.php'; ?>

</div>

<div class="modal_background hide" id="modal_background"></div>
<div class="modal_container portrait hide" id="btnGift1_lp3">
  <div class="modal_content">
    <video controls preload="auto">
      <!-- <source src="<?= SITE_URL; ?>/uploads/chats/chat_1/bonus/bonus_01.webm" type="video/webm"> -->
      <source src="<?= SITE_URL; ?>/uploads/chats/chat_1/bonus/bonus_01.mp4" type="video/mp4">
    </video>
    <div class="modal_container_close" id="modal_container_close"></div>
  </div>
</div>

<div class="modal_container portrait hide" id="btnGift2_lp3">
  <div class="modal_content">
    <video controls preload="auto">
      <!-- <source src="<?= SITE_URL; ?>/uploads/chats/chat_1/bonus/bonus_02.webm" type="video/webm"> -->
      <source src="<?= SITE_URL; ?>/uploads/chats/chat_1/bonus/bonus_02.mp4" type="video/mp4">
    </video>
    <div class="modal_container_close" id="modal_container_close"></div>
  </div>
</div>