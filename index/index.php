<?php
$ps =<<<ETO
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<title>EquityQ - CDN/DDOS Defender</title>
<style>@import url(css/body.css);</style>
<div style="background-color: rgb(81, 28, 102);height: 100%;width: 100%;">
    <div class="ss">
    <svg class="ssp" style="color: white;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 257.7 223.2" xml:space="preserve">
        <g stroke-width="6">
        <polygon class="st0" points="69.6,214.2 10.4,111.6 69.6,9 188.1,9 247.3,111.6 188.1,214.2 "></polygon>
        <line class="st0" x1="69.6" y1="9" x2="188.1" y2="214.2"></line>
        <line class="st0" x1="69.6" y1="214.2" x2="188.1" y2="9"></line>
        <line class="st0" x1="10.4" y1="111.6" x2="247.3" y2="111.6"></line>
        </g>
    </svg></div></div>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/url.js"></script>
<div>
    <p class="pdd">Copyright © 2021 EQUITYQ</p>
    <p class="pdds">If you use our website, you are deemed to agree to our terms of service.</p>
</div>
ETO;
$psp =<<<ETO
<meta charset="UTF-8">
<link rel="icon" href="img/logo.ico">
<title>EquityQ - CDN/DDOS Defender</title>
<style>@import url(css/body.css);</style>
<div style="background-color: rgb(81, 28, 102);height: 100%;width: 100%;">
    <h1 id="dd" style="color: white;position: absolute;margin-top: 150px;transform: translate(-50%);left: 50%;display: none;">Your IP have been banned.</h1>
    <div class="ss">
    <svg class="ssp" style="color: white;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 257.7 223.2" xml:space="preserve">
        <g stroke-width="6">
        <polygon class="st0" points="69.6,214.2 10.4,111.6 69.6,9 188.1,9 247.3,111.6 188.1,214.2 "></polygon>
        <line class="st0" x1="69.6" y1="9" x2="188.1" y2="214.2"></line>
        <line class="st0" x1="69.6" y1="214.2" x2="188.1" y2="9"></line>
        <line class="st0" x1="10.4" y1="111.6" x2="247.3" y2="111.6"></line>
        </g>
    </svg></div></div>
<script src="https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="js/reset.js"></script>
<div>
    <p class="pdd">Copyright © 2021 EQUITYQ</p>
    <p class="pdds">If you use our website, you are deemed to agree to our terms of service.</p>
</div>
ETO;




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
        echo $psp;
    }
    else{echo $ps;}
?>