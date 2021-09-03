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
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<style>@import url(css/body.css);</style>
<style>@import url(css/text_p.css);</style>
<title>EquityQ - Message</title>

<canvas id="pic" style="position: absolute;background: url(img/menu.jpg);background-size: 135%,130%;"></canvas>
<div style="height: 100%;width: 100%;">
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>MESSAGE</h1>
        <h1 style='color:rgb(255, 191, 255);margin-top: -40px;' id="h1_v">TALK TO US</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(222, 255, 184);' id="h1_c">SEND MESSAGE</h1>
    </div>
    <div>
        <p class="pzt">Copyright © 2021 EQUITYQ</p>
    </div>
    <div>
        <h1 style="cursor: pointer;position: absolute;left: 25px;bottom: 150px;color: white" onclick="kick()">BACK</h1>
    </div>
    <div style="position: absolute;left: 50%;top: 50%;height: 600px;width: 800px;background-color: rgba(90, 90, 90, 0.473);transform: translate(-50%,-50%);">
        <h2 style="color: rgb(255, 255, 255);text-align: center;">Message Board</h2>
        <div style="position: absolute;background-color: rgba(128, 128, 128, 0.74);height: 400px;width: 750px;left: 50%;top: 50%;transform: translate(-50%,-50%);border-radius: 15px;">
            <p class="pss" id="16">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="15">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="14">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="13">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="12">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="11">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="10">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="9">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="8">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="7">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="6">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="5">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="4">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="3">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="2">System  2021-09-02 14:52:41 : Waiting</p>
            <p class="pss" id="1">System  2021-09-02 14:52:41 : Waiting</p>
            <div style="position:absolute;background-color: rgba(99, 99, 99, 0.76);width: 750px;border-radius: 15px;height: 30px;bottom: 0;">
                <input onkeydown="show()" type="text" name="text" id="text" class="ee" style="width: 700px;position: absolute;height: 30px;border-radius: 15px;background-color: rgba(99, 99, 99, 0.76);border: none;outline: none;font-size: 20;font-family: 'SimHei';color: white;">
                <div style="position: absolute;right: 0;width: 60px;height: 30px;background-color: lightskyblue;border-radius: 15px;cursor: pointer;" onclick="ck()">
                    <div style="position: absolute;left: 0; width: 15px;height: 30px;background-color: lightskyblue;">
                        <h4 style="left: 50%;top: 50%;position: absolute;transform: translate(-50%,-50%);margin-top: -1px;margin-left: 20px;">Send</h4>
                    </div>
                </div>
            </div>
        </div>
        <h4 style="text-align: center;color: rgba(255, 255, 255, 0.562);margin-top: 500px;">Please do not make any remarks against the rules.</h4>
    </div>
</div>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/href.js"></script>
<script src="js/msg.js"></script>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/reset.js"></script>
EOT;

$pspd = <<<EOT
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<style>@import url(css/body.css);</style>
<style>@import url(css/text_p.css);</style>
<title>EquityQ - Message</title>

<canvas id="pic" style="position: absolute;background: url(img/menu.jpg);background-size: 135%,130%;"></canvas>
<div style="height: 100%;width: 100%;">
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 45px;left: 30px;">
    <div class="text_p">
        <h1>YOU ARE NOT LOGINING</h1>
        <h1 style='color:rgb(255, 191, 255);margin-top: -40px;' id="h1_v">TALK TO US</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(222, 255, 184);' id="h1_c">LOGINING NOW</h1>
    </div>
    <div>
        <p class="pzt">Copyright © 2021 EQUITYQ</p>
    </div>
    <div>
        <h1 style="cursor: pointer;position: absolute;left: 25px;bottom: 150px;color: white" onclick="kick()">BACK</h1>
    </div>
    </div>
</div>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<script src="js/href.js"></script>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
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