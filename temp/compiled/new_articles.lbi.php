<ul>
<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
  <li>
    <a href="article.php?id=<?php echo $this->_var['article']['id']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['title'],20); ?></a>
    </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>