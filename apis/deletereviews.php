<?php
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
if($sign != $ssign){
    exit("失败了...");
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

$gettaa = $_GET["rid"];

$filep = "../mainlog.ordylandata";//获得地址
$fffi = fopen($filep, 'r');
$con = fread($fffi, filesize($filep));
fclose($fffi);

$aaaaaa = "../reviews/".$gettaa.".ordylandata";
if(!file_exists($aaaaaa)){exit("评论不存在.");}
else{
    $file_arra = file($aaaaaa);
    $file_arra = $file_arra[0];
    $file_arra2 = explode("<</*/*/>>",$file_arra);
    if($file_arra2[5] == "deleted"){exit("评论已被删除.");}
    if($file_arra2[5] == "p"){exit("评论被保护,删除失败.");}
    else{
        if($file_arra2[2] == $id || $isadmin == "true"){
            $wjjjj = fopen($aaaaaa,"w");
            fwrite ($wjjjj,$file_arra."deleted");
            fclose($wjjjj);
            $con = "---DO--|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."成功删除评论".$gettaa."!\n".$con;
            $fffi = fopen($filep, 'w');
            fwrite($fffi, $con);
            fclose($fffi);
            exit("complete!");
        }
        else{
            $con = "---DO--|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."失败删除评论".$gettaa."!\n".$con;
            $fffi = fopen($filep, 'w');
            fwrite($fffi, $con);
            fclose($fffi);
            exit("非管理员删除他人评论.");
        }
    }
}
?>