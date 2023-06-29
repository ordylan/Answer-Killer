<?php
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign != $ssign){$islogin = "false";}else{$islogin = "true";}

header("content-type:text/html;charset=utf8");
$conn = new mysqli("localhost", "answerkiller", "iloveakaaa!!", "answerkiller");
mysqli_query($conn,'SET NAMES UTF8'); 
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$egg1 = $row['egg1'];}

$reg = $_POST["reg"];
if($reg){
    if($reg == "true" && $islogin == "true"){
        mysqli_query($conn,"UPDATE users SET egg1='true' WHERE id=N'$id';");
        echo("true");
    }
    else{echo("false");}
}
else{
    if($islogin == "true" && $egg1 == "true"){echo("yi解锁彩蛋——制作中,以后再来<a href=\"https://a.ordylan.cn/\">[返回首页]</a>!");}
    else{echo("未解锁彩蛋——更多彩蛋等你发现!<a href=\"https://a.ordylan.cn/\">[返回首页]</a>");}
}
//header("Location: https://a.ordylan.cn/");
$conn->close();
?>