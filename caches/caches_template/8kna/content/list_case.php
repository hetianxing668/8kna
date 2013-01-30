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
                        <a href=""_blank">
                            <img src="<?php echo SKIN_PATH;?>/images/120927153602255.jpg" width="1680" height="510" /></a>
                            <span style="display:block; width:941px; height:383px; position:absolute; top:88px; z-index:100; left:365px;"> <embed width="941" height="383" wmode="transparent" type="application/x-shockwave-flash" src=""> </span>
                            
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

</script><!--主体部分内容结束-->
<div class="center" style="width:900px;">
<h2 class="title"> 您现在的位置：<a href="">首页</a> &gt <a class="hover">BOBO客片大赏</a> </h2>
<div class="show_list">
<h3 class="title"> 客片大赏</h3>
<div class="notice">
<p>尊贵的客户，您好！欢迎进入BOBO摄影高端婚纱摄影客户服务中心！这里将为您展示新人的幸福瞬间。与此同时，BOBO摄影将最美好的祝福送给每对新人。</p>
<p>BOBO摄影高端婚纱摄影客户咨询热线：<strong>400-814-8080  010-84406866</strong> 欢迎广大追求美的新人来店参观，BOBO摄影将带领您看到不一样的北京。</p>
<p><a href="" target="_blank">了解BOBO摄影，从这里开始</a> | <a href="" target="_blank">BOBO摄影常见问题解答</a> | <a href="" target="_blank">服务须知：拍摄当天</a> | <a href="" target="_blank">服务须知：拍摄前准备 </a> | <a href="" target="_blank">高端定制服务服务流程</a> | <a href="" target="_blank">高端定制服务服务说明 </a></p>
<p><strong>郑重声明：</strong>BOBO摄影高端客户服务频道所展示的作品均来自真实客人定制照片，并经由客户本人同意在BOBO摄影唯一官方网站<a href="">http://www.bjbobo.com/</a>进行发表。</p>
<p>未经允许不得转载或用于任何商业用途，违者必究！</p>
<p style="font-size:10px; line-height:12px;">BoBo high-end customer service channels works on display are from real customers custom photos, and I agree by the customer's official website www.bjbobo.com bobo be published. Shall not be reproduced without permission or used for any commercial purposes, rights reserved! </p>
</div>
<ul class="ashowcaseList clearfix">
<li> <a href="" title="徐悦夫妇---太庙" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220180109720.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.1</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">徐悦夫妇---太庙</dd>
</dl>
</a>
</li>
<li> <a href="" title="周辰夫妇----朝阳公园" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220173316269.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.2</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">周辰夫妇----朝阳公园</dd>
</dl>
</a>
</li>
<li> <a href="" title="王佳斌夫妇--云阳仙境" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220164631430.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.3</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">王佳斌夫妇--云阳仙境</dd>
</dl>
</a>
</li>
<li> <a href="" title="于研夫妇- 太庙+花海" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220150204774.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.4</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">于研夫妇- 太庙+花海</dd>
</dl>
</a>
</li>
<li> <a href="" title="于萍萍夫妇- 爱斐堡" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220150713949.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.5</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">于萍萍夫妇- 爱斐堡</dd>
</dl>
</a>
</li>
<li> <a href="" title="付宏伟夫妇--怀柔普罗旺斯" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220145455738.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.6</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">付宏伟夫妇--怀柔普罗旺斯</dd>
</dl>
</a>
</li>
<li> <a href="" title="杨阳夫妇-朝阳+怀柔" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220135625528.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.7</dt>
<dd class="aShowcaseTime">POST TIME：2012/12/20</dd>
<dd class="aShowcaseTit">杨阳夫妇-朝阳+怀柔</dd>
</dl>
</a>
</li>
<li> <a href="" title="唐丽珍夫妇朝阳公园+798" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220135701881.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.8</dt>
<dd class="aShowcaseTime">POST TIME：2012/10/10</dd>
<dd class="aShowcaseTit">唐丽珍夫妇朝阳公园+798</dd>
</dl>
</a>
</li>
<li> <a href="" title="吕蒙夫妇" target="_blank"> <img src="<?php echo SKIN_PATH;?>/images/121220140035791.jpg" width="290" height="425" />
<dl>
<dt>BOBO SHOWCASE.9</dt>
<dd class="aShowcaseTime">POST TIME：2012/08/10</dd>
<dd class="aShowcaseTit">吕蒙夫妇</dd>
</dl>
</a>
</li>
<div style="clear:both;"></div>
</ul>
<div style="clear:both;"></div>
<dl class="page clearfix">
<dd><a href=''><img src='<?php echo SKIN_PATH;?>/images/icon.gif' /></a></dd><dd> <a href='' class='hover'>1</a> </dd><dd> <a href='' class=''>2</a> </dd><dd><a href=''><img src='<?php echo SKIN_PATH;?>/images/icon1.gif' /></a></dd>
</dl>
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
