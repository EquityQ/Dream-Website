<?php
header('Content-type: text/json');
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

$id = $_GET['user'];
$pwd = $_GET['pwd'];
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}

if (empty($id)){
    echo '{"success":"empty"}';
}elseif(empty($pwd)){echo '{"success":"empty"}';}
elseif (empty($cookie)){echo '{"success":"empty"}';}
else{
    $con = new mysqli('localhost','QYMY','zeta','qymy');
    $sql = 'select * FROM user WHERE ID = "'.$id.'" AND PWD = "'.$pwd.'"';
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        $sqlc = 'update user set COOKIE = "'.$cookie.'",ip ="'.$ipc.'" where ID = "'.$id.'" and PWD = "'.$pwd.'"';
        $resl = $con->query($sqlc);
        echo '{"success":"true"}';
    }
    else{echo '{"success":"error"}';}
}
?>