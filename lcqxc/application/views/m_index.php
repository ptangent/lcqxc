<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>虎门乐诚汽修</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/bootstrap_mobile.min.css");?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/font-awesome_official.min.css");?>">

</head>

<body>


<div class="bs-component">
    <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">虎门乐诚汽车服务</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
<!--                <ul class="nav navbar-nav">-->
<!--                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
<!--                    <li><a href="#">Link</a></li>-->
<!---->
<!--                </ul>-->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#qrcode">关注微信公众号</a></li>
                </ul>
            </div>
        </div>
    </nav>


</div>

<div class="container">
    <div class="page-header" id="banner" style="margin: 50px 0 0 0;padding-bottom: 0">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 center-block">

                <h3>虎门乐诚 <i class="fa fa-automobile fa-fw  text-primary"></i></h3>

                <p class="lead">敬业乐群-诚信经营<br>
                    为您提供专业、可靠的汽车服务
                </p>

            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="bs-component">
            <blockquote>
                <small>营业时间：<strong class="mobile_font_nor">8:30-19:30</strong> <cite title="Source Title">（国家法定节假日除外）</cite></small>
                <small>地址：<strong class="mobile_font_nor">虎门太沙路金洲段339号金捷路与太沙路交汇处</strong><cite title="Source Title">（详见下方）</cite></small>
                <small>电话：<strong class="mobile_font_nor">0769-85224911</strong><cite title="Source Title">（详见下方）</cite></small>
            </blockquote>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
    </div>

</div>


<div class="list-group">
    <a class="list-group-item" href="<?php echo base_url("index.php/Mservice");?>"><i class="fa fa-wrench fa-fw fa-5x text-primary"></i>&nbsp;&nbsp;<b class="mobile_big_text">服务介绍</b> </a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mintroduction");?>"><i class="fa fa-book fa-fw fa-5x text-info"></i>&nbsp; &nbsp;<b class="mobile_big_text">企业简介</b></a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mhardware");?>"><i class="fa fa-cogs fa-fw fa-5x"></i>&nbsp; &nbsp;<b class="mobile_big_text">相关配套</b></a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mcontact");?>">
        <i class="fa fa-phone fa-fw fa-5x text-warning"></i>&nbsp; &nbsp;<b class="mobile_big_text">联系方式</b>
    </a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Maddress");?>">
        <i class="fa fa-map-marker fa-fw fa-5x text-danger"></i>&nbsp; &nbsp;<b class="mobile_big_text">详细地址</b>
    </a>

    <a class="list-group-item" href="<?php echo base_url("index.php/Mnews");?>">
        <i class="fa fa-rss fa-fw fa-5x "></i>&nbsp; &nbsp;<b class="mobile_big_text">公众号文章</b>
    </a>
</div>

<section id="qrcode">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="sponsor">
                <a href="#"   >
                    <img src="<?php echo base_url("ui_ref/images/qrcode_finger.jpg"); ?>" alt="乐诚汽修" class="img-responsive center-block"  >
                </a>
            </div>
        </div>
        <div class=" center-block" >
            <p style="text-align: center">长按图片识别，或搜索公众号“虎门乐诚汽车服务”</p>
        </div>

    </div>
</section>



<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 <a target="_blank" href="#" title="虎门乐诚汽修">虎门乐诚汽修</a>.版权所有.
            </div>
            <div class="col-sm-6">
                <a href="#" class="center-block" style="text-align: center">技术支持jiatel@163.com</a>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block" style="text-align: center">
                <a href="<?php echo base_url("index.php/ToDesktop");?>"><b ><i class="fa fa-desktop fa-lg fa-fw"></i>转至电脑版</b></a>

                <a href="<?php echo base_url("index.php/ToMobile");?>"><b style="color: #222"><i class="fa fa-tablet fa-lg fa-fw " ></i>移动版</b></a>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?php echo base_url("ui_ref/js/jquery.js");?>"></script>
<script src="<?php echo base_url("ui_ref/js/bootstrap.min.js");?>"></script>


<script language="JavaScript"><!--
    function getCookieVal(offset)
    {var endstr=document.cookie.indexOf(";",offset);if(endstr==-1)
        endstr=document.cookie.length;return unescape(document.cookie.substring(offset,endstr));}function GetCookie(name)
    {var arg=name+"=";var alen=arg.length;var clen=document.cookie.length;var i=0;while(i<clen)
    {var j=i+alen;if(document.cookie.substring(i,j)==arg)
        return getCookieVal(j);i=document.cookie.indexOf(" ",i)+1;if(i==0)
        break;
    }return null;}function SetCookie(name,value)
    {var argv=SetCookie.arguments;var argc=SetCookie.arguments.length;var expires=(2<argc)?argv[2]:null;var path=(3<argc)?argv[3]:null;var domain=(4<argc)?argv[4]:null;var secure=(5<argc)?argv[5]:false;document.cookie=name+"="+escape(value)+((expires==null)?"":("; expires="+expires.toGMTString()))+((path==null)?"":("; path="+path))+((domain==null)?"":("; domain="+domain))+((secure==true)?"; secure":"");}function ResetCounts(name)
    {visits=0;SetCookie("visits",visits,expdate,"/",null,false);location.reload();}
    //-->
</script>

</body>




</html>