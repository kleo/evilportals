<?php
$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
require_once('helper.php');
?>

<HTML>
    <HEAD>
        <title>Evil Portal</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <script type="text/javascript">
            function redirect() { setTimeout(function(){window.location = "/captiveportal/index.php";},100);} 
        </script>
    </HEAD>

    <BODY>
        <div style="text-align: center;">
            <h1>Evil Portal</h1>
            <p>This is the default Evil Portal page.</p>
            <p>The SSID you are connected to is <?=getClientSSID($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your host name is <?=getClientHostName($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your MAC Address is <?=getClientMac($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your internal IP address is <?=$_SERVER['REMOTE_ADDR'];?></p>

            <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button type="submit">Authorize</button>
            </form>

        </div>

    </BODY>

</HTML>