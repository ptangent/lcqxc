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
            <i class="fa fa-wrench  text-primary"><b>服务</b></i>
        </a>
        <a href="<?php echo base_url("index.php/Mintroduction");?>" class="btn btn-default active">
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
    <div class="list-group">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">过去</h4>
            <p class="list-group-item-text">
                虎门乐诚汽修创办于<strong class="mobile_font_nor">1993</strong>年，至今已经服务虎门汽车行业20余载。乐诚拥有今时今日的发展，全赖老顾客的鼎力支持。<br>
            </p>

        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">变迁与不变</h4>
            <p class="list-group-item-text">
                20年来，从太沙路扩建到金捷路开通，再到连升南路兴建，由于土地征收，乐诚也经历几次搬迁与升级（一直在太沙路)，但唯一不变的是乐诚与虎门车友们的联系。<br>

            </p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">未来</h4>
            <p class="list-group-item-text">
                经过多年的经验与沉淀，乐诚也形成成熟的服务体系，将更加致力于为车友提供专业、优质、可靠的汽车服务，希望乐诚能够再次得到您的认可。<br>
               --欢迎新老顾客咨询与光临<i class="fa fa-thumbs-o-up"></i><br>
                <img src="<?php echo base_url("ui_ref/images/gate_sub.jpg"); ?>" class="img-responsive">
            </p>
        </a>

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