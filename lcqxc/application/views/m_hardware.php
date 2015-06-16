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
                    <li><a href="#">关注微信公众号</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<div class="bs-component" style="margin-bottom: 15px;">
    <div class="btn-group btn-group-justified">
        <a href="<?php echo base_url("index.php/Mservice");?>" class="btn btn-default " >
            <i class="fa fa-wrench fa-fw fa-lg text-primary"></i><b>服务</b>
        </a>
        <a href="<?php echo base_url("index.php/Mintroduction");?>" class="btn btn-default">
            <i class="fa fa-book fa-fw fa-lg text-info"></i><b>简介</b>
        </a>
        <a href="<?php echo base_url("index.php/Mhardware");?>" class="btn btn-default active">
            <i class="fa fa-cogs fa-fw fa-lg"></i><b >配套</b>
        </a>
        <a href="<?php echo base_url("index.php/Mcontact");?>" class="btn btn-default">
            <i class="fa fa-phone fa-fw fa-lg text-warning"></i><b >联系</b>
        </a>
        <a href="<?php echo base_url("index.php/Maddress");?>" class="btn btn-default">
            <i class="fa fa-map-marker fa-fw fa-lg text-danger"></i><b>地址</b>
        </a>
    </div>
</div>


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy;<b class="mobile_font_nor">2015<a target="_blank" href="#" title="虎门乐诚汽修">虎门乐诚汽修</a>.版权所有.</b>
            </div>
            <div class="col-sm-6">
                <a href="#" class="pull-right"><b class="mobile_font_nor">技术支持jiatel@163.com</b></a>

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