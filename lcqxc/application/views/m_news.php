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
                <a href="<?php echo base_url("index.php/ToMobile"); ?>" class="navbar-brand" ><i class="fa fa-home fa-fw "></i>返回首页</a>
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
        <a href="<?php echo base_url("index.php/Maddress");?>" class="btn btn-default">
            <i class="fa fa-map-marker  text-danger"><b>地址</b></i>
        </a>
    </div>
</div>

<div class="bs-component">


    <ul class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/ToMobile"); ?>">首页</a></li>
        <li class="active">公众号文章列表</li>
    </ul>


</div>




<div class="bs-component">
    <div class="list-group">
    <?php foreach ($news as $news_item): ?>
        <li class="list-group-item">
            <span class="badge"><?php echo $news_item['time'] ?></span>
            <span class="label label-success"><?php echo $news_item['id'] ?></span>&nbsp;
            作者:<?php echo $news_item['author'] ?>&nbsp;
            阅读:<?php echo $news_item['count'] ?>
        </li>
        <a href="<?php echo base_url().'index.php/Mnewsdetail/index/'. $news_item['id'] ?>" class="list-group-item">
            <h4 class="list-group-item-heading"><?php echo $news_item['title'] ?></h4>
            <p class="list-group-item-text">
                <?php
                    if(strlen($news_item['summary'])>2){
                        echo $news_item['summary'];
                    }else{
                        //strip_tags(
                        echo  mb_strcut($news_item['content'],0,100)."&hellip;";
                    }
                ?>
            </p>
        </a>


    <?php endforeach ?>
    </div>
</div>



<div class="bs-component">
<ul class="pagination pagination-lg " style="margin-left: 5px;">
<!--    <li class="disabled"><a href="#">«</a></li>-->
<!--    <li class="active"><a href="#">1</a></li>-->
<!--    <li><a href="#">2</a></li>-->
<!--    <li><a href="#">»</a></li>-->
    <?php echo $this->pagination->create_links(); ?>
</ul>
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