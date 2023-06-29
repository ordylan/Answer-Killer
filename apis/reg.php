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
function getname($uid){
  if($uid == 888){$uname = "Guest_Mode";}
elseif($uid == 1){$uname = "*[脱敏]";}
//*[脱敏]
else              {$uname = "未知用户";}
return $uname;
}//姓名表
session_start();//验证码需要的session
//获得必传参数
$idaa = $_POST["xuehao"];
$name = $_POST["name"];
$pwdmd5 = $_POST["pwdmd5"];
$rname = getname($idaa);
$invitecode = $_POST["invitecode"];
$invitecodereal = md5("ANSWERKILLER_ID_".$idaa."_TEST_NICESCORETOORDYLAN!!_USER_".$rname);
$code = $_POST["code"];//验证码
if(isset($code)){
    if(strtolower($code) == $_SESSION['authcode']){
        unset($_SESSION['authcode']);
    }
    else{
       exit("验证码错了哦哦");
    }
    
}

$filep = "../mainlog.ordylandata";//获得地址
$fffi = fopen($filep, 'r');
$con = fread($fffi, filesize($filep));
fclose($fffi);

//判断aa
if ($idaa == null || $name == null || $pwdmd5 == null) exit('缺少参数a,注册失败');//判断aa
if($rname == "未知用户"){exit("学号不存在!!");}//判断aa
$result = mysqli_query($conn,"SELECT * FROM users WHERE id = '$idaa'");
$num_rows = mysqli_num_rows($result);
if($num_rows != 0) {exit("账号已存在!!如果不是你的操作,请联系管理员删除该账号!");}//判断aa
/*
if($invitecode != $invitecodereal) {
    $con = "--REG--|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."失败注册账号".$idaa."-无邀请码!\n".$con;
$fffi = fopen($filep, 'w');
fwrite($fffi, $con);
fclose($fffi);

    exit("邀请码错误,请联系管理员(学号46)获取!!!");
    
}//判断aa
*/

if($invitecode != $invitecodereal){$dddaa="false";}
else{$dddaa="true";}
if(strlen($name)>20){exit("用户名taichangle!");}


    require_once '../WORD.php';
    $apf = new AK_WORD_FUNCTION();
    $name = $apf->CheckWord($name);

$pmd5add = substr(md5(time()),1,10);//加橙汁
$pwdmd5 = md5($_POST["pwdmd5"]."_ORDYLAN_ANSWER_KILLER!!_".$pmd5add);

//main
list($msec, $sec) = explode(' ', microtime());//shijianchuo
$msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
$ddd = 2592000000 + $msectime;

//写sql
$sql = "INSERT INTO users (id, name, realname, passwordmd5, vip, isadmin, istrue, reviews,orangejuice,nowonid,egg1,egg2,egg3) 
VALUES (N'$idaa', N'$name', N'$rname', N'$pwdmd5', N'$ddd', N'false', N'$dddaa', N'',N'$pmd5add', N'', N'', N'', N'')";
if ($conn->query($sql) === TRUE) {
setcookie("ak_id", $idaa ,time() + 99 * 365 * 24 * 3600,"/");
setcookie("ak_rname", $rname ,time() + 99 * 365 * 24 * 3600,"/");
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$idaa."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
setcookie("ak_sign", $ssign ,time() + 99 * 365 * 24 * 3600,"/");
$did = substr(md5(time()),1,10);
mysqli_query($conn,"UPDATE users SET nowonid='$did' WHERE id=N'$idaa';");
setcookie("ak_did", $did ,time() + 99 * 365 * 24 * 3600,"/");

echo "注册成功啦啦!";
$con = "--REG--|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."成功注册账号".$idaa."!\n".$con;
$fffi = fopen($filep, 'w');
fwrite($fffi, $con);
fclose($fffi);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>