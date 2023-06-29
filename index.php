<!DOCTYPE html>
<html>
    <link rel="manifest" href="/manifest.json">
<?php
require_once 'PUBLIC.php';
$apf = new AK_PUBLIC_FUNCTION();
$apf->MustDoFunction();
$aa = $apf->checklogin();

$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];

echo('<!--css以后写,先直接a了时代英语答案平台
<br>-->
<h1>欢迎来到学校18班AK作业答案互助平台!!</h1>
<p>(答案由同学们上传,仅供参考,不保证正确)</p>
<p><!--!!整个网站都要被你们玩坏了, 我不管了, 反正这个项目也是个半成品, 希望你们不要随便尝试越权进库|器的bug。喜欢找漏洞的别来, 这里太多了我真的没时间修,而且该网站只是我自己对答案用的!!-->由于部分政策和部分人的攻击, 评论区暂时关闭!</p>
<!--<a href="https://a.ordylan.cn/r/">注册</a>
<a href="https://a.ordylan.cn/l/">登录</a>
-->');

if($aa == "true"){
    $namecode = "<div id=\"user\"><a href=\"https://a.ordylan.cn/u/".$id."\">个人空间-".$rname."</a></div>";
$result = SqlDo("SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$vip = $row['vip'];$istruea = $row['istrue'];}//获取会员+yqm
list($msec, $sec) = explode(' ', microtime());//shijianchuo
$msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
if($vip - $msectime > 0){$isvvip = "true";}else{$isvvip = "false";}
if($istruea != "true"){echo("账号无邀请码!!<a href=\"https://a.ordylan.cn/ic/\" >[去输入]</a>");}

}
else{
    $namecode = "<div id=\"user\"><a href=\"https://a.ordylan.cn/l/\">未登录,点击登录</a></div>";
}
if($aa == "true"){
echo('
<div id="vviptime">我的豪华答anVIP到期时间:999999999天后</div>
<script>
setInterval(function(){viiptime();},1000);
function viiptime(){
var daoqitime = "'.$vip.'";
var newddate = new Date();
var aaaaaaa = "'.$isvvip.'";
if(aaaaaaa == "true"){var bbbb = "我的豪华答案VIP还有";var sytime = (Number(daoqitime) - Number(newddate))/1000;var c = "到期!";}
else if(aaaaaaa == "false"){var bbbb = "豪华答案VIP已经离你而去";var sytime = Number(newddate)/1000 - (Number(daoqitime));var c = "了!";}
            var secondTime = parseInt(sytime);
            var minuteTime = 0;
            var hourTime = 0;
            var dayTime = 0;
                    minuteTime = parseInt(secondTime / 60);
                    secondTime = parseInt(secondTime % 60);
                    if (minuteTime >= 60) {
                        hourTime = parseInt(minuteTime / 60);
                        minuteTime = parseInt(minuteTime % 60);
                        if (hourTime >= 24) {
                            dayTime = parseInt(hourTime / 24);
                            hourTime = parseInt(hourTime % 24);
                        }
                    }
        var ddiv=document.getElementById("vviptime");
        ddiv.innerHTML=bbbb+dayTime+"天"+hourTime+"小时"+minuteTime+"分"+secondTime+"秒"+c+"<br>";}
viiptime();   </script>');
}
echo($namecode);

echo ("//加油哦!距中考还有".intval((1686844800 - time()) / 86400)."天//"); 

echo(" <a href=\"https://a.ordylan.cn/d/\" >[答案下载]</a><<新学期开始啦!八下答案全部下架哦!>><br>");

$resulta = SqlDo("SELECT * FROM system");
while($rowa = mysqli_fetch_array($resulta)){$showanswer = $rowa['showanswer'];}
$reviewids = explode(",",$showanswer);
echo("<table border=\"1\"><tbody><tr><td>练习</td><td>答案</td></tr>");
for ($i = 0; $i < count($reviewids)-1; $i++) {
    $result3 = SqlDo("SELECT * FROM answers WHERE bookid=N'$reviewids[$i]'");
    while($row3 = mysqli_fetch_array($result3)){$booknnn = $row3['bookname'];$answerids = $row3['answerids'];}
    

    echo("<tr><td>".$booknnn."答案</td><td>");
    $answerids = explode(",",$answerids);
        if(count($answerids)>21){$answe = 20;}
        else{$answe = count($answerids)-1;}
        for ($s = 0; $s < $answe; $s++) {
            $aaaa = $aaaa."<a href=\"https://a.ordylan.cn/av/".$reviewids[$i]."_".$answerids[$s]."\">[".$answerids[$s]."号]</a>";
        }
        if(count($answerids)>21){$aaaa = $aaaa."<a href=\"https://a.ordylan.cn/ava/".$reviewids[$i]."\">>>更多</a>";}
        echo("$aaaa</td></tr>");
        $aaaa="";
}

echo("</tbody></table>");


print<<<HAHAHA

<!--<a href="/t/1.html" >[9A课时精练答案]</a><br>-->
<a href="/t/np_9_hjzk.html">[时代英语报九年级寒假专刊答案]</a><br>
<a href="/t/hy.html" >[超牛逼]——物理*[脱敏]唱歌</a><br>
<a href="http://oshua.on.ordylan.cn/" target="_blank">[O刷练习～在线免费刷题]</a><br>
<!--<a href="http://live.ordylan.cn/" target="_blank">[免费化学课在线直播(回放)]</a><br>-->

<a href="https://a.ordylan.cn/apis/loggetter.php?mode=updatelog.ordylandata" >[查看网站升级日志]</a><br>
<!--答案来源:课时精练8下--lyz提供;报纸--46号提供;<br>-->
--------------------<br>
此平台的诞生,经过了上百时的制造,但难免有差错!当你发现一些漏洞,你可以<a href="https://a.ordylan.cn/ad/">[反馈]</a>给我们,谢谢你的支持!<br>
答案为手动合并,提交,上传sql等,如发现答案错位等情况,也请反馈给我们(答案下面有评论区)!<br>
--------------------<br>
<a href="https://a.ordylan.cn/a/">[管理后台]</a><br>
<a href="https://a.ordylan.cn/s/">[网站设置_待开发]</a><br>


HAHAHA;
?>



</body>
</html>