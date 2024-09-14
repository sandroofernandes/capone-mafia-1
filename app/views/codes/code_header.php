<?php

/**
 * Só carrega no domínio especificado 
 * Sem https:// e sem / no final
 */
$targetDomain = 'mafiacapone.com';

if ($_SERVER['SERVER_NAME'] === $targetDomain) : ?>
  <!-- For the domain <?= $targetDomain; ?> -->
  
  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '841848280847890');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=841848280847890&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

  <?php if ($pageGroup === 'chat-consultoria') : ?>


  <?php endif;
endif;
PHP_EOL;
?>