
<?php
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}
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


$pt = <<<EOT
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<style>@import url(css/body.css);</style>
<style>@import url(css/text_p.css);</style>
<title>EquityQ - Finance</title>

<canvas id="pic" style="position: absolute;background: url(img/menu.jpg);background-size: 120%,120%;"></canvas>
<div style="height: 100%;width: 100%;">
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>DREAM</h1>
        <h1 style='color:white;margin-top: -40px;' id="h1_v">GET DATA</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(175, 255, 188);' id="h1_c">GET DREAM</h1>
    </div>
    <div class="text_z">
        <a href="/url/datasource" class="a_ref">CONTACT</a>
    </div>
    <div class="text_v">
        <a href="/url/codesource" class="a_ref">DREAM DATA ALWAYS BEEN AND ALWAYS WILL BE THE BEST FINANCE ANALYSIS SYSTEM OF ALL TIME</a>
    </div>
</div>


<div>
    <h3 style="position: absolute;right: 15;color: white;top: 0;cursor: pointer;" onclick="sett()">Login</h3>
</div>

<div class="div_c" id="pppp" style="display: none;">
    <div class="div_e">
        <span id="close" onclick="settt()"></span>
        <div style="margin-top: 60px;">
        <h1 style="color: rgb(255, 255, 255);text-align: center;">Sign in to EquityQ</h1>
        <input type="text" id="c" style="position: absolute;left: 50%;transform: translate(-50%);margin-top: 30px;width: 400px;height: 35px;background-color: rgba(128, 128, 128, 0.473);border: none;font-size: 30;outline:none;color: white;" placeholder="Please enter your username">
        <input type="password" id="e" style="position: absolute;left: 50%;transform: translate(-50%);margin-top: 100px;width: 400px;height: 35px;background-color: rgba(128, 128, 128, 0.473);border: none;font-size: 30;outline:none;color: white;" placeholder="Please input login password">
        <button class="but" onclick="onc()" >Sign in</button>
    </div>
    </div>
</div>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/login.js"></script>
<script src="js/close.js"></script>
EOT;
$id = $_COOKIE['equ_id'];
$pwd = $_COOKIE['equ_pwd'];
$pts = <<<EOT
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<style>@import url(css/body.css);</style>
<style>@import url(css/text_p.css);</style>
<title>EquityQ - Finance</title>

<canvas id="pic" style="position: absolute;background: url(img/menu.jpg);background-size: 120%,120%;"></canvas>
<div style="height: 100%;width: 100%;">
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>DREAM</h1>
        <h1 style='color:white;margin-top: -40px;' id="h1_v">GET DATA</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(175, 255, 188);' id="h1_c">GET DREAM</h1>
    </div>
    <div class="text_z">
        <a href="/url/datasource" class="a_ref">CONTACT</a>
    </div>
    <div class="text_v">
        <a href="/url/codesource" class="a_ref">DREAM DATA ALWAYS BEEN AND ALWAYS WILL BE THE BEST FINANCE ANALYSIS SYSTEM OF ALL TIME</a>
    </div>
</div>


<div>
    <h3 id="aa" style="position: absolute;right: 15;color: white;top: 0;cursor: pointer;" onclick="sett()">Login</h3>
</div>

<div class="div_c" id="pppp" style="display: none;">
    <div class="div_e">
        <span id="close" onclick="settt()"></span>
        <div style="margin-top: 60px;">
        <h1 id="op" style="color: rgb(255, 255, 255);text-align: center;">Sign in to EquityQ</h1>
        <button class="but" onclick="onc()" style="margin-top: -100px;">Logout</button>
    </div>
    </div>
</div>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/close.js"></script>
<script src="js/logout.js"></script>
EOT;
if (empty($id) or empty($pwd)){
    echo $pt;
}else{
    echo $pts;
}
?>