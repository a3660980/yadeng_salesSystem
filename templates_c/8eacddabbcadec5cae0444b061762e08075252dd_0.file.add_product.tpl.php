<?php
/* Smarty version 3.1.29, created on 2016-06-03 18:16:30
  from "/home/ubuntu/workspace/templates/Product/add_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5751c97eea1f96_38818789',
  'file_dependency' => 
  array (
    '8eacddabbcadec5cae0444b061762e08075252dd' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Product/add_product.tpl',
      1 => 1464968881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5751c97eea1f96_38818789 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>新增產品</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../../html/Sales/do_add_sales.php' id="add_order" method='POST'>
               <input type='hidden' name='func' value='do_add_sales'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">申請會員基本資料</p></b>
            </div>
            
            <div class="row" >
               
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">姓名</span>
                <input type='text' name='customer_name' class="form-control">
                </div>
                <br>
                     <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">地址</span>
                 <input type="text" name="address" class="form-control">
                 </div>
                  <br>
                <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">行動電話</span>
                <input type='text' name='callphone' class="form-control">
                </div>
                </div>
               
                     
               <div class="col-md-2 "></div>
               <div class="col-md-2">
                   
                    <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">出生年月日</span>
                 <input type="text" name="birth" class="form-control">
                 </div>
                  <br>
                  <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">E-mail</span>
                 <input type="text" name="mail" class="form-control">
                 </div>
                  
                    <label style="margin-top:8%" class="c-input c-radio">
                          <td>性別：<input type="radio" name="sex" value="1"> 男
                <input type="radio" name="sex" value="0"/>  女 </td>
                    </label>
                </div>
          </div>
              <br>
              <br>
     <div>
           <button form='add_order' type='submit' class="btn btn-warning" style="float: center;
        width: 5%;
        position: fixed; margin-left:48%">新增</button>
       </div>
       </form>
        </body>
        </html>
       



<?php }
}
