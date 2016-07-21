<?php
/* Smarty version 3.1.29, created on 2016-05-26 10:40:20
  from "D:\wamp64\www\templates\bar\navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5746d2947a5a19_70896930',
  'file_dependency' => 
  array (
    'ab92d9676361589d94734cd7d0511345d6e2aa36' => 
    array (
      0 => 'D:\\wamp64\\www\\templates\\bar\\navbar.tpl',
      1 => 1464259207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5746d2947a5a19_70896930 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <font class="navbar-title">YaDeng</font>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">銷貨管理</a></li>
        <li><a href="#">進貨管理</a></li>
        <li><a href="#">存貨管理</a></li>
        <li><a href="#">客戶管理</a></li>
        <li><a href="#">供應商管理</a></li>
        <li><a href="#">產品管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></a></li>
        <li><a href="/html/do_logout.php">登出</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }
}
