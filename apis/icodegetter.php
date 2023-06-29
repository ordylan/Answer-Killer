<?php
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign != $ssign){
    exit("失败了...你没有登录");
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
$xuehao = $_GET["xuehao"];
function getname($uid){
  if($uid == 888){$uname = "Guest_Mode";}
elseif($uid == 1){$uname = "*[脱敏]";}
//*[脱敏]
else              {$uname = "未知用户";}
return $uname;
}//姓名表


$invitecodereal = md5("ANSWERKILLER_ID_".$xuehao."_TEST_NICESCORETOORDYLAN!!_USER_".getname($xuehao));
$aaa = "https://a.ordylan.cn/login.php?xuehao=".$xuehao."&sign=".$xuehaomd5;

echo("
成功!!".getname($xuehao)."(".$xuehao.")的邀请码为 ".$invitecodereal." !<br>
话术:<br><br><p id=\"aaaaa\">
".$xuehao."号".getname($xuehao)."同学你好!<br>管理员邀请你注册学校18班AK作业答案互助平台,现在注册就送30天豪华答案VIP哦!你的邀请码为 \"".$invitecodereal."\" .<br>你也可以通过 \"https://a.ordylan.cn/r/".$xuehao."_".$invitecodereal."/\" 注册网站o~</p>
 <textarea id=\"input\" style=\"position: absolute;top: -9999vh;\"></textarea>
<script>
function copyText() {
  var text = document.getElementById(\"aaaaa\").innerText;
  var input = document.getElementById(\"input\");
  input.value = text; // 修改文本框的内容
  input.select(); // 选中文本
  document.execCommand(\"copy\"); // 执行浏览器复制命令
 }
</script><br><br><button onclick=\"copyText()\">一键复制</button><br><a href=\"https://a.ordylan.cn/a/\">返回首页</a>");

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

?>
