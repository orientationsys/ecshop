<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:53:"D:/xampp/htdocs/new_ecshop/themes/default/article.dwt";i:1;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_header.lbi";i:2;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/ur_here.lbi";i:3;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/cart.lbi";i:4;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/category_tree.lbi";i:5;s:75:"D:/xampp/htdocs/new_ecshop/themes/default/library/article_category_tree.lbi";i:6;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/filter_attr.lbi";i:7;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/price_grade.lbi";i:8;s:67:"D:/xampp/htdocs/new_ecshop/themes/default/library/goods_related.lbi";i:9;s:61:"D:/xampp/htdocs/new_ecshop/themes/default/library/history.lbi";i:10;s:62:"D:/xampp/htdocs/new_ecshop/themes/default/library/comments.lbi";i:11;s:58:"D:/xampp/htdocs/new_ecshop/themes/default/library/help.lbi";i:12;s:65:"D:/xampp/htdocs/new_ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1484555567;s:8:"maketime";i:1484551967;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
         <font class="f5 f6">中国墙</font><br />
         
         <!-- <font class="f3"> / </font> -->
         </div>
                   <div class="stk-post stk-layout_4col_1019 stk-theme_1445" style="background-color: #ffffff; ">
<p class="align-left stk-theme_1445__mb_15">
    <strong>一般情况下，防火長城主要指<a href="https://zh.wikipedia.org/wiki/%E4%B8%AD%E5%8D%8E%E4%BA%BA%E6%B0%91%E5%85%B1%E5%92%8C%E5%9B%BD">中国</a>政府监控和过滤<a href="https://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%94%E7%BD%91">互联网</a>国际出口上内容的软硬件系统的集合。例如監視系統就曾與美商合作，構建類似美國的<a href="https://zh.wikipedia.org/wiki/%E6%A3%B1%E9%95%9C%E8%AE%A1%E5%88%92">稜鏡</a>計畫的深度偵查機制，但中國政府並進一步設定將查獲的特定網點阻斷等，造成大家所熟知的連線錯誤現象，因此防火牆不是中國特有的一個專門單位，是由分散部門的各服务器和路由器等设备，加上相关公司的应用程序所构成，是一個跨軍民合作的大型資訊管制系統，實際上就如大多數國家也會建立網路監管一樣。不過其他政府的管理僅止於金融洗錢、國際詐騙等犯罪行為，與中國的審查機制有著相當大的不同。防火長城的作用主要是监控国际网关上的通讯，对认为不符合中共官方要求的传输内容，进行干扰、阻断、屏蔽。由於<a href="https://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD%E7%BD%91%E7%BB%9C%E5%AE%A1%E6%9F%A5">中國網絡審查</a>廣泛，中國國內含有「不合適」内容的網站，會受到政府直接的行政干預，被要求<a href="https://zh.wikipedia.org/wiki/%E8%87%AA%E6%88%91%E5%AE%A1%E6%9F%A5">自我审查</a>、自我监管，乃至關閉，故防火長城主要作用在於分析和過濾中國境外網絡的資訊互相存取。<a href="https://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9C%8B%E5%B7%A5%E7%A8%8B%E9%99%A2">中國工程院</a>院士、<a href="https://zh.wikipedia.org/wiki/%E5%8C%97%E4%BA%AC%E9%82%AE%E7%94%B5%E5%A4%A7%E5%AD%A6">北京郵電大學</a>前校長<a href="https://zh.wikipedia.org/wiki/%E6%96%B9%E6%BB%A8%E5%85%B4">方滨兴</a>是防火长城关键部分的首要设计师。</strong>
</p>
<p>
    然而，防火长城对网络内容的审查是否限制和违反了<a href="https://zh.wikipedia.org/wiki/%E8%A8%80%E8%AE%BA%E8%87%AA%E7%94%B1">言论自由</a>，一直是受争议的话题，官方說詞也相當籠統。有报告认为，防火长城其实是一种<a href="https://zh.wikipedia.org/wiki/%E5%9C%86%E5%BD%A2%E7%9B%91%E7%8B%B1">圆形监狱</a>式的全面监控，以达到<a href="https://zh.wikipedia.org/wiki/%E8%87%AA%E6%88%91%E5%AE%A1%E6%9F%A5">自我审查</a>的目的<a href="https://zh.wikipedia.org/wiki/%E9%98%B2%E7%81%AB%E9%95%BF%E5%9F%8E#cite_note-ConceptDoppler-8">[8]</a>，因為網路的分散式架構，完全封鎖言論是不可能的，事實也證明，任何人在中國大陸地區都能夠在低調的情況下發表敏感言論，但是對於封鎖的恐懼，許多人不希望發出的訊息會被屏蔽而選擇中性的講法或不說出來，例如一套偵測中國官方部屬的<a href="https://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93">DNS汙染</a>伺服器工具在<a href="https://zh.wikipedia.org/wiki/GitHub">GitHub</a>（世界最大的開源代碼託管服務）上開源發布後，引起了激烈的爭論。一些人認爲，此舉會激怒「牆」的管理者，導致GitHub被封鎖，影響牆內程序員學習交流，所以應該刪除這樣的代碼倉庫，「保持技術社區的純粹」。另一些人，則認爲翻牆是程序員的基本技能，表示不受影響，所以力挺該項目，並極力反對技術社區加入「自我審查」的行列。<a href="https://zh.wikipedia.org/wiki/%E9%98%B2%E7%81%AB%E9%95%BF%E5%9F%8E#cite_note-9">[9]</a>而中共當局一直沒有正式對外承認防火長城的存在，如当有记者在外交部新闻发布会上问及互联网封锁等问题的时候，发言人的答案基本都是「中国政府鼓励和支持互联网发展，依法保障公民言论自由，包括网上言论自由。同时，中国对互联网依法进行管理，这符合国际惯例。」<a href="https://zh.wikipedia.org/wiki/%E6%96%B9%E6%BB%A8%E5%85%B4">方滨兴</a>曾在访问中被问及防火长城是如何运作的时候，他指这是「国家机密」。不過2015年1月與官方有密切關聯的《<a href="https://zh.wikipedia.org/wiki/%E7%8E%AF%E7%90%83%E6%97%B6%E6%8A%A5">环球时报</a>》则发布报道曾公开宣扬其存在。可以發現官方對牆的理解隨時間發展也不斷改變，不僅止於過濾不合法內容，更以發展中國互聯網為名，企圖透過隔絕將網路<a href="https://zh.wikipedia.org/wiki/%E5%9C%8B%E7%95%8C">國界</a>化，視外資為經濟滲透、干涉內政，這些牆存在意義的輿論宣傳，逐步強化了設牆政策的合理性與正當性，但時至今日中国仍一直宣稱是「依法管理以保障<a href="https://zh.wikipedia.org/wiki/%E7%B6%B2%E8%B7%AF%E4%B8%BB%E6%AC%8A">網路主權</a>」。官方媒体公开发布的报道里曾涉及防火长城的监控，从侧面证明其的确存在。
</p>
<p>
    中國还有一套公开在公安部辖下的网络安全项目——<a href="https://zh.wikipedia.org/wiki/%E9%87%91%E7%9B%BE%E5%B7%A5%E7%A8%8B">金盾工程</a>，其主要功能是处理中国公安管理的业务，涉外饭店管理，出入境管理，治安管理等，所以金盾工程和防火长城的关系一直没有明确的认定。
</p>
<figure class="stk-image-figure" data-ce-tag="image-figure">
    <div class="stk-mask" data-ce-tag="mask">
<img id="image-544" src="http://47.90.87.9/storage/images/content/5875d6cc7a5e2.jpg">
    </div>
<figcaption class="stk-description" data-ce-tag="description" data-placeholder="Image caption (optional)"></figcaption>
</figure>
<div class="stk-grid" data-ce-tag="grid">
    <div class="stk-grid-col stk-grid-col_last" data-ce-tag="grid-col" data-col-width="3">
        <p>
            原理：防火长城對所有经过骨干出口路由的在<a href="https://zh.wikipedia.org/wiki/%E7%94%A8%E6%88%B7%E6%95%B0%E6%8D%AE%E6%8A%A5%E5%8D%8F%E8%AE%AE">UDP</a>的53端口上的<a href="https://zh.wikipedia.org/wiki/DNS">域名</a>查询进行<a href="https://zh.wikipedia.org/wiki/%E5%85%A5%E4%BE%B5%E6%A3%80%E6%B5%8B%E7%B3%BB%E7%BB%9F">IDS</a>入侵检测，一經發現與黑名單關鍵詞相匹配的域名查詢請求，防火长城會馬上伪装成目标域名的解析服务器给查询者返回虚假结果。由于通常的域名查询没有任何认证机制，而且域名查詢通常基于的UDP協議是无连接不可靠的协议，查询者只能接受最先到达的格式正确结果，并丢弃之后的结果。用户若改用TCP在53端口上进行DNS查询，虽然不会被防火长城污染，但可能会遭遇连接重置，导致无法获得目标网站的IP地址。
        </p>
        <p>
            <a href="https://zh.wikipedia.org/wiki/IPv6">IPv6</a>协议时代部署应用的<a href="https://zh.wikipedia.org/wiki/DNSSEC">DNSSEC</a>技术为DNS解析服务提供了解析数据验证机制，可以有效抵御劫持。
        </p>
    </div>
    <div class="stk-grid-col stk-grid-col_empty" data-ce-tag="grid-col" data-col-width="1">
        <p>
            
        </p>
    </div>
</div></div>                           <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;">
         
                    
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
