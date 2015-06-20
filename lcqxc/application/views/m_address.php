<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>虎门乐诚汽修</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/bootstrap_mobile.min.css"); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/font-awesome_official.min.css"); ?>">

</head>

<body>


<div class="bs-component">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url("index.php/ToMobile"); ?>" class="navbar-brand" href="#"><i class="fa fa-home fa-fw "></i>返回首页</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <!--                <ul class="nav navbar-nav">-->
                <!--                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <!--                    <li><a href="#">Link</a></li>-->
                <!---->
                <!--                </ul>-->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url("index.php/ToMobile#qrcode"); ?>">关注微信公众号</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<div class="bs-component" style="margin-bottom: 15px;">
    <div class="btn-group btn-group-justified">
        <a href="<?php echo base_url("index.php/Mservice");?>" class="btn btn-default " >
            <i class="fa fa-wrench text-primary"><b>服务</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mintroduction");?>" class="btn btn-default">
            <i class="fa fa-book text-info"><b>简介</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mhardware");?>" class="btn btn-default">
            <i class="fa fa-cogs "><b>配套</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mcontact");?>" class="btn btn-default">
            <i class="fa fa-phone text-warning"><b>联系</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Maddress");?>" class="btn btn-default active">
            <i class="fa fa-map-marker  text-danger"><b>地址</b></i>
        </a>
    </div>
</div>

<div class="bs-component">
    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge"><i class="fa fa-paw"></i></span>
            <b class="mobile_font_nor">
               百度地图：搜索“虎门乐诚汽修”<a href="http://map.baidu.com/?newmap=1&s=s%26wd%3D%25E4%25B8%259C%25E8%258E%259E%25E5%25B8%2582%25E8%2599%258E%25E9%2597%25A8%25E4%25B9%2590%25E8%25AF%259A%25E6%25B1%25BD%25E8%25BD%25A6%25E4%25BF%25AE%25E7%2590%2586%25E7%25AB%2599%26c%3D119%26b%3D(12654691.77%2C2590821.59%3B12657691.77%2C2593821.59)">（点击查看）</a>
            </b>
        </li>
        <li class="list-group-item">
            <span class="badge"><i class="fa fa-file-photo-o"></i></span>
            <b class="mobile_font_nor">
                全景图：<a href="http://j.map.baidu.com/QYOI3" >点击查看</a>（尽量在WiFi下）
            </b>
        </li>
        <li class="list-group-item">
            <span class="badge"><i class="fa fa-location-arrow"></i></span>
            <b class="mobile_font_nor">
                详细方位：虎门镇太沙路339号金洲段，太沙路与金捷路交汇红绿灯处，靠近角苏村虎门大桥高速桥底
            </b>
            <img class="img-responsive" src="<?php echo base_url("ui_ref/images/location_zip.jpg"); ?>">
            <img class="img-responsive" src="<?php echo base_url("ui_ref/images/gate_zip.jpg"); ?>">
        </li>
    </ul>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                &copy;<b class="mobile_font_nor">2015<a target="_blank" href="#" title="虎门乐诚汽修">虎门乐诚汽修</a>.版权所有.</b>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block" style="text-align: center">
                <a href="<?php echo base_url("index.php/ToDesktop"); ?>"><b><i class="fa fa-desktop fa-lg fa-fw"></i>转至电脑版</b></a>

                <a href="<?php echo base_url("index.php/ToMobile"); ?>"><b style="color: #222"><i
                            class="fa fa-tablet fa-lg fa-fw "></i>移动版</b></a>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script src="<?php echo base_url("ui_ref/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("ui_ref/js/bootstrap.min.js"); ?>"></script>

</body>


</html>