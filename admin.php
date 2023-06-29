<!DOCTYPE html>
<html>
<head>
<link href="/1.css" rel="stylesheet">
<!--彩蛋画-->
<script type="text/javascript" src="https://ordylan.cn/js/log.js"></script>
<!--键盘彩蛋-->
<script type="text/javascript" src="/wow.js"></script>
<!--百度统计-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ecee3ae7c3d79d2324688ed651f923f2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--jq-->
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<!--禁止缓存-->
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<title>管理后台-AK作业答案互助平台!!</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
AK作业答案互助平台管理后台
<a href="https://a.ordylan.cn/">返回首页</a><br>
<?php
/*require_once 'PUBLIC.php';
$apf = new AK_PUBLIC_FUNCTION();
$apf->MustDoFunction();
$aa = $apf->checklogin();*/

$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign != $ssign){
    exit("你没有登录.<a href=\"https://a.ordylan.cn/l/\">去登录</a>");
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
print<<<aaaaa
老PDF查看密码:123456<br>
PDF密码:WELCOMETOANSWERKILLER!!<br>
邀请码算号器:
学号<input type="text" id="ididd">
<!--<a href="javascript:void(0);" onclick='aaaaaa("\"https://a.ordylan.cn/a/getcode/\"+document.getElementById(\"ididd\").value\");'>获取登录链接</a>-->
<a href="javascript:void(0);" onclick='aaaaaa();'>获取登录链接</a><br>
<a href="javascript:void(0);" onclick='aaaaaab("mainlog.ordylandata");'>查看系统log</a>|<a href="javascript:void(0);" onclick='aaaaaab("log.ordylandata");'>查看用户log</a><br>
<script>
function aaaaaa(){
//window.location.href="https://a.ordylan.cn/a/getcode/"+document.getElementById("ididd").value;
window.open("https://a.ordylan.cn/a/getcode/"+document.getElementById("ididd").value,'','height=400, width=600,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');
//window.open(eval(id),'','height=400, width=600,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');
}
function aaaaaab(l){
window.open("https://a.ordylan.cn/apis/loggetter.php?mode="+l,'','height=400, width=600,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no');
}
</script>
aaaaa;
}
else{
    exit("你不是管理员啊!");
}
$conn->close();
?>
</body>
</html>