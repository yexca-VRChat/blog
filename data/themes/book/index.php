<?php
/**
 * 一款极适合书写、创作、阅读的简洁风格主题。
 * 
 * @package book
 * @author hewro
 * @version 1.5
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="footer-clear page-wrapper"> 
   <div class="page-container"> 
    <div class="index-wrapper"> 
     <?php $this->widget('Widget_Contents_Post_Recent','pageSize=1')->parse('<a class="link-1" href="{permalink}">开始阅读</a> /'); ?>
     
     <a class="link-1" href="<?php Helper::options()->siteUrl()?>./start.html">大纲</a> / 
     <a class="link-1" href="<?php Helper::options()->siteUrl()?>./background.html">背景</a> / 
 
     
    <?php if (!empty($this->options->IndexShow) && in_array('ShowArchive', $this->options->IndexShow)): ?>

     <a class="link-1" href="https://lit.link/yexca">关于我</a> / 
     <a class="link-1" href="https://vrchat.yexca.net/#/?id=%e5%85%b3%e4%ba%8e%e7%bd%91%e7%ab%99vrchatyexcaxyz">关于网站</a> /
     <a class="link-1" href="https://vrchat.yexca.net/#/References">参考资料</a>
 <?php endif; ?>
    </div> 
   </div> 
   


<?php $this->need('footer.php'); ?>
