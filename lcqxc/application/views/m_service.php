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
        <a href="<?php echo base_url("index.php/Mservice");?>" class="btn btn-default active" >
            <i class="fa fa-wrench  text-primary"><b>服务</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mintroduction");?>" class="btn btn-default">
            <i class="fa fa-book  text-info"><b>简介</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mhardware");?>" class="btn btn-default">
            <i class="fa fa-cogs "><b >配套</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mcontact");?>" class="btn btn-default">
            <i class="fa fa-phone  text-warning"><b >联系</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Maddress");?>" class="btn btn-default">
            <i class="fa fa-map-marker text-danger"><b>地址</b></i>
        </a>
    </div>
</div>

<div class="bs-component">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">机修</a></li>
        <li><a href="#dianlu" data-toggle="tab">电路</a></li>
        <li><a href="#banjin" data-toggle="tab">钣金与喷漆</a></li>
        <li><a href="#baoxian" data-toggle="tab">保险</a></li>
        <li><a href="#peijian" data-toggle="tab">配件</a></li>
        <li><a href="#qita" data-toggle="tab">其他</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">机修主要</h4>
                <p class="list-group-item-text">发动机、波箱检测与维修，四轮保养，底盘悬挂检修，常规机油、三滤保养</p>
            </a>

            <img src="<?php echo base_url("ui_ref/images/jixiu.jpg"); ?>" class="img-responsive">

        </div>
        <div class="tab-pane fade" id="dianlu">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">电路主要</h4>
                <p class="list-group-item-text">发动机电子电路检测与维修，空调系统检测与维修，全车线路检测与维修，电脑编程与故障解码</p>
            </a>
        </div>

        <div class="tab-pane fade" id="banjin">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">外观主要</h4>
                <p class="list-group-item-text">事故车辆矫形，车身、车架修复，全车喷漆、局部补漆</p>
            </a>

            <img src="<?php echo base_url("ui_ref/images/banjin.jpg"); ?>" class="img-responsive">
        </div>

        <div class="tab-pane fade" id="baoxian">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">保险主要</h4>
                <p class="list-group-item-text">人保合作单位，车辆保险到期出单，车辆发生碰撞之后保险修车，代客提交资料</p>
            </a>
            <img src="<?php echo base_url("ui_ref/images/baoxian.jpg"); ?>" class="img-responsive">
        </div>

        <div class="tab-pane fade" id="peijian">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">配件服务</h4>
                <p class="list-group-item-text">代客订购配件，饰件</p>
            </a>

            <img src="<?php echo base_url("ui_ref/images/peijian.jpg"); ?>" class="img-responsive">
        </div>

        <div class="tab-pane fade" id="qita">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">其他服务</h4>
                <p class="list-group-item-text">代办汽车违章、年审、过户、车辆买卖，事故车辆外出抢修、拖车服务</p>
            </a>

            <img src="<?php echo base_url("ui_ref/images/daiban.jpg"); ?>" class="img-responsive">
        </div>
    </div>
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