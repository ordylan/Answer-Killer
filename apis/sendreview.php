<?php
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");

$filep = "../mainlog.ordylandata";//获得地址
$fffi = fopen($filep, 'r');
$con = fread($fffi, filesize($filep));
fclose($fffi);

$aid = $_GET["answer"];
$bbbbk = $_GET["book"];
$pinglun = $_POST["pinglun"];
if($aid == null || $bbbbk == null || $pinglun == null){exit("参数少了");}
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

if($sign != $ssign){
    $id = "888";
}

/*if($sign == $ssign){*/
if(strstr($pinglun, "<</*/*/>>")){exit("有非法字符");}
if(strlen($pinglun)>800){exit("评论taichangle!");}
if($id != 46 || $_COOKIE["r"] != "t"){exit("评论区数据库已关闭!\\n                        ——ORDYLAN<br />
<b>Warning</b>:  mysqli::mysqli(): (HY000/1045): Access denied for user 'answerkiller'@'localhost' (using password: YES) in <b>/www/wwwroot/a.ordylan.cn/apis/sendreview.php</b> on line <b>22</b><br />");}

$pinglun = str_replace(array('"', '<', '>', chr(10)), array('&quot;', '&lt;', '&gt;','<br>'), $pinglun);

$reviewfile = $bbbbk."<</*/*/>>".$aid."<</*/*/>>".$id."<</*/*/>>".date('Y/m/d h:ia')."<</*/*/>>".$pinglun."<</*/*/>>";
function geturl(){
        $plid = rand(1000,9999999);
        $filepatha = "../reviews/".$plid.".ordylandata";
        if(file_exists($filepatha)){geturl();}
        else{return $plid;}
    }
$aaaaa = geturl();
$aaaaaa = "../reviews/".$aaaaa.".ordylandata";
$wjjjj = fopen($aaaaaa,"w");
fwrite ($wjjjj,$reviewfile);
fclose($wjjjj);

$result = mysqli_query($conn,"SELECT * FROM reviews WHERE bookid=N'$bbbbk'");
while($row = mysqli_fetch_array($result)){$reviewids = $row['reviewids'];}
$reviewids = $aaaaa.",".$reviewids;
mysqli_query($conn,"UPDATE reviews SET reviewids='$reviewids' WHERE bookid=N'$bbbbk';");
$result2 = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row2 = mysqli_fetch_array($result2)){$reviews = $row2['reviews'];}
$reviews = $aaaaa.",".$reviews;
mysqli_query($conn,"UPDATE users SET reviews='$reviews' WHERE id=N'$id';");
echo("评论成功!!");//"-评论ID:".$aaaaa

$con = "---DO--|ip:\"".$_SERVER["REMOTE_ADDR"]."\"在".date('m/d/Y h:ia')."评论了".$bbbbk."!评论id为:".$aaaaa.".\n".$con;
$fffi = fopen($filep, 'w');
fwrite($fffi, $con);
fclose($fffi);


/*}
else{
    echo("你没有登录啊啊");
}*/


$conn->close();
?>