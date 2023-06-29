<?php
if(strstr($_GET["mode"],".php")){exit("error");}
if($_GET["mode"] == "updatelog.ordylandata"){
$filep = "../".$_GET["mode"];
echo("<a href=\"https://a.ordylan.cn/\">返回首页</a><br>");
echo("--升级记录表--<br>");
if(file_exists($filep)){
$fffi = fopen($filep, 'r');
while(!feof($fffi)){
  echo fgets($fffi).'<br>';
}
fclose($fffi);
}
}
else{
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign != $ssign){
    exit("失败了...你没有登录/非管理员");
}
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

$result2 = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row2 = mysqli_fetch_array($result2)){$isadmin = $row2['isadmin'];}

if($isadmin == "true"){
$mode = $_GET["mode"];
$filep = "../".$mode;
/*if($mode == ""){
}
elseif ($mode == "") {
    $filep = "../mainlog.ordylandata";
}
else{
    $filep = "../mainlog.ordylandata";
}*/
echo("<a href=\"https://a.ordylan.cn/a/\">返回首页</a><br>");

if(file_exists($filep)){
$fffi = fopen($filep, 'r');
while(!feof($fffi)){
  echo fgets($fffi).'<br>';
}
//$con = fread($fffi, filesize($filep));
fclose($fffi);
}
else{
    echo '文件不存在';
}



}
else{exit("你不是管理员哦");}
/*
$filepathaaa = "mainlog.ordylandata";//获得地址
$fffileaa = fopen($filepathaaa, 'r');
$contentaaa = fread($fffileaa, filesize($filepathaaa));
fclose($fffileaa);
 $contentaaa = "- DO  -|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."生成了".$xuehao."的登录链接!\n".$contentaaa;
$fffileaa = fopen($filepathaaa, 'w');
fwrite($fffileaa, $contentaaa);
fclose($fffileaa);
*/

//}else{header("Location: https://a.ordylan.cn/index.php");}
}
?>
