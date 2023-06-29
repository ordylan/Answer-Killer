<!DOCTYPE html>
<html>
<head>
    <!--控制台-->
<script src="/vconsole.min.js"></script>
<script>var vConsole = new window.VConsole();</script>
<link href="/1.css" rel="stylesheet">
<!--彩蛋画-->
<script type="text/javascript" src="/js/log.js"></script>
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
<!--禁止缓存-->
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
require_once 'PUBLIC.php';
$apf = new AK_PUBLIC_FUNCTION();
//$apf->MustDoFunction();
$aa = $apf->checklogin();
$servername = "localhost";
$username = "answerkiller";//用户名
$password = "iloveakaaa!!";//密码
$dbname = "answerkiller";//数据库
header("content-type:text/html;charset=utf8");//连接
$conn = new mysqli($servername, $username, $password, $dbname);
//检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
mysqli_query($conn,'SET NAMES UTF8');   
$idid = $_GET["id"];
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$idid'");
while($row = mysqli_fetch_array($result))
{
    $name = $row['name'];

}
function getname($uid){
  if($uid == null){$uname = "未知用户";}
elseif($uid == 1){$uname = "*[脱敏]";}
//*[脱敏]
else              {$uname = "未知用户";}
return $uname;
}//姓名表
$realname = getname($idid);

if($name == null){$name = "ta还没有注册哦,快去邀请他注册吧!!";}


$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$idid'");
while($row = mysqli_fetch_array($result)){$reviews = $row['reviews'];}
$reviews = explode(",",$reviews);
for ($i = 0; $i < count($reviews)-1; $i++) {
$filepatha = "reviews/".$reviews[$i].".ordylandata";//评论文件
if(file_exists($filepatha)){
$file_arra = file($filepatha);}
$file_arra = $file_arra[0];
$file_arra = explode("<</*/*/>>",$file_arra);
if($file_arra[5] == "deleted"){
$fileaaaaa = $fileaaaaa."".$file_arra[2]."号".$file_arra[3]."在".$file_arra[0]."的".$file_arra[1]."号答案的评论已被删除!!.<hr>".$fileaaaaa;
}else{
$fileaaaaa = $fileaaaaa."".$file_arra[2]."号".$file_arra[3]."在".$file_arra[0]."的".$file_arra[1]."号答案说了".$file_arra[4]."!<hr>";
}
}


for ($i = 1; $i < 51; $i++) {
$aaaa = $aaaa."<a href=\"javascript:void(0);\" onclick=\"window.location.href='https://a.ordylan.cn/u/".$i."';\">[".getname($i)."]</a>";
}
$stidcard = $apf->getstudentidcard($apf->getstudentname($idid));
//echo("<script>console.log(\"StudentIdCard:".$stidcard."\");</script>");
print<<<AAAA
<title>{$realname}的个人空间--AK作业答案互助平台</title>
</head>
<body>
    用户名:{$name}<br>
    他的真名:{$realname}<br>
    他的学号:{$idid}<br>
    他的评论:{$fileaaaaa}<br>
    <a href="https://a.ordylan.cn/">返回首页</a><br>
    我的同学:<br>
    {$aaaa}

</body>
</html>
AAAA;
?>