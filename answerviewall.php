<!DOCTYPE html>
<html>
<head>
<!--控制台-->
<script src="/vconsole.min.js"></script>
<script>var vConsole = new window.VConsole();</script>
<link href="/1.css" rel="stylesheet">
<!--彩蛋画-->
<script type="text/javascript" src="https://ordylan.cn/js/log.js"></script>
<!--键盘彩蛋-->
<script type="text/javascript" src="/wow.js"></script>
<meta name="description" content="这里是18班的AK作业答案互助平台,互助学习上AK!橙宝们,一起来布鲁莱斯城堡玩耍吧!">
<meta name="keyword" content="AK,Answer Killer,答案互助,学习">
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
<?php 
$bbbbk = $_GET["book"];
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
$result3 = mysqli_query($conn,"SELECT * FROM answers WHERE bookid=N'$bbbbk'");
    while($row3 = mysqli_fetch_array($result3)){$booknnn = $row3['bookname'];$answerids = $row3['answerids'];}
    
echo("
<meta charset=\"utf-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>".$booknnn."答案-AK作业答案互助平台!![查看书本全部答案]</title>"."
</head>
<body>
<h1>欢迎来到学校18班AK作业答案互助平台!!</h1>(答案由同学们上传,仅供参考,不保证正确)<a href=\"https://a.ordylan.cn/\">返回首页</a>
<style></style>"."<br>".$booknnn."的全部答案");
//echo();
echo("<table border=\"1\"><tbody><tr><td>练习</td><td>答案</td></tr>");
echo("<tr><td>".$booknnn."答案</td><td>");
    $answerids = explode(",",$answerids);
        for ($s = 0; $s < count($answerids)-1; $s++) {
            $aaaa = $aaaa."<a href=\"https://a.ordylan.cn/av/".$bbbbk."_".$answerids[$s]."\">[".$answerids[$s]."号]</a>";
        }
        echo("$aaaa</td></tr>");

echo("</tbody></table>");

$conn->close();
?>
</body>
</html>