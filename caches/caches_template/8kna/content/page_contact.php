<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" type="image/ico" href="<?php echo SKIN_PATH;?>/css/favicon.ico" />
<link href="<?php echo SKIN_PATH;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SKIN_PATH;?>/css/col.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SKIN_PATH;?>/css/sexylightbox.css" rel="stylesheet" type="text/css" />
<script src="<?php echo SKIN_PATH;?>/js/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/sexylightbox.v2.3.jquery.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/cd.js" type="text/javascript"></script>
<?php include template("content","inc_common_js"); ?>
</head>
<body>
<?php include template("content","inc_header"); ?>
    <div class="header_bom">
      <div class="header_js">
        <div class="headerjs_flash">
                <div style="position:relative;">
                        <a href="" target="_blank">
                            <img src="<?php echo SKIN_PATH;?>/images/12101120012070.jpg" width="1680" height="510" /></a>
                            <span style="display:block; width:941px; height:383px; position:absolute; top:88px; z-index:100; left:365px;"> <embed width="941" height="383" wmode="transparent" type="application/x-shockwave-flash" src="flash/contact.swf"> </span>
                            
                     </div>
                </div>

        </div>
        <div class="header_jsul png"> </div>
      </div>
    </div>
    <div class="header_address">
      <div class="hedaer_tel">
        <div class="header_telleft">
          <ul>
            <li><a href="" title="太庙1" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg1.gif" /></span>
            <img class='tel_color1' src="<?php echo SKIN_PATH;?>/images/red_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg2.gif" /></span></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg3.gif" /></span></a></li>
            <li><a href="" title="韩派实景--风情街" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg4.gif" /></span>
            <img class='tel_color4' src="<?php echo SKIN_PATH;?>/images/green_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="蓝绿配" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg5.gif" /></span>
            <img class='tel_color5' src="<?php echo SKIN_PATH;?>/images/blue_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg6.gif" /></span></a></li>
            <li><a href="" title="朝阳公园" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg7.gif" /></span>
            <img class='tel_color7' src="<?php echo SKIN_PATH;?>/images/white_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="情人" class="tel_colorblack"> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg8.gif" /></span>
            <img class='tel_color8' src="<?php echo SKIN_PATH;?>/images/black_img.jpg" width='184' height='184' /></a></li>
          </ul>
        </div>
        <div class="header_telright"> <span><b><a href="" rel="sexylightbox[group1]"

                        class="png"> <img src="<?php echo SKIN_PATH;?>/images/header_qq.png" class="png" /></a></b></span> </div>
      </div>
    </div>
  </div>
  <div class="clear"> </div>
</div>
<!--头部公用部分结束-->
<script type="text/javascript">

    $(function () {

        var href = window.location.href.split('/')[window.location.href.split('/').length - 1].substr(0, 4).toLowerCase();

        var flag=true;

        if (href.length > 0) {

            $("ul.nav li").each(function () {

                if ($(this).find("a[href*=" + href + "]").length > 0) {

                    

                    if(flag)

                    {

                         $(this).find("a").eq(0).addClass("hover");

                    }

                   

                  

                    flag=false;

                   

                }

            });

        }

    });

</script><div class="center">
  <h2 class="title"> 您现在的位置：<a href="">首页</a> &gt; <a class="hover">联系我们</a> </h2>
  <div class="con">
    <ul class="con_menu">
      <li><a href="" class="ab"></a></li>
      <li><a class="co hover2"></a></li>
      <li><a href="" class="jo"></a></li>
    </ul>
    <div class="clear"></div>
    <div class="contact"> <span style="padding-top:260px;">http://www.bjbobo.com<i>（官方网站）</i></span> <span>http://www.bjbobo.com<i>（官方微博）</i></span> <span>http://www.bjbobo.com<i>（官方网站）</i></span>
      <ul>
        <li><a href="">QQ:1579873701</a></li>
        <li><a href="">QQ:1226645264</a></li>
        <li><a href="">QQ:1196823685</a></li>
      </ul>
    </div>
    <div class="map">
    <iframe style="float:left; margin-right:12px;" id='mapbarframe' border='0' vspace='0' hspace='0' marginwidth='0' marginheight='0' framespacing='0' frameborder='0'scrolling='no' width='650' height='380' src='http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=bobosy&tid=tid1010&showSearchDiv=1&cityName=%E5%8C%97%E4%BA%AC%E5%B8%82&nid=MAPBHNZPFMZOFAYOTAHNX&width=650&height=380&infopoi=2&zoom=10&control=1'></iframe>
    
      <p><strong>公交路线； <font color="#000000">三元桥西站 三元桥东站 地铁三元桥站</font></strong> <strong>静安庄站<br></strong>经过 三元桥 的线路: 机场快轨(L1) 机场2线 特8外环 特8外环主路 特8内环主路 特8内环 特8快车外环 特8快车内环 地铁10号线(M10) 运通104线 207夜班 300外环 300快车内环 300内环 300快车外环 302快车 302路 359路 401路 403路 404路 419路 536路 614路 671路 683路 718路 731路 731区间快车 801路 915支2路 915路 915旅游专线 915支2快车 915快车 916西线 916空调 916路 916支线 918路[关上] 918路 918路[马坊] 918快车[官庄道口] 918快车 918空调 923路 934路 935路[西段] 935快车 936支线[青龙峡] 936路 936区间 936旅游专线 936支线[九谷口] 942路 954路 957快2路 967路 970路 974路 975区间 975路 980路 984区间[四惠] 984路 985路 987路 998路 9181快车 机场夜间线 <br><strong></strong></p>
      <p><strong>地铁线路：</strong>10号线三元桥站D口（凤凰城）</p>
      <p><strong>服务时间：<br></strong>9：00 AM - 7：00 PM（节假日不休）</p>
    </div>
  </div>
</div>
<!--主体部分内容结束-->
<!--foot-->


<script type="text/javascript">
$(function(){ 
$(window).scroll(function(){ goTop();});
});
function goTop(){ 
$("h7").stop().animate({ "top":$(window).height()+$(window).scrollTop()-200},1000);
}
</script>

<h7><a rel="sexylightbox" class="clearfix " href="" target="_blank"><img src="<?php echo SKIN_PATH;?>/images/bgqq.png" class="png" /></a></h7>
<div style="clear:both;"></div>
<div class="bottom">
<div class="bt">
<h2> <img src="<?php echo SKIN_PATH;?>/images/bg1.gif" /></h2>
<div  style="padding-bottom:10px;">
<div  class="bt-left">
<a href=''>朝阳区婚纱摄影告诉您胖新娘怎么拍照好看？</a>
<a href=''>年终尾牙燕舞新春，活动尾声不容错过！！</a>
<a href=''>【BOBO摄影】冬天来了，完美新娘必知</a>
<a href=''>【BOBO摄影】拍婚纱照注意事项</a>
<a href=''>【【最新优惠活动.】】</a>
<a href=''>【朝阳区婚纱摄影】BOBO摄影</a>
<a href=''>『BOBO摄影影棚秉承』最原汁原味韩风派</a>
<a href=''>『BOBO摄影』从拍摄风格选择婚礼跟拍摄.....</a>
<a href=''>『BOBO摄影』让新娘时刻保持胸前完美身材四大秘诀</a>
</div>
</div>
<h3 style="padding-bottom:10px;"> <a href=""></a> </h3>
</div>
</div>

<div class="foot_top">
<div class="footer_top">
<dl>
<dt><a href="">service 服务报价</a></dt>
<dd> <a href="">WEDDING PACKAGES 婚纱套系 </a> </dd>
<dd> <a href="">PHOTO PAKEAGES 写真套系</a> </dd>
<dd> <a href="">COMMERCIAL PACKAGES 商业套系</a> </dd>
</dl>
<dl>
<dt><a href="">showcase 作品展示</a></dt>
 <dd><a href=''>Latest works 最新作品</a></dd> <dd><a href=''>Wedding 婚纱摄影</a></dd> <dd><a href=''>Fashion 时尚写真</a></dd> <dd><a href=''>Commercial 商业摄影</a></dd></dl>
<dl>
<dt><a href="">who's BOBO摄影</a></dt>
<dd> <a href="">ABOUT 关于BOBO </a></dd>
<dd> <a href="">CONTACT us 联系我们</a></dd>
<dd> <a href="">JOIN US加入我们</a></dd>
</dl>
<dl>
<dt><a href="">bobo摄影</a></dt>
<dd><a href="">HOME 首页</a></dd>
</dl>
<div class="clear"> </div>
</div>
<div class="footer_top">
<dl>
<dt><a href="">BRAUTY论坛</a></dt>
<dd> <a href=""> BBS BOBO论坛</a></dd>
<dd> <a href=""> T'SINA新浪微博</a> </dd>
</dl>
<dl>
<dt><a href="">locaiton 外景地</a></dt>
<dd> <a href="">INDOOR AREA 市内景区</a> </dd>
<dd> <a href="">SUBURBAN AREA 远郊景区</a> </dd>
<dd> <a href="">NEIGHBORING AREA 近邻景区</a> </dd>
</dl>
<dl>
<dt><a href="">NEWS 新闻</a></dt>
<dd> <a href="">NEWS ACTIVITIES 新闻活动</a> </dd>
<dd> <a href="">WEDDING TIPS 结婚课堂</a> </dd>
<dd> <a href="">SHOOTING TIPES 新人课堂</a> </dd>
<dd> <a href="">FORUM 论坛热帖</a> </dd>
<dd> <a href="">SERVICE TIPS 服务小贴士</a> </dd>
</dl>
<div class="clear"> </div>
</div>
</div>
<div class="foot_bom">
<div class="footer_bom">
<h2> <a href=""> <img src="<?php echo SKIN_PATH;?>/images/footer_logo.gif" /></a></h2>
<span> <small> copyright©2010 北京最好的婚纱摄影工作室 版权所有，技术支持：<a href="" style="color:#FFCC00; text-decoration:none;" target="_blank">魔方网络</a> 影楼网站建设  Copyright © 2010 Beijing's best wedding photography studio,SUPPORT BY imfwed ad-agency CO.,Ltd. </small> 
</span>
<div class="clear"> </div>
<em>友情链接（QQ:2387764548）： <a href="" target="_blank">济南婚纱摄影</a> <a href="" target="_blank">唐山婚纱摄影</a> <a href="" target="_blank">北京孕妇照</a> <a href="" target="_blank">深圳婚纱摄影</a> <a href="" target="_blank">北京天成文化衫印刷网</a> <a href="" target="_blank">重庆婚纱摄影</a> <a href="" target="_blank">满成盈时尚网</a> <a href="" target="_blank">北京婚纱摄影</a> <a href="" target="_blank">杭州婚纱照</a> </em> </div>
</div>
<!-- footer end -->
<div class="position">
<div class="position_nav"> <span><a href="" rel="sexylightbox" class="png"><img src="<?php echo SKIN_PATH;?>/images/position_qq.png" class="png" /></a></span> <samp> <b><em>400 814 8080</em><em>010-84406866</em>
<div class="clear"></div>
</b> <i>if you have any question, please contact us</i> </samp> </div>
</div>

</body>
</html>
