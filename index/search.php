<?php
$cookie = $_COOKIE['cdn_ddos_defender'];
if (empty($cookie)){
    $url = 'http://47.98.117.207';
    Header("Location:$url");
}
header('Content-type: text/json');
    $i = 0 ;
    $con = new mysqli('localhost','QYMY','zeta','qymy');
    $sql = 'select * from chat where date<=to_days(now()) order by date desc limit 16';
    $res = $con->query($sql);
    if ($res->num_rows > 0) {
        echo '{';
        while($row = $res->fetch_assoc()) {
            $i = $i + 1;
            if ($i < 16){
                echo '"p'.$i.'":{"user":"'.$row['user'].'","date":"'.$row['date'].'","msg":"'.$row['message'].'"},';}
            else{
                echo '"p'.$i.'":{"user":"'.$row['user'].'","date":"'.$row['date'].'","msg":"'.$row['message'].'"}';
            }
        }
        echo '}';
    } else {
        echo "0 结果";
    }
    $con->close();
?>