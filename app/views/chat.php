<?php $this->layout("master", ["title" => $title, "attendant" => $attendant, "pageGroup" => $pageGroup, "thisPage" => $thisPage, "favicon" => $favicon]); ?>

<div class="container-fluid page_chat page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">

  <div class="row sticky-top">
    <header class="header_wrapper col-12 text-center overflow-hidden bg-header2">
      <div class="header_info mx-auto">
        <div class="info1">
          <figure class="header_info__avatar">
            <img src="<?= SITE_URL; ?>/uploads/chats/<?= $thisPage; ?>/image/admin.jpg">
          </figure>
          <div class="header_info__name">
            <span class="info_name"><?= $attendant; ?><img src="<?= SITE_URL; ?>/assets/img/verificado.png" alt="Usuário verificado"></span>
            <span class="info_on">Online</span>
          </div>
        </div>
        <div class="info2">
          <a href="<?= SITE_URL; ?>"><img src="<?= SITE_URL; ?>/assets/img/logo-chat.png"></a>
        </div>
      </div>
    </header>
  </div>

  <div class="row">

    <div class="container" id="wrapper">

      <div class="col-12 conversation_wrapper mt-4"></div> <!-- conversation_wrapper -->

    </div>

  </div>

  <div id="conversation_modal"></div> <!-- conversation_modal -->

</div>