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

session_start();//验证码需要的session
//获得必传参数
$id = $_POST["id"];
$pwd = $_POST["pwd"];
$code = $_POST["code"];//验证码
/*if(isset($code)){
    if(strtolower($code) == $_SESSION['authcode']){
        unset($_SESSION['authcode']);
    }
    else{
       exit("验证码错了哦哦");
    }
    
}*/
//判断aa
if ($id == null /*|| $code == null*/) exit('缺少参数a,登录失败');//判断aa ||$pwd == null 
//main

$filep = "../mainlog.ordylandata";//获得地址
$fffi = fopen($filep, 'r');
$con = fread($fffi, filesize($filep));
fclose($fffi);

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$orangejuice = $row['orangejuice'];}
$pwd = md5($_POST["pwd"]."_ORDYLAN_ANSWER_KILLER!!_".$orangejuice);
$result=mysqli_query($conn,"select * from `users` where id=N'$id' and passwordmd5=N'$pwd'");
$num_rows = mysqli_num_rows($result);
if($num_rows == 0) {
    $con = "-LOGIN-|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."失败登录账号".$id."!\n".$con;
    $fffi = fopen($filep, 'w');
    fwrite($fffi, $con);
    fclose($fffi);
    exit("登录失败,有错误输入!");
}else{
    $result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
    while($row = mysqli_fetch_array($result))
    {
          $did = substr(md5(time()),1,10);
          mysqli_query($conn,"UPDATE users SET nowonid='$did' WHERE id=N'$id';");
          
          $realname = $row['realname'];
          setcookie("ak_id", $id ,time() + 99 * 365 * 24 * 3600,"/");
          setcookie("ak_rname", $realname ,time() + 99 * 365 * 24 * 3600,"/");
          setcookie("ak_did", $did ,time() + 99 * 365 * 24 * 3600,"/");
          $ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$realname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
          setcookie("ak_sign", $ssign ,time() + 99 * 365 * 24 * 3600,"/");
          echo("登录成功啦啦!");
          $con = "-LOGIN-|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."成功登录了账号".$id."!\n".$con;
             $fffi = fopen($filep, 'w');
            fwrite($fffi, $con);
            fclose($fffi);
    }
    
}



$conn->close();
?>