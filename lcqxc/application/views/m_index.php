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
                <a class="navbar-brand" href="#">虎门乐诚汽修</a>
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
            <div class="col-lg-8 col-md-6 col-sm-6">
                <h1>虎门乐诚汽修</h1>
                <p class="lead">敬业乐群-诚信经营</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="sponsor">
                    <a href="http://www.shopify.com/?ref=bootswatch" target="_blank" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'shopify']);">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
    </div>

</div>


<div class="list-group">
    <a class="list-group-item" href="#"><i class="fa fa-wrench fa-fw fa-5x"></i>&nbsp; 汽车服务</a>
    <a class="list-group-item" href="#"><i class="fa fa-book fa-fw fa-5x"></i>&nbsp; 企业简介</a>
    <a class="list-group-item" href="#"><i class="fa fa-cogs fa-fw fa-5x"></i>&nbsp; 配套&硬件</a>
    <a class="list-group-item" href="#"><i class="fa fa-phone fa-fw fa-5x"></i>&nbsp; 联系方式</a>
    <a class="list-group-item" href="#"><i class="fa fa-map-marker fa-fw fa-5x"></i>&nbsp; 详细地址</a>
</div>



<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">虎门乐诚汽修</a>. 版权所有.
            </div>
            <div class="col-sm-6">
                <img class="pull-right" src="<?php echo base_url("ui_ref/images/shapebootstrap.png?");?>" alt="ShapeBootstrap" title="ShapeBootstrap">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 center-block" style="text-align: center">
                <a href="<?php echo base_url("index.php/ToDesktop");?>"><b ><i class="fa fa-desktop fa-lg fa-fw"></i>电脑版</b</a>

                <a href="<?php echo base_url("index.php/ToMobile");?>"><b style="color: #222"><i class="fa fa-tablet fa-lg fa-fw " ></i>移动版</b></a>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?php echo base_url("ui_ref/js/jquery.js");?>"></script>
<script src="<?php echo base_url("ui_ref/js/bootstrap.min.js");?>"></script>

</body>




</html>