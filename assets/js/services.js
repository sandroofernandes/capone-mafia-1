let lgpdHtml = `
  <div class="lgpd_container">
    <div class="lgpd_content__img">
      <img src="`+CONFIG.baseUrl+`assets/img/cookie4.png">
    </div>
    <div class="lgpd_content__top">
      <p>Nós utilizamos cookies para aprimorar sua navegação e tornar sua experiência ainda melhor.</p>
    </div>
    <div class="lgpd_content__bottom">
      <p>Saiba mais:<br><a href="`+CONFIG.baseUrl+`politica-privacidade" target="_blank">Política de privacidade</a></p>      
      <button class="btn_lgpd_accept">Ok</button>
    </div>
  </div>
`;

let lsContent = localStorage.getItem(CONFIG.prefixSite + '_lgpd');
if(!lsContent && CONFIG.siteLgpd === 'true') {
  document.body.innerHTML += lgpdHtml;
  let lgpdArea = document.querySelector('.lgpd_container');
  let lgpdButton = lgpdArea.querySelector('button');
  lgpdButton.addEventListener('click', async () => {
    lgpdArea.classList.remove('slide-in-bottom');
    lgpdArea.classList.add('bounce-out-bottom-middle-bottom');
    setTimeout(() => {
      lgpdArea.remove();
    }, 1000);
    localStorage.setItem(CONFIG.prefixSite + '_lgpd', true);
  });
  setTimeout(() => {
    lgpdArea.classList.add('show', 'slide-in-bottom');
  }, CONFIG.siteLgpdTime);
}