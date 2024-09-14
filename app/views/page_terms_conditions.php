<?php $this->layout('master', ['title' => $title, 'pageGroup' => $pageGroup, 'thisPage' => $thisPage, 'favicon' => $favicon]); ?>

<div class="container page_<?= $this->e($thisPage) ?>" id="page_<?= $this->e($thisPage) ?>">
  <div class="row">

    <div class="col-12 col-md-10 col-lg-7 mx-auto min-vh-100 d-flex align-items-center justify-content-center flex-column">

      <div class="content_text w-100 mb-5">
        <h1 class="fw-900 display-5 my-5 text-center text-warning">Termos e Condições</h1>
        <h3>1. Termos</h3>
        <p>Ao acessar ao site <a href="<?= SITE_URL; ?>"><?= SITE_NAME; ?></a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>

        <h3>2. Uso de Licença</h3>
        <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site <?= SITE_NAME; ?> , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode:</p>
        <ol>
          <li>modificar ou copiar os materiais;</li>
          <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);</li>
          <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site <?= SITE_NAME; ?>;</li>
          <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou</li>
          <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
        </ol>
        <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por <?= SITE_NAME; ?> a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</p>

        <h3>3. Isenção de responsabilidade</h3>
        <ol>
          <li>Os materiais no site da <?= SITE_NAME; ?> são fornecidos 'como estão'. <?= SITE_NAME; ?> não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</li>
          <li>Além disso, o <?= SITE_NAME; ?> não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
        </ol>

        <h3>4. Limitações</h3>
        <p>Em nenhum caso o <?= SITE_NAME; ?> ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em <?= SITE_NAME; ?>, mesmo que <?= SITE_NAME; ?> ou um representante autorizado da <?= SITE_NAME; ?> tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>

        <h3>5. Precisão dos materiais</h3>
        <p>Os materiais exibidos no site da <?= SITE_NAME; ?> podem incluir erros técnicos, tipográficos ou fotográficos. <?= SITE_NAME; ?> não garante que qualquer material em seu site seja preciso, completo ou atual. <?= SITE_NAME; ?> pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, <?= SITE_NAME; ?> não se compromete a atualizar os materiais.</p>

        <h3>6. Links</h3>
        <p>O <?= SITE_NAME; ?> não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por <?= SITE_NAME; ?> do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>

        <h3>Modificações</h3>
        <p>O <?= SITE_NAME; ?> pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>

        <h3>Lei aplicável</h3>
        <p>Estes termos e condições são regidos e interpretados de acordo com as leis do <?= SITE_NAME; ?> e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
      </div>
    </div>

  </div>
</div>

<?php require 'includes/footer.php'; ?>