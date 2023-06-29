<!DOCTYPE html>
<html>
<head>
<!--控制台-->
<script src="vconsole.min.js"></script>
<script>var vConsole = new window.VConsole();</script>
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
<title>AK作业答案互助平台!![留言板]</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>欢迎来到学校18班AK作业答案互助平台留言板!!</h1><a href="https://a.ordylan.cn/">返回首页</a><br>
<textarea id="plplpl" placeholder="发一条友善的留言..最多800字符" maxlength="800" style="width:90vw;hight:20vh;" onkeydown="baocun();"></textarea>
<button id="sss">发留言!!</button>
<?php 
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

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$aaaaaaaaaaa = $row['isadmin'];}

$result = mysqli_query($conn,"SELECT * FROM reviews WHERE bookid=N'THE_WEBSITE'");
while($row = mysqli_fetch_array($result)){$reviewids = $row['reviewids'];}
$reviewids = explode(",",$reviewids);
for ($i = 0; $i < count($reviewids)-1; $i++) {
$filepatha = "reviews/".$reviewids[$i].".ordylandata";//评论文件
if(file_exists($filepatha)){
$file_arra = file($filepatha);}
$file_arra = $file_arra[0];
$file_arra = explode("<</*/*/>>",$file_arra);
if($file_arra[5] == "deleted"){
echo("<br>".$file_arra[2]."号在".$file_arra[3]."发的建议已被删除!!");
}else{
if($aaaaaaaaaaa == "true"){$aaaaaaaaacccc = "<button id=\"deletepl\" onclick=\"dpl(".$reviewids[$i].")\">删除该建议</button>";}
echo("".$file_arra[2]."号".$file_arra[3]."在".$file_arra[0]."的".$file_arra[1]."号答案说了:".$file_arra[4]."!".$aaaaaaaaacccc);
}
echo("<hr>");
}
$conn->close();
?>
    
<script>
$('#sss').click(function() {
       $.ajax({
            url:"https://a.ordylan.cn/apis/sendreview.php?" + Math.random() + "&answer=平台建议&book=THE_WEBSITE",
            type:"POST",
            data:{
                pinglun:$("#plplpl").val()
            },
            success:function (resa) {
                alert(resa);
                if(resa == "评论成功!!"){window.location.href=window.location.pathname + "?" + Math.random();}
            }
        })         
});
</script>
<script>
function dpl(plid) {
       $.ajax({
            url:"https://a.ordylan.cn/apis/deletereviews.php?rid=" + plid + "&" + Math.random(),
            type:"GET",
            success:function (resa) {
                alert(resa);
                if(resa == "complete!"){window.location.href=window.location.pathname + "?" + Math.random();}
            }
        })         
}
if(localStorage.ak_adviceplpl){document.getElementById("plplpl").value = localStorage.ak_adviceplpl;}
setInterval(function(){baocun();},300)
function baocun(){
    localStorage.ak_adviceplpl = $("#plplpl").val();
    //console.log("11");
}
</script>
</body>
</html>