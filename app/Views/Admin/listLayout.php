<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php if (!empty($page_title)) echo $page_title;?></title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/formStyle.css')?>">
</head>
 



<div class="px-5 py-4">
<?= $this->renderSection('list')?>	
</div>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.6.0.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js')?>"></script>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        <script src="/dist/js/app.js"></script>
        <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/admin.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/Profile.js'); ?>"></script>
        <!-- END: JS Assets-->

            <noscript class="psa_add_styles"><link rel="stylesheet" href="/dist/css/A.app.css.pagespeed.cf.l1FpjZzIM2.css"/></noscript><script data-pagespeed-no-defer>(function(){function b(){var a=window,c=e;if(a.addEventListener)a.addEventListener("load",c,!1);else if(a.attachEvent)a.attachEvent("onload",c);else{var d=a.onload;a.onload=function(){c.call(this);d&&d.call(this)}}};var f=!1;function e(){if(!f){f=!0;for(var a=document.getElementsByClassName("psa_add_styles"),c=0,d;d=a[c];++c)if("NOSCRIPT"==d.nodeName){var k=document.createElement("div");k.innerHTML=d.textContent;document.body.appendChild(k)}}}function g(){var a=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||null;a?a(function(){window.setTimeout(e,0)}):b()}
var h=["pagespeed","CriticalCssLoader","Run"],l=this;h[0]in l||!l.execScript||l.execScript("var "+h[0]);for(var m;h.length&&(m=h.shift());)h.length||void 0===g?l[m]?l=l[m]:l=l[m]={}:l[m]=g;})();
pagespeed.CriticalCssLoader.Run();</script>
<!-- 
<?= $this->renderSection('scripts')?> -->
</body>
</html>