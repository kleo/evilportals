<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
function increment_browser($browser)
{
    try {
        $sqlite = new \SQLite3('/tmp/landingpage.db');
    } catch (Exception $e) {
        return false;
    }
    $sqlite->exec('CREATE TABLE IF NOT EXISTS user_agents  (browser TEXT NOT NULL);');
    $statement = $sqlite->prepare('INSERT INTO user_agents (browser) VALUES(:browser);');
    $statement->bindValue(':browser', $browser, SQLITE3_TEXT);
    try {
        $ret = $statement->execute();
    } catch (Exception $e) {
        return false;
    }
    return $ret;
}

function identifyUserAgent($userAgent)
{
    if (preg_match('/^Mozilla/', $userAgent)) {
        if (preg_match('/Chrome\/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/', $userAgent)) {
            increment_browser('chrome');
        } elseif (preg_match('/Safari\/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/', $userAgent)) {
            increment_browser('safari');
        } elseif (strpos($userAgent, 'MSIE ') || preg_match('/Trident\/[0-9]/', $userAgent)) {
            increment_browser('internet_explorer');
        } elseif (preg_match('/Firefox\/[0-9]{1,3}\.[0-9]{1,3}/', $userAgent)) {
            increment_browser('firefox');
        } else {
            increment_browser('other');
        }
    } elseif (preg_match('/^Opera\/[0-9]{1,3}\.[0-9]/', $userAgent)) {
        increment_browser('opera');
    } else {
        increment_browser('other');
    }
}
identifyUserAgent($_SERVER['HTTP_USER_AGENT']);
?>

<HTML>
    <HEAD>
        <title>Evil Portal</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>

    <BODY>
        <div style="text-align: center;">
            <h1>Evil Portal</h1>
            <p>This is the default Evil Portal page.</p>
            <p>The SSID you are connected to is <?=getClientSSID($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your host name is <?=getClientHostName($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your MAC Address is <?=getClientMac($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your internal IP address is <?=$_SERVER['REMOTE_ADDR'];?></p>

            <form method="POST" action="/captiveportal/index.php">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button type="submit">Authorize</button>
            </form>

        </div>

    </BODY>

</HTML>
