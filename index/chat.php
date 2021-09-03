<?php
$user = $_GET['user'];
date_default_timezone_set('PRC');
$date = date('Y-m-d H:i:s', time());
$message = $_GET['msg'];
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}elseif (empty($user)){
    echo '{"error":"obj empty"}';

}elseif (empty($message)){
    echo '{"error":"obj empty"}';
}else{
    $con = new mysqli('localhost','QYMY','zeta','qymy');
    $sql = 'insert into chat (user,date,message) values ("'.$user.'","'.$date.'","'.$message.'")';
    $res = $con->query($sql);
        echo '{"success":"true"}';
}

?>