<?php
/* Smarty version 3.1.29, created on 2016-05-26 10:40:20
  from "D:\wamp64\www\templates\Sales\show_sales_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5746d294741942_75478345',
  'file_dependency' => 
  array (
    'b2d99ac391902a6e3614d862f8256852c99dc028' => 
    array (
      0 => 'D:\\wamp64\\www\\templates\\Sales\\show_sales_page.tpl',
      1 => 1464259218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../bar/navbar.tpl' => 1,
  ),
),false)) {
function content_5746d294741942_75478345 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">

    </head>
    <body>
       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../bar/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">訂單管理</li>
                <li><a href="#">退貨管理</a></li>

                <li></li>
            </ol>
        </div>

        <form>


            <table class="t1" cellpadding='20'  width=80<?php echo '%>';?>
                <tr>
                    <td>客戶編號：<input type="text" name="欄位名稱"></td>
                    <td>客戶電話：<input type="text" name="欄位名稱"></td>
                    <td>客戶地址：<input type="text" name="欄位名稱"></td>
                </tr>
                <tr>
                    <td>客戶名稱：<input type="text"  name="欄位名稱"></td>
                    <td>送貨截止日：<input type="text"name="欄位名稱"></td>
                    <td>購買日期：<input type="text" name="欄位名稱"></td>
                </tr>

            </table>
            <p></p><br>
            <table class="table1" border=1 align="center" width=90<?php echo '%>';?>
                <tr valign="center" width="40" height="20"> 
                    <th></th> 
                    <th>商品編號</th> 
                    <th>商品名稱</th> 
                    <th>數量</th> 
                    <th>單位</th> 
                    <th>單價</th> 
                    <th>稅率</th> 
                    <th>折扣</th> 
                    <th>送貨地址</th> 
                    <th>備註</th> 
                </tr> 
                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 
                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 
                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 

                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr><tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 
                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 
                <tr> 
                    <td width="10" height="20"></td>
                    <td width="40" height="20"></td>
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td>  
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                    <td width="40" height="20"></td> 
                </tr> 

        </form>  


    </table >





    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
