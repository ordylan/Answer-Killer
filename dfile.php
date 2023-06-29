<?php 
$fn = $_GET["filename"];
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
$servername = "localhost";
$username = "answerkiller";//用户名
$password = "iloveakaaa!!";//密码
$dbname = "answerkiller";//数据库
header("content-type:text/html;charset=utf8");
//连接
$conn = new mysqli($servername, $username, $password, $dbname);
//检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
mysqli_query($conn,'SET NAMES UTF8');

if($sign == $ssign){
    $result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
    while($row = mysqli_fetch_array($result)){$vip = $row['vip'];}//获取会员
    list($msec, $sec) = explode(' ', microtime());//shijianchuo
    $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    if($vip - $msectime > 0){$isvvip = "true";}
}
else{}
$filea = "answer/DOWNLOADS/".$fn;
//echo($filea);
if(!file_exists($filea)){$conn->close();exit("<script>alert(\"文件".$fn."不存在!\");history.go(-1);</script>");}
//vip file

/*[公测进行中,答案全免费]
if($fn == "kelelian82.pdf" || $fn == "keshi82.pdf"){
    if($isvvip != "true"){$conn->close();exit("<script>alert(\"用户不是vip,不能下载此文件\");window.location.href='https://a.ordylan.cn/d/';</script>");}
}*/

header("Content-Type:application/octet-stream;charset=utf-8");
header('Content-Disposition: attachment; filename='.$fn);
header('X-Accel-Redirect: /'.$filea);


$conn->close();

?>