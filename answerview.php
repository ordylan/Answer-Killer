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
$aid = $_GET["answer"];
$bbbbk = $_GET["book"];
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign == $ssign){
    $namecode = "<div id=\"user\"><a href=\"https://a.ordylan.cn/u/".$id."\">个人空间-".$rname."</a></div>";}
else{
    $namecode = "<div id=\"user\"><a href=\"https://a.ordylan.cn/l/\">未登录,点击登录</a></div>";
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

$result3 = mysqli_query($conn,"SELECT * FROM answers WHERE bookid=N'$bbbbk'");
while($row3 = mysqli_fetch_array($result3)){$booknnn = $row3['bookname'];}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$aaaaaaaaaaa = $row['isadmin'];}

echo("<title>".$booknnn."-".$aid."号答案-AK作业答案互助平台!![查看答案]</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<body>
<style>
img#daankuang{
    width: 90vw;
}
</style>
");


echo($namecode);
echo('<h1>欢迎来到学校18班AK作业答案互助平台!!</h1>(答案由同学们上传,仅供参考,不保证正确)<a href="https://a.ordylan.cn/">[返回首页]</a><a href="https://a.ordylan.cn/ava/'.$bbbbk.'">[返回页表]</a><br>答案:'.$booknnn.'-'.$aid.'号答案.<br>'
); 


if($sign != $ssign){
    echo(">>未登录英语答案只可随机查看1%~50%!<<(T**要求,损害了他的利益)<br>");
}

require_once 'PUBLIC.php';
$apf = new AK_PUBLIC_FUNCTION();
/*$aa = $apf->checklogin();*/
$atoken = $apf->getanswerimgtoken();

if ($bbbbk == "keshi91" && $aid !="trial") $aaabbcc = "true";


if ($bbbbk == "keshi82" || $bbbbk == "kelelian82" || $bbbbk == "EXAM_BG" || $bbbbk == "WULI91" || $bbbbk == "BBT_A" || $bbbbk == "BBT_9" || $aaabbcc == "true" || $bbbbk == "KKL_91"  || $bbbbk == "KSZY_H_92" || $bbbbk == "ywfl" || $bbbbk == "kszk" ){
echo('
答案操作:
'); 
if($bbbbk == "keshi82"){$bb = 139;}
elseif ($bbbbk == "kelelian82"){$bb = 9;}
elseif ($bbbbk == "EXAM_BG"){$bb = 18;}
elseif ($bbbbk == "WULI91"){$bb = 80;}
elseif ($bbbbk == "BBT_A"){$bb = 28;}
elseif ($bbbbk == "BBT_9"){$bb = 8;}
elseif ($bbbbk == "keshi91"){$bb = 196;}
elseif ($bbbbk == "KKL_91"){$bb = 156;}
elseif ($bbbbk == "KSZY_H_92"){$bb = 59;}
elseif ($bbbbk == "ywfl"){$bb = 70;}
elseif ($bbbbk == "kszk"){$bb = 80;}
if($aid == 1){echo('
<a href="https://a.ordylan.cn/av/'.$bbbbk.'_'.($aid+1).'">[下一号]</a>
'); }
elseif($aid == $bb){
echo('
<a href="https://a.ordylan.cn/av/'.$bbbbk.'_'.($aid-1).'">[上一号]</a>
'); }
else{
echo('<a href="https://a.ordylan.cn/av/'.$bbbbk.'_'.($aid-1).'">[上一号]</a>
<a href="https://a.ordylan.cn/av/'.$bbbbk.'_'.($aid+1).'">[下一号]</a>
');
}
echo('输入答案号-<input type="number" id="yema" max="137" "min="1"><a href="javascript:void(0);" onclick="javascript:aaaaaab();">[一键跳转]</a><!--<a href="https://a.ordylan.cn/d/'.$bbbbk.'.pdf" id="dddddd">[答案PDF]</a>--><br>
<script>
document.getElementById("dddddd").href = document.getElementById("dddddd").href + "?s=" + Number(new Date());
document.getElementById("yema").value = "'.$aid.'";
    function aaaaaab(){
    window.location.href="https://a.ordylan.cn/av/'.$bbbbk.'_"+document.getElementById("yema").value;
    }
    </script>');
}
echo("<script>console.log(\"_Message_\\n书id:".$bbbbk.";\\n答案id:".$aid.";\\n书名字id:".$booknnn.";\\n\");</script>");

if($aaaaaaaaaaa == "true"){
    $aaaaaa = '<script>
function dpl(plid) {
       $.ajax({
            url:"https://a.ordylan.cn/apis/deletereviews.php?rid=" + plid + "&" + Math.random(),
            type:"GET",
            success:function (resa) {
                alert(resa);
                if(resa == "complete!"){window.location.href=window.location.pathname + "?" + Math.random();}
            }
        })         
}</script>
    ';
}

echo('
<a href="#review">查看/评论这套答案</a>
<!--<a href="#">申请完整答案(未开放)</a>-->
<br><img src="https://a.ordylan.cn/ai/'.$bbbbk.'_'.$aid.'.jpg?nowatermark=true&token='.$atoken.'" id="daankuang">
<h2 id="review">评论(测试中,暂无css)</h2><a href="#">回顶部</a>

<textarea id="plplpl" placeholder="发一条友善的评论..最多800字符" maxlength="800" style="width:90vw;hight:20vh;" onkeydown = "baocun();"></textarea>
<button id="sss">发评论!!</button><br>
<script>
$(\'#sss\').click(function() {
       $.ajax({
            url:"https://a.ordylan.cn/apis/sendreview.php?" + Math.random() + "&answer='.$aid.'&book='.$bbbbk.'",
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
'.$aaaaaa);



$result = mysqli_query($conn,"SELECT * FROM reviews WHERE bookid=N'$bbbbk'");
while($row = mysqli_fetch_array($result)){$reviewids = $row['reviewids'];}
$reviewids = explode(",",$reviewids);
for ($i = 0; $i < count($reviewids)-1; $i++) {
$filepatha = "reviews/".$reviewids[$i].".ordylandata";//评论文件
if(file_exists($filepatha)){
$file_arra = file($filepatha);}
$file_arra = $file_arra[0];
$file_arra = explode("<</*/*/>>",$file_arra);
if($file_arra[5] == "deleted"){
echo("".$file_arra[2]."号".$file_arra[3]."在".$file_arra[0]."的".$file_arra[1]."号答案的评论已被删除!!");
}else{
if($aaaaaaaaaaa == "true"){$aaaaaaaaacccc = "<button id=\"deletepl\" onclick=\"dpl(".$reviewids[$i].")\">删除该评论</button>";}
echo("".$file_arra[2]."号".$file_arra[3]."在".$file_arra[0]."的".$file_arra[1]."号答案说了:".$file_arra[4]."!".$aaaaaaaaacccc);
}
echo("<hr>");
}

$conn->close();

?>
<script>
if(localStorage.ak_aplpl){document.getElementById("plplpl").value = localStorage.ak_aplpl;}
setInterval(function(){baocun();},300)
function baocun(){
    localStorage.ak_aplpl = $("#plplpl").val();
    //console.log("11");
}
</script>
</body>
</html>