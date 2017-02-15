<!DOCTYPE HTML>
<html>
<head>
    <title>Coach</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="landscape">
    <!-- QQ强制竖屏 -->
    <meta name="x5-orientation" content="landscape">

    <!--禁用手机号码链接(for iPhone)-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimum-scale=1.0,maximum-scale=1.0,minimal-ui" />
    <!--自适应设备宽度-->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--控制全屏时顶部状态栏的外，默认白色-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="Keywords" content="">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="/build/assets/css/main.min.css?v=aad245b242">
    <script type="text/javascript" src="http://coach.samesamechina.com/api/v1/js/75058010-0fe1-476a-88f8-f96ffab561c8/wechat"></script>

</head>
<body>
<div class="loading">
    <div class="loading_con">
        <img src="/build/assets/img/logo.png?v=b7ab1cb4bc" width="100%">

        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <p>目前涌入的小伙伴过多<br>页面正在跳转中，请耐心等待。</p>
    </div>
</div>

<!-- 横屏代码 -->
<div id="orientLayer" class="mod-orient-layer">
    <div class="mod-orient-layer__content">
        <i class="icon mod-orient-layer__icon-orient"></i>
        <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
    </div>
</div>

<div id="dreambox">

    <div class="section show transition" id="commingsoon">
        <img src="" sourcesrc="/build/assets/img/commingsoon.png?v=a6c509f755" width="100%" class="logo">
    </div>

</div>

<script type="text/javascript" src="/build/assets/js/main.min.js?v=a2d3cd3d8e"></script>
<script type="text/javascript">
    var allimg = [
        "/build/assets/img/logo.png?v=b7ab1cb4bc",
        "/build/assets/img/bg.jpg?v=6396e8f1d2",
        "/build/assets/img/commingsoon.png?v=a6c509f755",
    ];

    pfun.loadingFnDoing(allimg, function(){
        $(".loading").css({"visibility": "hidden"});
        pfun.init();
    })
</script>

</body>
</html>