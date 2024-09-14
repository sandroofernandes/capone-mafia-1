<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div class="container page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">
  <div class="row">

    <div class="col-12 col-md-10 col-lg-7 mx-auto min-vh-100 d-flex align-items-center justify-content-center flex-column">

      <div class="content_text w-100 mb-5">
        <h1 class="fw-900 display-5 my-5 text-center text-warning">Política de Privacidade</h1>
        <p><small>DATA DA ÚLTIMA REVISÃO: 04/08/2023</small></p>

        <p>A sua privacidade é importante para nós. É política do <?= SITE_NAME; ?> respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href="<?= SITE_URL; ?>"><?= SITE_NAME; ?></a>, e outros sites que possuímos e operamos.</p>
        <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.</p>
        <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
        <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
        <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas <a href="<?= SITE_URL; ?>" rel="noopener noreferrer" target="_blank">políticas de privacidade</a>.</p>
        <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
        <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>

        <h3>Compromisso do Usuário</h3>
        <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o <?= SITE_NAME; ?> oferece no site e com caráter enunciativo, mas não limitativo:</p>
        <ul>
          <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
          <li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, jogos de sorte ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
          <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do <?= SITE_NAME; ?>, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
        </ul>

        <h3>Mais informações</h3>
        <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>
      </div>
    </div>

  </div>
</div>

<?php require 'includes/footer.php'; ?>