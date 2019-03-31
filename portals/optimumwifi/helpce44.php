<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Help - CableWiFi&trade;</title>
    <meta name="description" content="">

    <!-- Favicon metadata, place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon2234.png?v=GvJXzoEO6b">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x322234.png?v=GvJXzoEO6b">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x162234.png?v=GvJXzoEO6b">
    <link rel="manifest" href="assets/images/manifest2234.json?v=GvJXzoEO6b">
    <link rel="shortcut icon" href="favicon2234.html?v=GvJXzoEO6b">
    <meta name="theme-color" content="#072c40">

    <!-- Prevent iOS from detecting phone numbers and adding their own link and style -->
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body>
    <div id="myApp">
      <div class="site-header">
        <div class="cw-container">
          <a class="back-link" href="javascript:history.back()">Back</a>
        </div>
      </div>

      <main class="main-container cw-container cw-toolbar-fixed-adjust" role="main">
        <div class="cw-card">
          <header role="banner">
            <h1>Need Help?</h1>
            
            <p>For help with your CableWiFi&trade; access or username and password, please call us at<br/><a href="tel:1-877-836-2390">1-877-836-2390</a></p>            
            
          </header>

          <ul class="cw-accordion cw-text-left">
            <li class="cw-expansion-panel">
              <h2><button class="cw-expansion-panel__btn" aria-controls="faq-1" aria-expanded="false">What is CableWiFi?</button></h2>
              <p class="cw-expansion-panel__content" id="faq-1">CableWiFi SSID (network name) is used to provide the free feature as an extension of the WiFi service offered by your Internet Service Provider.</p>
            </li>
            <li class="cw-expansion-panel">
              <h2><button class="cw-expansion-panel__btn" aria-controls="faq-2" aria-expanded="false">How do I connect?</button></h2>
              <p class="cw-expansion-panel__content faq2-p" id="faq-2">After selecting the CableWiFi SSID, opening your browser, and selecting your Internet Service Provider, complete these steps:</p>
              <div class="faq2-div">
				<ul class="cw-expansion-panel__content faq2-ul" id="faq-2">
					<li>Enter the username and password requested on the page.</li>
					<li>Click the &quot;Sign In&quot; button. By clicking the &quot;Sign In&quot; button the user accepts the Terms of Service.</li>
					<li>Once you&rsquo;ve signed in successfully, you&rsquo;re ready to use the Internet.</li>
				</ul>
			  </div>
            </li>
            <li class="cw-expansion-panel">
              <h2><button class="cw-expansion-panel__btn" aria-controls="faq-3" aria-expanded="false">What type of device can I use?</button></h2>
              <p class="cw-expansion-panel__content" id="faq-3">WiFi works with the same devices, operating systems and web browsers you use with your Internet Service Provider&rsquo;s WiFi service.</p>
            </li>
            <li class="cw-expansion-panel">
              <h2><button class="cw-expansion-panel__btn" aria-controls="faq-4" aria-expanded="false">Where is CableWiFi available?</button></h2>
              <p class="cw-expansion-panel__content" id="faq-4">Anywhere you see CableWiFi, it is available. You may also visit your Internet Service Provider&rsquo;s website for additional locations.</p>
            </li>
          </ul>
        </div>
      </main>

    </div><!-- /#myApp -->

    <!-- Vue Library -->
    <script src="assets/js/vue.js"></script>

    <!-- Application scripts bundle -->
    <script src="assets/js/app.js"></script>

  </body>

</html>
