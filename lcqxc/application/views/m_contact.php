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
            <i class="fa fa-wrench  text-primary"><b>服务</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mintroduction");?>" class="btn btn-default">
            <i class="fa fa-book  text-info"><b>简介</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mhardware");?>" class="btn btn-default">
            <i class="fa fa-cogs "><b >配套</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mcontact");?>" class="btn btn-default active">
            <i class="fa fa-phone  text-warning"><b >联系</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Maddress");?>" class="btn btn-default">
            <i class="fa fa-map-marker  text-danger"><b>地址</b></i>
        </a>
    </div>
</div>

<div class="bs-component">
    <ul class="list-group">
        <li class="list-group-item">
            <span class="badge"><i class="fa fa-phone-square"></i></span>
            <b class="mobile_font_nor">
                电话：0769-85224911
            </b>
        </li>
        <li class="list-group-item">
            <span class="badge"><i class="fa fa-envelope-square"></i></span>
            <b class="mobile_font_nor">
              邮箱：Zhouyu6699@live.com
            </b>
        </li>

        <li class="list-group-item">
            <span class="badge"><i class="fa fa-qq"></i></span>
            <b class="mobile_font_nor">
                QQ：380914183（备注“汽车业务咨询”）
            </b>
        </li>

        <li class="list-group-item">
            <span class="badge"><i class="fa fa-wechat"></i></span>
            <b class="mobile_font_nor">
                微信公众号：搜索“虎门乐诚汽车服务”（可留言与咨询）
            </b>
        </li>

        <li class="list-group-item">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="sponsor">
                    <a href="#"    >
                        <img src="<?php echo base_url("ui_ref/images/qrcode.jpg"); ?>" alt="乐诚汽修" class="img-responsive center-block"  >
                    </a>
                </div>
            </div>
            <div class=" center-block" >
                <p style="text-align: center">长按图片识别，或搜索公众号“虎门乐诚汽车服务”</p>
            </div>
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