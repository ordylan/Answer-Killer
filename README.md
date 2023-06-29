# AK作业答案互助平台
该平台被我做了好几百小时, 但是现在看来, 于笔记系统相比, 实在是太差了. 现在免费分享给大家!!  
大部分敏感信息如密码和身份证码等已经脱敏。由于数据量庞大, 如果你想使用这个平台, 代码中有大量内容需要修改.  
由于当时没有写MD的习惯, 所以文件无注释, 需要自己分析.   
``!SQLEXAMPLE.sql``是数据库的示例.注: 平台有大量漏洞, 使用请自己修复.  




# 伪静态
#---------------a域名_答案查询伪静态---------------
#停止访问
if ($http_cookie !~* "*[脱敏]") {
  rewrite / /CloseAK.html;
 }
#注册[r]egister
rewrite /r/(\w+)_(\w+)_(\d+) /reg.php?id=$1&sign=$2&ip=$3;
rewrite /r/(\w+)_(\w+) /reg.php?id=$1&sign=$2;
rewrite /r/ /reg.php;
rewrite /ic/ /icode.php;#yqm
#用户介绍[u]ser 
rewrite /u/(\d+) /seeuser.php?id=$1;
#登录[l]ogin
rewrite /l/ /login.php;
#管理员后台[a]dmin
rewrite /a/getcode/(\d+) /apis/icodegetter.php?xuehao=$1;
rewrite /a/ /admin.php;
#答案图片页[a]nswer[i]mage
rewrite /ai/(\w+)_(.+).jpg /getanswer.php?book=$1&answer=$2;
#答案预览页[a]nswer[v]iews
rewrite /av/(\w+)_(.+) /answerview.php?book=$1&answer=$2;
#答案biao页[a]nswer[v]iews[a]ll
rewrite /ava/(\w+) /answerviewall.php?book=$1;
#建议页[ad]vice
rewrite /ad/ /advice.php;
#下载页[d]ownload
rewrite /d/(.+) /dfile.php?filename=$1;
rewrite /d/ /dfilea.php;
#彩蛋页[W]ow[A]K [AB]out[A]nswerkillerAKH [A]nswer[K]iller[H]istory.php
#rewrite /WA/(.+) /WOW_AK.php?;
rewrite /WA/ /WOW_AK.php;
rewrite /ABA/ /aboutanswerkiller.php;
rewrite /AKH/ /answerkillerhistory.php;
#设置页[s]etting
rewrite /s/ /setting.php;
#防止偷窥答案/评论
location /answer/ {internal;}
location /reviews/ {internal;}


#----------OLD----------
#答案页伪静态
#rewrite /answerimage/(\w+)_(\w+).jpg /getanswer.php?book=$1&answer=$2 last;
#主页伪静态
#rewrite /(\w+)_(\w+) /index.php?book=$1&answer=$2 last;
#主页dancanshu伪静态
#rewrite /i/(\w+) /index.php?&answer=$1 last;