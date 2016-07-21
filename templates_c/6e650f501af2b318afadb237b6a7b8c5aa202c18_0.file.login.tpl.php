<?php
/* Smarty version 3.1.29, created on 2016-05-25 17:50:59
  from "D:\wamp64\www\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5745e603235ed6_22158483',
  'file_dependency' => 
  array (
    '6e650f501af2b318afadb237b6a7b8c5aa202c18' => 
    array (
      0 => 'D:\\wamp64\\www\\templates\\login.tpl',
      1 => 1464167688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5745e603235ed6_22158483 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
   <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
</head>

<body style="background-color:#9F0050">


    <h1><p><center><font size = 6 color = white face = arial>雅登精品名店</font></center></p>
   <p><center><font size = 5 color = white face = arial>進銷存管理系統</font></center></p>
   </h1>
   <br>
   <br>
   <form action="/index.php" method="POST" >
     <input type='hidden' value="do_login" name="func">
    <center>
      <div class="container">
      <div class="panel panel-default" style="width:400px">
        <div class="panel-heading" style="height:60px">
          <font class="text-center" color="#9F0050" size="6">LOGIN </font>
        </div>
        <div class="panel-body">
          <div class="control-group">
            <label class="control-label" for="inputIcon"></label>
            <div class="controls">
              <div class="input-prepend">
			 
                <span class="add-on"> <i class="glyphicon glyphicon-user"></i></span>
                <input name="user" class="span2" id="inputIcon" type="text" size="25" placeholder="username">
              </div>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputIcon"></label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on"><i class="glyphicon glyphicon-lock"></i></span>
                <input name="password" class="span2" id="inputIcon" type="password" size="25" placeholder="password">
              </div>
            </div>
          </div>
		  
		  <p></p>
          <button class="btn btn-small btn-primary" name="submit"  type="submit" style="width:200px; height:30px; background-color:#9F0050; border-color:#9F0050">登入</button>
            
   
    </div>
    </div>
</div>
 </center>
 </form>
 <br><br>
<center>
<font size="1" color="white">Copyrighy © 2016 KUAS MIS B CLASS. All rights reserved | Desgin By JohnnyYu </font>
</center>

</body>

</html><?php }
}
