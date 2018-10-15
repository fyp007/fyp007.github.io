<?php
	session_start();
    $ReJson = $_SESSION['SaveJsonDemo'];
    //读取Session
    $ReadLoginS=json_decode($ReJson);
    //解析JSON
    $Dname = $ReadLoginS->Sname;
    //解析名字
    $Dmail = $ReadLoginS->Smail;
    //解析邮箱
    $Dsid = $ReadLoginS->Ssid;
    //解析Sid
    $Ddata = $ReadLoginS->Sdata;
    //解析注册时间
?>

<!DOCTYPE html>

<html lang="ch" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="baidu-site-verification" content="Va1WFM6qQK" />
    <meta charset="utf-8" />
    <title>水果文档|欢迎您使用超简洁可爱的水果文档哦~</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
	<center>
    <img src="icon.png" alt="LOGO ICON">
    <h1>欢迎您使用又简洁，又可爱的水果文档！:D</h1>
	<font size="1" face="arial" color="green">Formal-1.6+P</font><br>
    <span><strong>注册或者登录可以获得更好的服务效果呢！</strong></span><br>
  	<?php if ($Dname == ""){echo '<a class="btn btn-medium btn-red btn-radius" id="Login">点我登录</button><a class="btn btn-medium btn-red btn-radius" id="Reg">点我注册</button>';}else{echo '<h3>'.$Dname.',您已登录,您可以:</h3><a class="btn btn-medium btn-gray btn-radius" id="LoginOut">登出</button>';}?>
	<a class="btn btn-medium btn-blue btn-radius" href="PublicUpload.php">前往公共上传区</a>
	<a class="btn btn-medium btn-orange  btn-radius" href="BoradCast.html">公告</a>
	<a class="btn btn-medium btn-green btn-radius" href="FriendLinks.html">友链了解一下咩?</a>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $("#Login").click(function () {
            $.post("api.php", {
                type: "login", //这里填调用的类型 [注册填: reg 登录填: login]
                Mname: "HandsomeSheep", //这里填你的在LOF的用户名 #1
                MSid: "9l244455q35n8HPa3Wk9CMDl685A9mdp6K", //这里填写系统提供的Sid  #2
                Plist: 1
            },
                function (a) {
                    var Tr = "https://lof.lf112.net/core/RuMe.php?json=" + a;
                    window.location.href = Tr;
                });
        });

        $("#Reg").click(function () {
            $.post("api.php", {
                type: "reg", //这里填调用的类型 [注册填: reg 登录填: login]
                Mname: "HandsomeSheep", //这里填你的在LOF的用户名  #4
                MSid: "9l244455q35n8HPa3Wk9CMDl685A9mdp6K", //这里填写系统提供的Sid   #3
                Plist: 1 //这里默认1即可
            },
                function (a) {
                    var Tr = "https://lof.lf112.net/core/RuMe.php?json=" + a;
                    window.location.href = Tr;
                });
        });
      	$("#LoginOut").click(function () {
            $.post("api.php", {
                type: "loginout"
            },
                function (a) {
                    alert(a);
              		location.reload(true);
                });
        });
    </script>
        <br>
        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=389 height=86 src="//music.163.com/outchain/player?type=2&id=514774419&auto=1&height=66"></iframe>
    <address>
        <br>
		Copyright &copy; 2018-Forever <a href="https://cutesheep.lfio.net/">CuteSheep</a> All Right resevered.<br>
    </address>
	</center>
</body>
</html>
