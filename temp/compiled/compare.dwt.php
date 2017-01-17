<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,utils.js')); ?>
<script language="javascript">
function remove(id, url)
{
  if (document.getCookie("compareItems") != null)
  {
    var obj = document.getCookie("compareItems").parseJSON();
    delete obj[id];
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie("compareItems", obj.toJSONString());
  }
}

var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block">
  <h5><span><?php echo $this->_var['lang']['goods_compare']; ?></span></h5>
  <div class="blank"></div>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
              <tr>
                <th width="120" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td align="center" bgcolor="#ffffff" <?php if ($this->_foreach['goods_list']['total'] > 3): ?>width="200"<?php else: ?><?php endif; ?>> <?php echo $this->_var['goods']['goods_name']; ?></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <tr>
                <th align="left" bgcolor="#ffffff"></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td  align="center" bgcolor="#ffffff" style="padding:5px;"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="ent_img" /></a></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <?php if ($this->_foreach['goods_list']['total'] > 2): ?>
              <tr>
                <td bgcolor="#ffffff">&nbsp;</td>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <th bgcolor="#ffffff">
                  <a href="compare.php?<?php echo $this->_var['goods']['ids']; ?>" onClick="return remove(<?php echo $this->_var['goods']['goods_id']; ?>);"><?php echo $this->_var['lang']['compare_remove']; ?></a>                </th>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <?php endif; ?>
              <tr>
                <th align="left" bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['lang']['brand']; ?></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['goods']['brand_name']; ?></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <tr>
                <th align="left" bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['lang']['shop_price']; ?></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['goods']['rank_price']; ?></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <tr>
                <th align="left" bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['lang']['goods_weight']; ?></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['goods']['goods_weight']; ?></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <?php $_from = $this->_var['attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
              <tr>
                <th align="left" bgcolor="#ffffff">&nbsp;&nbsp;<?php echo $this->_var['val']; ?></th>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;
                  <?php $_from = $this->_var['goods']['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['property']):
?>
                  <?php if ($this->_var['k'] == $this->_var['key']): ?>
                  <?php echo $this->_var['property']['value']; ?>
                  <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                </td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <tr>
                <td align="left" bgcolor="#ffffff">&nbsp;&nbsp;<strong><?php echo $this->_var['lang']['goods_rank']; ?></strong></td>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;<span class="goods-price"><img src="themes/default/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" width="64" height="12" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /></span><br /></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <tr>
                <td align="left" bgcolor="#ffffff">&nbsp;&nbsp;<strong><?php echo $this->_var['lang']['brief']; ?></strong></td>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td bgcolor="#ffffff">&nbsp;&nbsp;<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"> <?php echo $this->_var['goods']['goods_brief']; ?></a></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
              <tr>
                <td bgcolor="#ffffff">&nbsp;</td>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <td align='center' bgcolor="#ffffff"><a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);"><img src="themes/default/images/bnt_colles.gif" alt="<?php echo $this->_var['lang']['collect']; ?>"  style="margin:2px auto;"/></a>
                <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/bnt_cat.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>"  style="margin:2px auto;"/></a></td>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </tr>
  </table>
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
