<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>虎门乐诚汽修</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="keywords" content="虎门乐诚汽修">
    <meta name="description" content="虎门乐诚汽修官网">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/bootstrap.min.css");?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/font-awesome.min.css");?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/prettyPhoto.css");?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/main.css");?>">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/font-awesome_official.min.css"); ?>">
</head>


<body data-spy="scroll" data-target="#navbar" data-offset="0">
<header id="header" role="banner">
    <div class="container">
        <div id="navbar" class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                    <li><a href="#services">服务</a></li>
                    <li><a href="#portfolio">配套与设施</a></li>

<!--                    <li><a href="#pricing">价格</a></li>-->

                    <li><a href="#about-us">关于我们</a></li>
                    <li><a href="#contact">联系与地址</a></li>
                </ul>
            </div>
        </div>
    </div>
</header><!--/#header-->

<body>
<section id="main-slider" class="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <div class="container">
                <div class="carousel-content">
                    <h1>虎门乐诚汽修</h1>
                    <p class="lead">敬业乐群-诚信经营<br>
                    <p class="lead">专注服务虎门汽车行业20余载 <br>致力于为广大车友提供专业、优质、可靠的汽车服务</p>
                    营业时间：<strong class="mobile_font_nor">8:30-19:30</strong><cite title="Source Title">（国家法定节假日除外）</cite><br>
                    地址：<strong>虎门太沙路金洲段339号金捷路与太沙路交汇处</strong><cite title="Source Title">（下见详情）</cite><br>
                    电话：<strong class="mobile_font_nor">0769-85224911</strong><cite title="Source Title">（下见详情）</cite>
                    </p>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item">
            <div class="container">
                <div class="carousel-content">
                    <h3><i class="fa fa-wechat  text-success "></i>微信公众号“虎门乐诚汽车服务”</a></h3>

                    <div>
                        <img src="<?php echo base_url("ui_ref/images/qrcode.jpg"); ?>" alt="乐诚汽修" class="img-responsive center-block"  >
                        <br>
                        <div class=" center-block" >
                            <p style="text-align: center">扫描关注公众号</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.carousel-inner-->
    <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
</section><!--/#main-slider-->

<section id="services">
    <div class="container">
        <div class="box first">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="icon-wrench icon-md icon-color1"></i>
                        <h4>机修</h4>
                        <p>发动机、波箱检测与维修，四轮保养，底盘悬挂检修，常规机油、三滤保养</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa-tachometer icon-md icon-color2"></i>
                        <h4>电路</h4>
                        <p>发动机电子电路检测与维修，空调系统检测与维修，全车线路检测与维修，电脑编程与故障解码</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa-automobile icon-md icon-color3"></i>
                        <h4>钣金与喷漆</h4>
                        <p>事故车辆矫形，车身、车架修复，全车喷漆、局部补漆</p>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="fa-steam icon-md icon-color4"></i>
                        <h4>配件</h4>
                        <p>代客订购配件，饰件</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="icon-css3 icon-md icon-color5"></i>
                        <h4>车辆保险</h4>
                        <p>人保合作单位，车辆保险到期出单，车辆发生碰撞之后保险修车，代客提交资料</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <i class="icon-thumbs-up icon-md icon-color6"></i>
                        <h4>其他汽车业务</h4>
                        <p>代办汽车违章、年审、过户、车辆买卖，事故车辆外出抢修、拖车服务</p>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#services-->

<section id="portfolio">
    <div class="container">
        <div class="box">
            <div class="center gap">
                <h2>乐诚汽修</h2>
                <p class="lead">乐诚拥有专业的团队和设备<br>及时为您的爱车提供服务</p>
            </div><!--/.center-->
            <ul class="portfolio-filter">
                <li><a class="btn btn-primary active" href="#" data-filter="*">专业</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">可靠</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".html">诚信</a></li>
                <li><a class="btn btn-primary" href="#" data-filter=".wordpress">便捷</a></li>
            </ul><!--/#portfolio-filter-->
            <ul class="portfolio-items col-4">
                <li class="portfolio-item apps">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/desktop_hw1.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="免费停车&WiFi" href="<?php echo base_url("ui_ref/images/desktop_hw1.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>免费停车&WiFi</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla bootstrap">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/hardware1.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="检测设备" href="<?php echo base_url("ui_ref/images/hardware1.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>检测设备</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item bootstrap wordpress">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/hardware2.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="维修设备" href="<?php echo base_url("ui_ref/images/hardware2.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>维修设备</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla wordpress apps">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/hardware4.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="烤漆房" href="<?php echo base_url("ui_ref/images/hardware4.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>烤漆房</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla html">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/hardware3.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url("ui_ref/images/hardware3.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>检测电脑</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item wordpress html">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/hardware5.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="休息室" href="<?php echo base_url("ui_ref/images/hardware5.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>休息室</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla html">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/gate_sub.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="门面" href="<?php echo base_url("ui_ref/images/gate_sub.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>门面</h5>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla html">
                    <div class="item-inner">
                        <div class="portfolio-image">
                            <img src="<?php echo base_url("ui_ref/images/gate_night.jpg"); ?>" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-danger" title="门面2" href="<?php echo base_url("ui_ref/images/gate_night.jpg"); ?>"><i class="icon-eye-open"></i></a>
                            </div>
                        </div>
                        <h5>门面2</h5>
                    </div>
                </li><!--/.portfolio-item-->
            </ul>
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#portfolio-->

<!--<section id="pricing">-->
<!--    <div class="container">-->
<!--        <div class="box">-->
<!--            <div class="center">-->
<!--                <h2>See our Pricings</h2>-->
<!--                <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>-->
<!--            </div><!--/.center-->
<!--            <div class="big-gap"></div>-->
<!--            <div id="pricing-table" class="row">-->
<!--                <div class="col-sm-4">-->
<!--                    <ul class="plan">-->
<!--                        <li class="plan-name">Basic</li>-->
<!--                        <li class="plan-price">$29</li>-->
<!--                        <li>5GB Storage</li>-->
<!--                        <li>1GB RAM</li>-->
<!--                        <li>400GB Bandwidth</li>-->
<!--                        <li>10 Email Address</li>-->
<!--                        <li>Forum Support</li>-->
<!--                        <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>-->
<!--                    </ul>-->
<!--                </div><!--/.col-sm-4-->
<!--                <div class="col-sm-4">-->
<!--                    <ul class="plan featured">-->
<!--                        <li class="plan-name">Standard</li>-->
<!--                        <li class="plan-price">$49</li>-->
<!--                        <li>10GB Storage</li>-->
<!--                        <li>2GB RAM</li>-->
<!--                        <li>1TB Bandwidth</li>-->
<!--                        <li>100 Email Address</li>-->
<!--                        <li>Forum Support</li>-->
<!--                        <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>-->
<!--                    </ul>-->
<!--                </div><!--/.col-sm-4-->
<!--                <div class="col-sm-4">-->
<!--                    <ul class="plan">-->
<!--                        <li class="plan-name">Advanced</li>-->
<!--                        <li class="plan-price">$199</li>-->
<!--                        <li>30GB Storage</li>-->
<!--                        <li>5GB RAM</li>-->
<!--                        <li>5TB Bandwidth</li>-->
<!--                        <li>1000 Email Address</li>-->
<!--                        <li>Forum Support</li>-->
<!--                        <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>-->
<!--                    </ul>-->
<!--                </div><!--/.col-sm-4-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--/#pricing-->

<section id="about-us">
    <div class="container">
        <div class="box">
            <div class="center">
                <h2>关于乐诚</h2>

                <p class="lead">坚持优质服务，发展专业服务，秉承老字号传统<br>欢迎新老顾客咨询与光临</p>
            </div>
            <div class="gap"></div>
            <div id="team-scroller" class="carousel scale">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="member">

                                    <h3>过去
                                        <small class="designation">
                                            虎门乐诚汽修创办于<strong class="mobile_font_nor">1993</strong>年。虎门乐诚拥有今时今日的发展，全赖老顾客的鼎力支持。
                                        </small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">

                                    <h3>变迁与不变
                                        <small class="designation">
                                            从太沙路扩建到金捷路开通，再到连升南路兴建。因土地征收，乐诚也经历几次搬迁，不变的是您对乐诚的支持。
                                        </small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <h3>
                                        未来
                                        <small class="designation">
                                            乐诚将更加努力为车友提供专业、优质、可靠的汽车服务，希望能够得到您的认可。
                                        </small>

                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                    <h3>完善中...<small class="designation">Co-Founder</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team1.jpg" alt="" ></p>
                                    <h3>完善中...<small class="designation">Marketing Manager</small></h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="member">
                                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                    <h3>完善中...<small class="designation">Support Manager</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left-arrow" href="#team-scroller" data-slide="prev">
                    <i class="icon-angle-left icon-4x"></i>
                </a>
                <a class="right-arrow" href="#team-scroller" data-slide="next">
                    <i class="icon-angle-right icon-4x"></i>
                </a>
            </div><!--/.carousel-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#about-us-->

<section id="contact">
    <div class="container">
        <div class="box last">
            <div class="row">
                <div class="col-sm-6">
                    <h1>联系方式</h1>
                    <p>您可以通过以下方式联系我们</p>
                    <div class="status alert alert-success" style="display: none"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-phone-square fa-3x text-info"></i>电话：0769-85224911</a></li>
                                <li><a href="#"><i class="fa fa-envelope-square fa-3x text-warning"></i>邮箱：Zhouyu6699@live.com</li>
                                <li><a href="#"><i class="fa fa-wechat fa-2x text-success "></i>微信：搜索公众号“乐诚汽车服务”（可留言与咨询）</a></li>
                                <li><a href="#"><i class="fa fa-qq fa-2x text-danger"></i> QQ：380914183（备注“汽车业务咨询”）</a></li>
                            </ul>
                        </div>

                    </div>
                    <br>
                    <div>
                        <img src="<?php echo base_url("ui_ref/images/qrcode.jpg"); ?>" alt="乐诚汽修" class="img-responsive center-block"  >
                        <br>
                        <div class=" center-block" >
                            <p style="text-align: center">扫描关注公众号</p>
                        </div>
                    </div>
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                    <h1><i class="fa fa-paw "></i>我们的地址</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>虎门乐诚汽修</strong><br>
                                虎门镇太沙路339号（金洲段）<br>
                                （金捷路与太沙路交汇处）<br>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address>
                                <strong> 百度地图：</strong><br>
                                搜索“虎门乐诚汽修”<a href="http://map.baidu.com/?newmap=1&s=s%26wd%3D%25E4%25B8%259C%25E8%258E%259E%25E5%25B8%2582%25E8%2599%258E%25E9%2597%25A8%25E4%25B9%2590%25E8%25AF%259A%25E6%25B1%25BD%25E8%25BD%25A6%25E4%25BF%25AE%25E7%2590%2586%25E7%25AB%2599%26c%3D119%26b%3D(12654691.77%2C2590821.59%3B12657691.77%2C2593821.59)"><i class="icon-arrow-right"></i>（点击查看）</a>
                                <br>
                                全景图：<a href="http://j.map.baidu.com/QYOI3" ><i class="icon-arrow-right"></i>（点击查看）</a><br>
<!--                                <abbr title="Phone">P:</abbr> (123) 456-7890-->
                            </address>
                        </div>
                    </div>
                    <h1>详细方位</h1>
                    <img class="img-responsive" src="<?php echo base_url("ui_ref/images/location_nor.jpg"); ?>">
                    <img class="img-responsive" src="<?php echo base_url("ui_ref/images/gate.jpg"); ?>">
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#contact-->

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
                <a href="<?php echo base_url("index.php/ToDesktop");?>"><b style="color: #222"><i class="icon-desktop" ></i>&nbsp;电脑版</b</a>
                <span>|</span>
                <a href="<?php echo base_url("index.php/ToMobile");?>"><b><i class="icon-tablet  " ></i>&nbsp;转至移动版</b></a>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?php echo base_url("ui_ref/js/jquery.js");?>"></script>
<script src="<?php echo base_url("ui_ref/js/bootstrap.min.js");?>"></script>


</body>






</html>