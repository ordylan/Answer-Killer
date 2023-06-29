<?php 
$id = $_COOKIE["ak_id"];
$rname = $_COOKIE["ak_rname"];
if($rname==null){
    $rname = "未登录";
}
$sign = $_COOKIE["ak_sign"];
$ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
$aid = $_GET["answer"];
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

//检测登录
if($sign == $ssign){
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=N'$id'");
while($row = mysqli_fetch_array($result)){$vip = $row['vip'];$aaaaaaaaaaa = $row['isadmin'];}//获取会员
list($msec, $sec) = explode(' ', microtime());//shijianchuo
$msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
if($vip - $msectime > 0){$isvvip = "true";}}

$result2 = mysqli_query($conn,"SELECT * FROM system");
while($row2 = mysqli_fetch_array($result2)){$nofree = $row2['nofree'];}//获取验证学科比如英语
$nofree = explode(",",$nofree);
$result3 = mysqli_query($conn,"SELECT * FROM answers WHERE bookid=N'$bbbbk'");
while($row3 = mysqli_fetch_array($result3)){$bookmode = $row3['bookmode'];}//获取学科
for ($i = 0; $i < count($nofree); $i++) {
if($nofree[$i] == $bookmode){$free = "false";}//else{$free = "true";}
}

//2022 3周年狂欢庆典

/*
if(date('Y') >= "2022" && date('m') >= "9")
{
    if($sign != $ssign){
        $rname = "狂欢庆典免费看";
    }
    else{$rname = $rname."|狂欢庆典免费看";}
    $free = "true";
}
*/

//ip黑名单
/*
if($_SERVER["REMOTE_ADDR"] == "49.65.245.141"){
header('content-type:image/jpeg;');
$content=file_get_contents('answer/ipwrong.jpg');
echo $content;$conn->close();
exit();
}
*/

$filep = "log.ordylandata";//获得地址
$fffi = fopen($filep, 'r');
$con = fread($fffi, filesize($filep));
fclose($fffi);

$quxiaotemptongzhi = 0;
require_once 'PUBLIC.php';
$apf = new AK_PUBLIC_FUNCTION();
/*$aa = $apf->checklogin();*/
$atoken = $apf->getanswerimgtoken();
if($atoken != $_GET["token"]){
        header('content-type:image/jpeg;');
        $content=file_get_contents('answer/tokenwrong.jpg');
        echo $content;
}else{
if(file_exists('answer/'.$bbbbk.'/'.$aid.'.jpg'))
{

if($aaaaaaaaaaa == "true" && $_GET["nowatermark"] == "true"){//管理员无水印
    header('content-type:image/jpeg;');
    $content=file_get_contents('answer/'.$bbbbk.'/'.$aid.'.jpg');
    echo $content;
}
else{
if($free != "false" || $isvvip == "true" || $aid == "trial"){//其他答案直接展示
                header('content-type:image/jpg;');
                  $imgSrc = 'answer/'.$bbbbk.'/'.$aid.'.jpg'; //图片存放路径
                 $img = imagecreatefromjpeg($imgSrc);//打开图片
    $color = imagecolorallocate($img,123,123,123); //文字水印颜色分配，后三个参数为rgb,000为黑色
    $text = $rname."_AK作业互助平台"; //文本水印内容
    $posiBox_text = imagettfbbox(35,0,'msyhl.ttc',$text); //获取水印盒子的宽高信息
    $textBox_width = $posiBox_text[2] - $posiBox_text[0]; 
    //求出盒子的宽度，X轴：右下角的x坐标-左下角的x坐标 = 宽度
    
    $img_width = imagesx($img); //获取图片的宽度
    $img_height = imagesy($img); //获取图片的高度
    
     $zitidaxiao = 35;
    $zitijiaodu = 35;
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-1-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/10)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/5)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/3)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/2)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/10),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/20),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/5),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/3),$color,'msyhl.ttc',$text);
    
 //   imagettftext($img,40,0,$img_width-$textBox_width-($img_width/30),($img_height/3),$color,'msyhl.ttc',"AK答案互助平台<a.ordylan.cn>");
    //图片资源、字体大小、字体倾斜角度、文字在x轴位置、文字在y轴的位置、文本颜色、字体家族路径、文本内容
    imagejpeg($img); //解析图片
    imagedestroy($img);
}
else{//英语其他专用
    if($contentaaa == "true" || $contentaaa == "chaochao"){
                header('content-type:image/jpg;');
                  $imgSrc = 'answer/'.$bbbbk.'/'.$aid.'.jpg'; //图片存放路径
                 $img = imagecreatefromjpeg($imgSrc);//打开图片
    $color = imagecolorallocate($img,123,123,123); //文字水印颜色分配，后三个参数为rgb,000为黑色
    $text = $rname."_AK作业互助平台"; //文本水印内容
    $posiBox_text = imagettfbbox(35,0,'msyhl.ttc',$text); //获取水印盒子的宽高信息
    $textBox_width = $posiBox_text[2] - $posiBox_text[0]; 
    //求出盒子的宽度，X轴：右下角的x坐标-左下角的x坐标 = 宽度
    
    $zitidaxiao = 35;
    $zitijiaodu = 35;
    $img_width = imagesx($img); //获取图片的宽度
    $img_height = imagesy($img); //获取图片的高度
 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-1-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/10)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/5)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/3)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),$img_height-($img_height/2)-($img_width/30),$color,'msyhl.ttc',$text); 
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/10),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/20),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/5),$color,'msyhl.ttc',$text);
    imagettftext($img,$zitidaxiao,$zitijiaodu,$img_width+22-$textBox_width-($img_width/30),($img_height/3),$color,'msyhl.ttc',$text);
    //图片资源、字体大小、字体倾斜角度、文字在x轴位置、文字在y轴的位置、文本颜色、字体家族路径、文本内容
    imagejpeg($img); //解析图片
    imagedestroy($img);

            }
    else{
$src_path = 'answer/'.$bbbbk.'/'.$aid.'.jpg';
//创建源图的实例
$src = imagecreatefromstring(file_get_contents($src_path));
//裁剪开区域左上角的点的坐标
$qqqqqqqqq = rand(imagesy($src)/100,imagesy($src)/2);
$x = 0;
$y = 0 + $qqqqqqqqq;
//裁剪区域的宽和高
$width = imagesx($src);
//$height = imagesy($src)*0.5;
$height = $qqqqqqqqq;
//最终保存成图片的宽和高，和源要等比例，否则会变形
$final_width = $width;
//$final_height = imagesy($src)*0.5;
$final_height = $qqqqqqqqq;

//将裁剪区域复制到新图片上，并根据源和目标的宽高进行缩放或者拉升
$new_image = imagecreatetruecolor($final_width, $final_height);
imagecopyresampled($new_image, $src, 0, 0, $x, $y, $final_width, $final_height, $width, $height);

$color = imagecolorallocate($new_image,150,150,150); //文字水印颜色分配，后三个参数为rgb,000为黑色
    $text = "随机预览部分,更多请申请"; //文本水印内容
    $posiBox_text = imagettfbbox(40,0,'msyhl.ttc',$text); //获取水印盒子的宽高信息
    $textBox_width = $posiBox_text[2] - $posiBox_text[0]; 
    //求出盒子的宽度，X轴：右下角的x坐标-左下角的x坐标 = 宽度
    $img_width = imagesx($new_image); //获取图片的宽度
    $img_height = imagesy($new_image); //获取图片的高度
    imagettftext($new_image,40,45,$img_width-$textBox_width+($img_width/30),$img_height-($img_width/30),$color,'msyhl.ttc',$text); 
    
//输出图片
header('Content-Type: image/jpeg');
imagejpeg($new_image);
imagedestroy($src);
imagedestroy($new_image);
}
}
}}
else{
header('content-type:image/jpeg;');
$content=file_get_contents('answer/noanswer.jpg');
echo $content;$conn->close();
exit();
}
}
$conn->close();

if($id != "46"){
$con = "--DO-|ip:\"".$_SERVER["REMOTE_ADDR"]."\"($rname)在".date('m/d/Y h:ia')." 看了".$bbbbk."-".$aid."答案!"."\n".$con;
$fffi = fopen($filep, 'w');
fwrite($fffi, $con);
fclose($fffi);}
?>

