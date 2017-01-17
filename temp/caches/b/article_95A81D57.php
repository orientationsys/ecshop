<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:53:"D:/xampp/htdocs/new_ecshop/themes/default/article.dwt";i:1;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_header.lbi";i:2;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/ur_here.lbi";i:3;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/cart.lbi";i:4;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/category_tree.lbi";i:5;s:75:"D:/xampp/htdocs/new_ecshop/themes/default/library/article_category_tree.lbi";i:6;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/filter_attr.lbi";i:7;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/price_grade.lbi";i:8;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/goods_related.lbi";i:9;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/history.lbi";i:10;s:62:"D:/xampp/htdocs/new_ecshop/themes/default/library/comments.lbi";i:11;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/help.lbi";i:12;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1484556840;s:8:"maketime";i:1484553240;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
         <font class="f5 f6">豇豆角炒肉</font><br />
         
         <!-- <font class="f3"> / </font> -->
         </div>
                   <div class="stk-post stk-layout_4col_1019 stk-theme_1445">
<p>
    <span><h1>豇豆角炒肉</h1><strong>【导读】</strong>豇豆角是人们餐桌上常见的食物，随着生活水平的提高，简单的炒豇豆角已远远满足不了大家的口味，所以从原来的炒豇豆角已经衍变成腌制豇豆角、凉拌豇豆角、豇豆角炒肉等等，其中豇豆角炒肉根据肉的不同，做法也不同，花样也不同，营养也不一样哦，豇豆角炒肉的做法其实很简单，而且是一般人都会选择的做法，想知道豇豆角炒肉怎么做吗，想知道豇豆角炒肉有什么营养吗，想知道豇豆角炒肉含有多少热量，适合什么人吗，关注妈妈网百科专区，一切都会告诉你哦。</span> <span><a href="http://www.mama.cn/z/art/94117/">豇豆角炒肉</a><p>豇豆角的做法有很多，光是豇豆角炒肉就有很多新花样，比如豆角炒牛肉、干豇豆烧排骨、豇豆红烧肉等，是不是很想动手做呢，所以接下来就一起来学学吧。1、干豇豆烧排骨，干豇豆用水泡2小时以上。排骨过水备用，炒锅放油烧热放葱片，姜片，八角，桂皮炒香放排骨煸炒，加料酒，酱油，盐，糖炒排骨上色加切成段的干豇豆，加水漫过排骨大火烧开，改中小火满炖至排骨烂，开大火收汁，调味即可。2、豆角炒牛肉，锅里放油，烧热，倒进牛肉，尽量把牛肉铺开，煎至变色，翻面，同样铺开，煎至变色后盛起备用，锅洗干净，重新热油，放下蒜蓉爆香，放进沥干水分的豆角，大火爆炒，边炒边洒水，把豆角煸炒至全部转青绿色，加入3汤匙水，盖上锅盖大火煮3分钟，加入牛肉，翻炒均匀，放适量盐（牛肉腌过的，盐要适量），放一点点白糖提鲜，翻炒至盐、糖融化即可。3、豇豆红烧肉，将五花肉洗净切块，锅内坐水煮开滴入少许料酒，将肉块下锅氽煮2-3分钟至血腥浮沫泛起，捞出温热水冲洗干净，控干水备用，将干豇豆提前泡软，淘洗干净后拧干切成段状备用，大葱斜切成段，生姜切片备用，锅烧热滑油，将五花肉块及生姜片下锅中小火煸炒，煸至肉块出油表皮微微焦香金黄时出锅，就着锅内煸出的猪油，放入冰糖碎，开慢火炒糖色，待冰糖溶化锅内起泡沫时，将五花肉块、葱段、八角倒入锅中快速翻炒，翻炒至肉块均匀地包裹上糖色后，转大火依次喷入料酒，添加生抽、老抽炒匀，往锅内一次性加足开水（高汤更好），水量注入以略平于肉面为好。大火煮开锅后转小火加盖焖烧，慢火烧制约1个钟后，将香料取出扔掉，放入豇豆段，将锅中材料翻炒均匀后继续加盖焖煮；慢火焖至肉块透味且酥而不烂时(约再20分钟)调入适量精盐，转大火收浓汁起锅，注意掂锅翻炒以使肉块挂汁均匀哦。 ...</p><a href="http://www.mama.cn/z/art/94118/">豇豆角炒肉的营养</a><p>了解了豇豆角的做法，你们知道豇豆角的营养价值吗，“理中益气，补肾健胃，和五脏，调营卫，生精髓”就是来描述它的营养价值的哦，它化湿而不燥烈，健脾而不滞腻，为脾虚湿停常用之品；有调和脏腑、安养精神、益气健脾、消暑化湿和利水消肿的功效，那么这道菜除了这些营养价值之外，还有什么其他价值吗，就让我们来了解一下吧。豇豆角性平、味甘咸，归脾、胃经。它具有理中益气、健胃补肾、和五脏、调颜养身、生精髓、止消渴的功效。豇豆角的磷脂有促进胰岛素分泌，参加糖代谢的作用，它含蛋白质、脂肪、淀粉、磷、钙、铁，维生素b1、b2，烟酸等营养成分。它还主治脾虚兼湿、食少便溏，湿浊下注、妇女带下过多，还可用于暑湿伤中、吐泻转筋等症。可以使人头脑宁静；调理消化系统，消除胸膈胀满，可防治急性肠胃炎、呕吐腹泻等。肉类的营养价值来自于蛋白质、脂肪、碳水化物、矿物质、维生素等，多吃肉可以解决人们的饥饿，而且肉维持的时间会更长一些，畜肉中B族维生素含量丰富，内脏如肝脏中富含维生素A、核黄素。矿物质含量约为0.8～1.2mg%，其中钙含量7.9mg/g，含铁、磷较高，铁以血红素形式存在，不受食物其它因素影响，生物利用率高，是膳食铁的良好来源。</p><a href="http://www.mama.cn/z/art/94119/">豇豆角炒肉的热量</a><p>豇豆角炒肉的做法简单有具有营养，你是不是很想尝试呢，但又考虑到这道菜的热量，所以很矛盾呢，那么接下来就先介绍这道菜的热量供你们参考吧。豇豆角的总卡路里是47大卡，钠盐是4毫克，碳水化合物总量是8.35克，膳食纤维是2.1克，蛋白质是2.8克等多种含量，畜肉类蛋白质含量为10～20%，其中肌浆中蛋白质占20～30%，肌原纤维中40～60%，间质蛋白10～20%，畜肉蛋白必需氨基酸充足，在种类和比例上接近人体需要，利于消化吸收，是优质蛋白质。一般畜肉的脂肪含量为10～36%，肥肉高达90%，畜肉类脂肪以饱和脂肪为主，熔点较高，主要成分为甘油三酯、少量卵磷脂、胆固醇和游离脂肪酸。胆固醇在肥肉中为109mg/100g，在瘦肉中为81mg/100g，内脏约为200mg/g，脑中最高，约为2571mg/100g。所以豇豆角炒肉的热量也是很高的，当然不同的肉类，热量也不同哦，比如猪肉含量(每100克)有热量(大卡)143.00大卡，碳水化合物(克)1.50克，脂肪(克)6.20克，蛋白质(克)20.30克是蛋白质最多、血红素铁最丰富的肉类之一。牛肉有332.00大卡(100克)，它富含蛋白质,氨基酸组成比猪肉更接近人体需要。而豆角炒肉丝的热量(以100克可食部分计)是353大卡(1476千焦)，单位热量较高。</p><a href="http://www.mama.cn/z/art/94120/">豇豆角炒肉的适宜人群</a><p>虽然豇豆角有营养，也含有一定热量，但你们知道吗，这道菜也有适宜人群，可不能随便吃哦，接下来就让我来告诉你们这道菜的适宜人群吧。豇豆角不适宜腹胀者，它适合妇女多白带者，皮肤瘙痒，急性肠炎者食用，同时适宜癌症、急性肠胃炎、食欲不振者食用。因为豆角使人头脑宁静；调理消化系统，消除胸膈胀满。可防治急性肠胃炎、呕吐腹泻。它还可充分保证人的睡眠质量哦，所以失眠之人也可以试试看。而且多吃豇豆还能治疗呕吐、打嗝等不适，因此有呕吐或者常打嗝的人也可以吃多吃些豇豆角。如果是湿热痰滞内蕴者慎服；肥胖、血脂较高者不宜多食这道菜哦。当然对于肉，有些人对有些肉忌讳，比如说牛肉、鸡肉等，所以你也可以换一个做法哦，一样可以很美味哟。温馨提醒一下，豇豆角一定要熟透，以防止中毒，预防豆角中毒的主要方法是把豆角充分加热，彻底炒熟再食用。判断豆角是否熟透的方法是：豆棍由支挺变为蔫弱，颜色由鲜绿色变为暗绿，吃起来没有豆腥味。注意好这些地方会吃起来更安心哦。</p>相关百科<ul><li><a href="http://www.mama.cn/z/25501/">炒豇豆的做法大全</a><a href="http://www.mama.cn/z/25504/">干煸豇豆的做法大全</a><a href="http://www.mama.cn/z/25507/">干豇豆的做法大全</a><a href="http://www.mama.cn/z/25441/">红豇豆的做法大全</a><a href="http://www.mama.cn/z/11988/">豇豆的做法大全</a><a href="http://www.mama.cn/z/26117/">泡豇豆的腌制方法</a><a href="http://www.mama.cn/z/26115/">泡豇豆炒肉末</a><a href="http://www.mama.cn/z/26114/">泡豇豆的做法大全</a><a href="http://www.mama.cn/z/26110/">腌豇豆角</a><a href="http://www.mama.cn/z/26106/">豇豆的腌制方法</a><a href="http://www.mama.cn/z/26103/">腌豇豆的做法大全</a><a href="http://www.mama.cn/z/26101/">凉拌豇豆的做法大全</a><a href="http://www.mama.cn/z/26099/">茄子豇豆的做法</a><a href="http://www.mama.cn/z/26096/">豇豆炒茄子</a><a href="http://www.mama.cn/z/26094/">肉末豇豆的做法</a><a href="http://www.mama.cn/z/26093/">豇豆烧肉的做法</a><a href="http://www.mama.cn/z/26091/">豇豆的营养价值</a><a href="http://www.mama.cn/z/25728/">凉拌豇豆角的做法</a><a href="http://www.mama.cn/z/25727/">干煸豇豆角的做法</a><a href="http://www.mama.cn/z/25726/">豇豆角有毒</a><a href="http://www.mama.cn/z/25725/">豇豆角怎么做好吃</a><a href="http://www.mama.cn/z/25724/">豇豆角的腌制方法</a><a href="http://www.mama.cn/z/25722/">豇豆角的做法</a><a href="http://www.mama.cn/z/25552/">酸豇豆炒肉</a><a href="http://www.mama.cn/z/25536/">酸豇豆炒蛋</a><a href="http://www.mama.cn/z/25535/">酸豇豆炒肉末</a><a href="http://www.mama.cn/z/25532/">酸豇豆的腌制方法</a><a href="http://www.mama.cn/z/25530/">酸豇豆的做法大全</a><a href="http://www.mama.cn/z/25528/">豇豆的热量</a></li></ul><a href="http://www.mama.cn/lib/">麻麻微视频</a><ul><li><a href="http://www.mama.cn/lib/item/72493.html"><img src="http://47.90.87.9/storage/images/content/5860dda81e655.jpg"><p>辣妈学院92：辣妈跨年会！</p></a><a href="http://www.mama.cn/lib/item/72492.html"><img src="http://47.90.87.9/storage/images/content/5860dda8cc632.jpg"><p>有形有趣圣诞舞 Trolli Dance</p></a><a href="http://www.mama.cn/lib/item/72491.html"><img src="http://47.90.87.9/storage/images/content/5860ddaa54f94.png"><p>作为新一代辣妈，你符合标准吗？</p></a></li></ul></span>
</p></div>                           <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;">
         
                    
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
