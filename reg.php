<?php
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign == $ssign){
header("content-type:text/html;charset=utf8");
$conn = new mysqli("localhost", "answerkiller", "iloveakaaa!!", "answerkiller");
mysqli_query($conn,'SET NAMES UTF8'); 
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$istruea = $row['istrue'];}
if($istruea == "true"){header('Location: https://a.ordylan.cn/');}
else{
    if($_GET["sign"] && $id == $_GET['id']){
        $invitecodereal = md5("ANSWERKILLER_ID_".$id."_TEST_NICESCORETOORDYLAN!!_USER_".$rname);
        if($invitecodereal == $_GET["sign"]){
            mysqli_query($conn,"UPDATE users SET istrue='true' WHERE id=N'$id';");
            echo("邀请码bu错误!");header('Location: https://a.ordylan.cn/');
        }
        else{echo("<script>alert('邀请码错误!');window.location.href='https://a.ordylan.cn/ic/';</script>");}
    }
}$conn->close();
}

?>
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
<!--百度统计-->
<meta name="description" content="这里是18班的AK作业答案互助平台,互助学习上AK!橙宝们,一起来布鲁莱斯城堡玩耍吧!">
<meta name="keyword" content="AK,Answer Killer,答案互助,学习">
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
<title>AK作业答案互助平台_注册</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>学校18班AK作业答案互助平台</h1>
Welcome To Answer Killer!!<br>
<?php
if(!$_GET["sign"]){echo('获取邀请码请咨询管理员!(可以先注册,再写邀请码啦,不要帮别人注册哦哦!)<br>');}

if($_GET["id"]){echo('你的学号<input type="text" id="xuehao" readonly><br><script>document.getElementById("xuehao").value="'.$_GET["id"].'";</script>');}else{echo('你的学号<input type="text" id="xuehao"><br>');}

if($_GET["sign"]){echo('邀请码<input type="text" id="invitecode" readonly><br><script>document.getElementById("invitecode").value="'.$_GET["sign"].'";</script>');}else{echo('邀请码<input type="text" id="invitecode"><br>');}
?>

设置昵称(最长20位)<input type="text" id="name" maxlength="20"><br>
设置密码<input type="password" id="pwdmd5"><br>
图片验证码<input type="text" id="code"><img src='/apis/imagecode.php' onclick="javascript:changeImg();" id="codee"><br> 
<button id="regg">注册哦</button>
<a href="https://a.ordylan.cn/l/">登录</a>
<a href="https://a.ordylan.cn/">返回首页</a><br>
您的账号安全,我们来负责!!<您输入的密码将以MD5进行加密+加橙汁保存到数据库!>

<script>
function changeImg() {
    document.getElementById("code").value="";
    document.getElementById("codee").src = "/apis/imagecode.php?t=" + Math.random();
}
$('#regg').click(function() {
       $.ajax({
            url:"https://a.ordylan.cn/apis/reg.php?" + Math.random(),
            type:"POST",
            data:{
                xuehao:$("#xuehao").val(),
                name:$("#name").val(),
                pwdmd5:$("#pwdmd5").val(),
                code:$("#code").val(),
                invitperson:"<?php if($_GET["ip"]){echo($_GET["ip"]);}?>",
                invitecode:$("#invitecode").val()
            },
            success:function (resa) {
                changeImg();
                if(resa == "验证码错了哦哦"){}
                else if(resa == "注册成功啦啦!"){window.location.href="/?" + Math.random();}
                alert(resa);
            }
        })         
});
</script>

</body>
</html>