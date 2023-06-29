<?php
//域名检测
//if ($_SERVER["HTTP_HOST"] != "a.ordylan.cn") header('Location: http://a.ordylan.cn/');;
//$_SERVER['REMOTE_ADDR'];
//防反向代理
//echo($_SERVER["HTTP_X_FORWARDED_FOR"]);
//if($_SERVER["HTTP_X_FORWARDED_FOR"] || $_SERVER['HTTP_HOST'] != "a.ordylan.cn"){header("https://a.ordylan.cn/");}
//ak数据库
function SqlDo($sqlsectence){
    $aksql = new mysqli("localhost","answerkiller","iloveakaaa!!","answerkiller");
    mysqli_query($aksql,'SET NAMES UTF8');
    $result = mysqli_query($aksql,$sqlsectence);
    $aksql->close();
    return $result;
}
//ak公共库
class AK_PUBLIC_FUNCTION{
    //网页必做(api不要放!!)
    public function MustDoFunction(){
    //控制台
    //echo('<script src="https://unpkg.com/vconsole@latest/dist/vconsole.min.js"></script><script>var vConsole = new window.VConsole();</script>');
    //网页头部打印
    print<<<HTMLHEAD
<head>
<!--控制台-->
<script src="vconsole.min.js"></script>
<script>var vConsole = new window.VConsole();</script>
<!--css-->
<link href="/1.css" rel="stylesheet">
<!--彩蛋画-->
<script type="text/javascript" src="https://ordylan.cn/js/log.js"></script>
<!--键盘彩蛋-->
<script type="text/javascript" src="/wow.js"></script>
<!--给机器人看啊oo-->
<meta name="description" content="这里是18班的AK作业答案互助平台,互助学习上AK!橙宝们,一起来布鲁莱斯城堡玩耍吧!">
<meta name="keyword" content="AK,Answer Killer,答案互助,学习">
<meta name="baidu-site-verification" content="code-R6CPWq44gH" />
<meta name="360-site-verification" content="b396febc7e25a6857c0f4978ea06c118" />
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
<title>AK作业答案互助平台!!</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
HTMLHEAD;
    echo("<body>");
    //临时通知
    //echo(">>由于全部前后端代码以及数据库遭到泄露,平台的用户使用数据将会于6月到7月恢复到4月的,请客户做好备份,谢谢!<<<br>");
    }
    //获取登录状态 登录了返回true
    public function checklogin(){
        $id = $_COOKIE["ak_id"];
        $rname = $_COOKIE["ak_rname"];
        $sign = $_COOKIE["ak_sign"];
        $dddid = $_COOKIE["ak_did"];
        $ssign = md5("Answer_Killer_LOGIN_CODE_ID_".$id."_NAME_".$rname."_HAPPY_EVERY_DAY_AND_NO_BUGS");
        $result = SqlDo("SELECT * FROM users WHERE id=N'$id'");
        while($row = mysqli_fetch_array($result)){$nowonid = $row['nowonid'];}
        if($sign == $ssign && $nowonid == $dddid){return "true";}else{return "false";}
    }
    //根据学号返回用户姓名
    public function getstudentname($uid){
            if($uid == 888){$uname = "Guest_Mode";}
        elseif($uid == 1){$uname = "*[脱敏]";}
//*[脱敏]
        else              {$uname = "未知用户";}
        return $uname;
    }
    //根据用户姓名返回用户身份证号
    public function getstudentidcard($uname){    
            if($uname == "Guest_Mode"){$uidcard = "888";}
        elseif($uname == "*[脱敏]"){$uidcard = "*[脱敏]";}
//*[脱敏]
        else                      {$uidcard = "0";}
        return $uidcard;
    }
    //获取答案图片的token
    public function getanswerimgtoken(){
        $aid = $_GET["answer"];
        $bid = $_GET["book"];
        $atoken = md5("_Answer_Killer_ANSWER_TOKEN_".$aid."_".$bid."_");
        return $atoken;
    }
}
?>