<?php
function getIp()
{
    if ($_SERVER["HTTP_CLIENT_IP"] && strcasecmp($_SERVER["HTTP_CLIENT_IP"], "unknown")) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } else {
        if ($_SERVER["HTTP_X_FORWARDED_FOR"] && strcasecmp($_SERVER["HTTP_X_FORWARDED_FOR"], "unknown")) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            if ($_SERVER["REMOTE_ADDR"] && strcasecmp($_SERVER["REMOTE_ADDR"], "unknown")) {
                $ip = $_SERVER["REMOTE_ADDR"];
            } else {
                if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'],
                        "unknown")
                ) {
                    $ip = $_SERVER['REMOTE_ADDR'];
                } else {
                    $ip = "unknown";
                }
            }
        }
    }
    return ($ip);
}

$ipc = getIp();
echo '<script src="/error/js_error/hrefd.js"></script>';
$con = new mysqli('localhost','QYMY','zeta','qymy');
$sql = 'select * FROM black_list WHERE ip = "'.$ipc.'"';
$res = $con->query($sql);
if ($res->num_rows > 0) {
    $url = 'http://47.98.117.207';
Header("Location:$url");
}
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}



$pspd = <<<EOT
<meta charset="UTF-8">
<link rel="icon" href="/error/img_error/logo.ico">
<style>@import url(/error/css_error/body.css);</style>
<style>@import url(/error/css_error/text_p.css);</style>
<title>EquityQ - 404 Error</title>

<canvas id="pic" style="position: absolute;background: url(/error/img_error/menu.jpg);background-size: 135%,130%;"></canvas>
<div style="height: 100%;width: 100%;">
    <img src="/error/img_error/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>YOU SEEM TO HAVE COME TO THE LOST LAND</h1>
        <h1 style='color:rgb(255, 191, 255);margin-top: -40px;' id="h1_v">ERROR 404</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(222, 255, 184);' id="h1_c">SOMETHING LOST</h1>
    </div>
    <div>
        <p class="pzt">Copyright © 2021 EQUITYQ</p>
    </div>
    <div>
        <h1 style="cursor: pointer;position: absolute;left: 25px;bottom: 150px;color: white" onclick="kick()">BACK</h1>
    </div>
    </div>
</div>
<script src="/error/js_error/menu.js"></script>
<script src="/error/js_error/canvas.js"></script>
<script src="/error/js_error/pic.js"></script>
<script src="/error/js_error/href.js"></script>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
EOT;

echo $pspd;
?>