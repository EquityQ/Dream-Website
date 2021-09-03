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
$con = new mysqli('localhost','QYMY','zeta','qymy');
    $sql = 'select * FROM black_list WHERE ip = "'.$ipc.'"';
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        $url = 'http://47.98.117.207';
    Header("Location:$url");
    }
$psp = <<<EOT
<meta charset="utf-8">
<title>EquityQ - Source Products</title>
<style>@import url(css/body.css);</style>
<style>@import url(css/config.css);</style>
<link rel="icon" href="img/logo.ico">
<canvas id="pic" style="position: absolute;background: url(img/pic.png);background-size: 150%,150%;height: 100%;width: 100%;"></canvas>
<div>
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>SOURCE</h1>
        <h1 style='color:rgb(233, 255, 172);margin-top: -40px;' id="h1_v">DOWNLOAD OUR SOURCE PRODUCTS</h1>
    </div>
    <button class="but" onclick="download()">DREAM</button>
    <div>
        <h1 style="cursor: pointer;position: absolute;left: 25px;bottom: 150px;color: white" onclick="kick()">BACK</h1>
    </div>
</div>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/download.js"></script>
<script src="js/href.js"></script>

<div>
    <p class="pdd">Copyright © 2021 EQUITYQ </p>
</div>
EOT;

$pspd = <<<EOT
<meta charset="utf-8">
<title>EquityQ - Source Products</title>
<style>@import url(css/body.css);</style>
<style>@import url(css/config.css);</style>
<link rel="icon" href="img/logo.ico">
<canvas id="pic" style="position: absolute;background: url(img/pic.png);background-size: 150%,150%;height: 100%;width: 100%;"></canvas>
<div>
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>SOURCE</h1>
        <h1 style='color:rgb(233, 255, 172);margin-top: -40px;' id="h1_v">YOU ARE NOT LOGINING CAN'T DOWNLOAD PRODUCTS</h1>
    </div>
    <div>
        <h1 style="cursor: pointer;position: absolute;left: 25px;bottom: 150px;color: white" onclick="kick()">BACK</h1>
    </div>
</div>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/href.js"></script>

<div>
    <p class="pdd">Copyright © 2021 EQUITYQ </p>
</div>
EOT;



$id = $_COOKIE['equ_id'];
$pwd = $_COOKIE['equ_pwd'];
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}

if (empty($id)){
    echo $pspd;
}elseif(empty($pwd)){echo $pspd;}
elseif (empty($cookie)){echo $pspd;}
else{
    $con = new mysqli('localhost','QYMY','zeta','qymy');
    $sql = 'select * FROM user WHERE ID = "'.$id.'" AND PWD = "'.$pwd.'"';
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        $sqlc = 'update user set COOKIE = "'.$cookie.'" where ID = "'.$id.'" and PWD = "'.$pwd.'"';
        $resl = $con->query($sqlc);
            echo $psp;
    }
    else{
        $expire=time()+60*60*24*30;
        setcookie("equ_id", "", $expire,'/url');
        setcookie("equ_pwd", "", $expire,'/url');
        echo $pspd;}
}
?>