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
    <nav class="navbar navbar-inverse">
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
                    <li><a href="#">关注微信公众号</a></li>
                </ul>
            </div>
        </div>
    </nav>


</div>

<div class="container">
    <div class="page-header" id="banner" style="margin: 0px 0 22px;">
        <div class="row">
            <div class="col-lg-10 col-md-6 col-sm-6">
                <h1>虎门乐诚</h1>
                <p class="lead">敬业乐群-诚信经营</p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 ">
                <div class="sponsor">
                    <a href="http://www.shopify.com/?ref=bootswatch" class="pull-right" target="_blank" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'shopify']);">
                        <img src="../assets/img/shopify.png" alt="Shopify" width="180" height="150" onload="_gaq.push(['_trackEvent', 'banner', 'impression', 'shopify']);">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="bs-component">
            <blockquote>
                <p>虎门乐诚汽修创办于<strong class="mobile_font_nor">1993</strong>年，专注服务于虎门汽车行业20余载，一直致力于为群众提供专业、优质、可靠的汽车服务。欢迎新老顾客咨询与光临.</p>
                <small>营业时间：<strong class="mobile_font_nor">8:30-19:30</strong> <cite title="Source Title">（国家法定节假日除外）</cite></small>
                <small>地址：<strong>虎门太沙路金洲段金捷路与太沙路交汇处</strong><cite title="Source Title">（下方查看详情）</cite></small>
                <small>电话：<strong class="mobile_font_nor">0769-85224911</strong><cite title="Source Title">（下方查看详情）</cite></small>
            </blockquote>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
    </div>

</div>


<div class="list-group">
    <a class="list-group-item" href="<?php echo base_url("index.php/Mservice");?>"><i class="fa fa-wrench fa-fw fa-5x text-primary"></i>&nbsp;&nbsp;<b class="mobile_big_text">服务介绍</b> </a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mintroduction");?>"><i class="fa fa-book fa-fw fa-5x text-info"></i>&nbsp; &nbsp;<b class="mobile_big_text">企业简介</b></a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mhardware");?>"><i class="fa fa-cogs fa-fw fa-5x"></i>&nbsp; &nbsp;<b class="mobile_big_text">配套&硬件</b></a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Mcontact");?>">
        <i class="fa fa-phone fa-fw fa-5x text-warning"></i>&nbsp; &nbsp;<b class="mobile_big_text">联系方式</b>
    </a>
    <a class="list-group-item" href="<?php echo base_url("index.php/Maddress");?>">
        <i class="fa fa-map-marker fa-fw fa-5x text-danger"></i>&nbsp; &nbsp;<b class="mobile_big_text">详细地址</b>
    </a>
</div>



<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">虎门乐诚汽修</a>. 版权所有.
            </div>
            <div class="col-sm-6">
                <a href="#" class="pull-right">技术支持jiatel@163.com</a>

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

</body>




</html>