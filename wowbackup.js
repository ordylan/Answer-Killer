//pwl--answerkiller--免费会员彩蛋
//pwl2--akaa--网站历史彩蛋
//pwl3--ordylan--制作者彩蛋
let pwl = 0;//密码第*位
let pwl2 = 0;//密码第*位
let pwl3 = 0;//密码第*位

function ppw(e) {//函数
  const pw = window.atob("YW5zd2Vya2lsbGVy");//密码
  if (pw.charCodeAt(pwl) === e.keyCode) {//如果输入的密码第*位对
    pwl++;//密码位加一
    if (pwl === pw.length) {//如果输入的密码最后一位对
//------------------------------------------------------------
            alert("感谢您选择AK!");//密码全对执行的代码
            $.ajax({
            url:"https://a.ordylan.cn/WA/?" + Math.random(),
            type:"POST",
            data:{reg:"true"},
            success:function (resa) {
                if(resa == "true"){window.location.href="/WA/?"+"&" + Math.random();}
                else{alert("未登录用户啊");}
            }
        })   
//------------------------------------------------------------
      pwl = 0;//完成清空进度
    }
  } else {
    pwl = 0;//输错一位直接清空进度
  }
console.log("彩蛋1("+pwl+"/"+pw.length+")");
}
function ppw2(e) {//函数
  const pw2 = window.atob("YWthYQ");//密码
  if (pw2.charCodeAt(pwl2) === e.keyCode) {//如果输入的密码第*位对
    pwl2++;//密码位加一
    if (pwl2 === pw2.length) {//如果输入的密码最后一位对
//------------------------------------------------------------
            alert("感谢您选择AK!");//密码全对执行的代码
            $.ajax({
            url:"https://a.ordylan.cn/AKH/?" + Math.random(),
            type:"POST",
            data:{reg:"true"},
            success:function (resa) {
                if(resa == "true"){window.location.href="/AKH/?"+"&" + Math.random();}
                else{alert("未登录用户啊");}
            }
        })   
//------------------------------------------------------------
      pwl2 = 0;//完成清空进度
    }
  } else {
    pwl2 = 0;//输错一位直接清空进度
  }
console.log("彩蛋2("+pwl2+"/"+pw2.length+")");
}
function ppw3(e) {//函数
  const pw3 = window.atob("b3JkeWxhbg");//密码
  if (pw3.charCodeAt(pwl3) === e.keyCode) {//如果输入的密码第*位对
    pwl3++;//密码位加一
    if (pwl3 === pw3.length) {//如果输入的密码最后一位对
//------------------------------------------------------------
            alert("感谢您选择AK!");//密码全对执行的代码
            $.ajax({
            url:"https://a.ordylan.cn/ABA/?" + Math.random(),
            type:"POST",
            data:{reg:"true"},
            success:function (resa) {
                if(resa == "true"){window.location.href="/ABA/?"+"&" + Math.random();}
                else{alert("未登录用户啊");}
            }
        })   
//------------------------------------------------------------
      pwl3 = 0;//完成清空进度
    }
  } else {
    pwl3 = 0;//输错一位直接清空进度
  }
console.log("彩蛋3("+pwl3+"/"+pw3.length+")");
}

document.addEventListener('keypress', ppw);//侦听器执行函数
document.addEventListener('keypress', ppw2);//侦听器执行函数
document.addEventListener('keypress', ppw3);//侦听器执行函数