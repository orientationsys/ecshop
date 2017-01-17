<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:53:"D:/xampp/htdocs/new_ecshop/themes/default/article.dwt";i:1;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_header.lbi";i:2;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/ur_here.lbi";i:3;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/cart.lbi";i:4;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/category_tree.lbi";i:5;s:75:"D:/xampp/htdocs/new_ecshop/themes/default/library/article_category_tree.lbi";i:6;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/filter_attr.lbi";i:7;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/price_grade.lbi";i:8;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/goods_related.lbi";i:9;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/history.lbi";i:10;s:62:"D:/xampp/htdocs/new_ecshop/themes/default/library/comments.lbi";i:11;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/help.lbi";i:12;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1484555728;s:8:"maketime";i:1484552128;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block clearfix">
 <div class="f_l"><a href="index.php" name="top"><img src="themes/default/images/logo.gif" /></a></div>
 <div class="f_r log">
   <ul>
   <li class="userInfo">
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
   </li>
      </ul>
 </div>
</div>
<div  class="blank"></div>
<div id="mainNav" class="clearfix">
  <a href="index.php">首页<span></span></a>
  </div>
<div id="search"  class="clearfix">
  <div class="keys f_l">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
      </div>
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
   <select name="category" id="category" class="B_input">
      <option value="0">所有分类</option>
          </select>
   <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:110px;"/>
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
   <a href="search.php?act=advanced_search">高级搜索</a>
   </form>
</div>
<div class="block box">
 <div id="ur_here">
  当前位置:  </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
<div class="cart" id="ECS_CARTINFO">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
<div class="blank5"></div>
<div class="box">
 <div class="box_1">
  <div id="category_tree">
     
  </div>
 </div>
</div>
<div class="blank5"></div>
   
    
    <div class="box" id='history_div'>
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div style="border:4px solid #fcf8f7; background-color:#fff; padding:20px 15px;">
         <d   iv class="tc" style="padding:8px;">
         <font class="f5 f6">上环价格</font><br />
         
         <!-- <font class="f3"> / </font> -->
         </div>
                   <div class="stk-post stk-layout_nocol stk-theme_1445"><h1>上环价格</h1>
<p><b>【导读】</b>产后终于大解放了，可是妈妈们千万别忘记避孕哦。上环是产后常见的避孕方式之一，很多妈妈们都会选择这种方式。那么，上环手术需要花多少钱？其实，上环的价格是因医院的不同而有所差异的。并且，在医院上环的选择比较多，妈妈们可以自行选择。医院上环的价格从数十元到上百元甚至上千元都有，可以根据自身的情况和医生的建议进行选择哦。 <img src="../../../storage/images/content/582a7565e45fb.jpg">上环价格</p>
<p>做上环手术前，大家必须知道的一个问题，那就是上环价格！毕竟是一个小手术，在医院做上环手术会不会收取很多费用呢？这些都是上环前女性非常关注的，下面我们就一起来看看吧。</p>
<p>一般来说，上环价格在100-500元左右，但是实际的价格要看各地的医院收费，加上每一项的检查都不同。</p>
<p>例如：</p>
<p>1、上环前的检查费。年轻的女性在做上环手术之前要进行术前检查，包括B超、白带常规等检查，这些费用大概在100元左右。</p>
<p>2、上环手术费。它主要由患者选择的上环手术方式来决定的。专家表示，无痛上环的价格比普通上环的价格要高。</p>
<p>3、上环后的消炎费用。这部分的价格通常并不高，一般在几十元左右。</p>
<p>一般来讲，上环的费用根据环的类型而定，一般从几十到几百不等。上环的费用大约包括术前检查费，手术费，材料费等等。根据各地区价位不同，以及涉及到术后用药的问题。具体的价格没有办法计算。</p>
<p>上环后出血</p>
<p>上环是一种简单方便的避孕节育措施，上环就是通过在子宫腔内放置节育器而起到避孕的效果。上环后很多女性都表示会有出血的现象，那么这种出血是正常的吗？需要吃药来止血吗？</p>
<p>上环后出血属于一种正常的现象，但出血量是很少的，一般出血的时间是2-3天，最长也就1个星期。但是如果出血过久，就要到医院进行检查了。</p>
<p>要是上环后连续出血3个月都没有好转的话，考虑是节育环不适合自己，应到医院进行检查更换另一种节育器或避孕方法，同时在进行检查后排除其他原因。</p>
<p>如果出现出血，要注意休息好并且适量服用一些药物，多吃含有铁质的食物，例如核桃、花生、猪肝等，因为出血会导致铁的流失。</p>
<p>上环后注意事项</p>
<p>上环虽然是个小手术，但是很多女性在上环后都会出现少量的阴道出血，所以在上环后应卧床静养2-3天，有一些生活上的注意事项，上环后女性必须看！</p>
<p>上环后你要注意什么？</p>
<p>1、术后半月内禁止盆浴和房事生活。</p>
<p>2、一周内不做过重的体力劳动； 三天内应卧床休息，太用力易出血并且易发炎。</p>
<p>3、放置后可能有少量阴道出血，大多会自行消失。放置宫内节育环的主要并发症是出血。主要症状是月经量过多、月经期延长、经期不规则出血等。一般来讲，放环后总有少量出血，但不会超过一周。若出血超过一周，或出血量多如月经量，就属于异常反应。如出血多、腹痛、发热，应去医疗单位诊治；</p>
<p>4、放置后3个月内，注意少一些活动，避免重体力活动，包括长时间到处行走、长时间坐、站立等，如果月经量可能增多，经期就应注意节育器是否脱落的现象，有阴道的流血不能同房或者是盆浴。</p>
<p>5、如果出现下列情况之一，立即去医院诊治：剧烈腹痛、发热、骨盆区疼痛，阴道分泌物增加；月经未转或有怀孕可能；节育器脱落；房事生活时疼痛；出血过多或者有不规则出血或流血不止等等。</p>
<p>上环后发炎怎么办</p>
<p>上环对女性来说，在往后的日子中很可能会经常面对&ldquo;发炎&rdquo;这个问题。尤其对于部分女性来说，一旦上环了，过不久就会出现各种炎症，而且反复发作，那该怎么办？</p>
<p>上环避孕的基本原理就是人为的模拟制造让子宫内环境发炎，以达到不怀孕的目的。但是，如果由于上环后，确实发了炎症，那么如果经过调理和治疗还会反复发作，不能根治的话，建议到上环的医院检查确认，开出禁忌症手续，然后拿掉环，改采用其他避孕措施。</p>
<p>上环后怀孕怎么办</p>
<p>任何一种避孕方法的避孕率都并非100%的，尽管已经上环了，但仍然有小部分的女性在上环后经常出现怀孕的现象。那么上环后怀孕怎么办才好呢？</p>
<p>据不完全统计，上环后仍有3%-4%左右可能怀孕。由于上环会影响受精卵安家，一旦怀孕，受精卵就很有可能在宫腔外(常见部位是输卵管和卵巢)安营扎寨，即宫外孕。</p>
<p>上环后确实有少数人带环怀孕，如节育器放置不当，或与宫腔大小形态不符，可能造成节育器脱落或下移，而节育器下移会影响避孕效果而发生带器妊娠。</p>
<p>可见，育龄女性上环后还是有怀孕可能的。如果确定妊娠，考虑到宫内节育器对胚胎的影响，不宜继续妊娠，且宫内节育器是药物流产的禁忌，需尽早行人工流产术，终止妊娠。</p>
<p>因此，要特别警惕的是带环怀孕以后，如果出现阴道流血、腹痛等异常情况，即使月经未过期，也必须及时就诊。千万不能把这些异常情况当做带环的副作用而掉以轻心。</p>
<p>相关百科双子宫能上环吗子宫帽上环疼吗上环好吗上环证明样本上环是什么意思上环多少钱上环的最佳时间上环的坏处上环的副作用上环时间上环过程上环证明上环后出血上环前注意事项上环后注意事项麻麻微视频<img src="../../../storage/images/content/582a7566801df.jpg"></p>
<p>辣妈学院86：网红辣妈妆出来！</p>
<p><img src="../../../storage/images/content/582a756721e36.png"></p>
<p>二胎让妈妈们都遇到了哪些困惑？</p>
<p><img src="../../../storage/images/content/582a756797f14.jpg"></p>
<p>女王V5 妈妈网红人选拔赛100强视频花絮集锦</p></div>                           <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;">
         
                    
                   </div>
      </div>
    </div>
  </div>
  <div class="blank"></div>
  <div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";N;s:2:"id";N;}554fcae493e564ee0dc75bdf2ebf94ca</div>
  </div>
  
</div>
<div class="blank5"></div>
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
       </div>
  </div>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="f_l">
      </div>
   <div class="f_r">
   <a href="#top"><img src="themes/default/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/default/images/bnt_home.gif" /></a>
   </div>
  </div>
 </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 <br />
                             <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<br />
        <div align="left"  id="rss"><a href=""><img src="themes/default/images/xml_rss2.gif" alt="rss" /></a></div>
 </div>
</div>
</body>
</html>
