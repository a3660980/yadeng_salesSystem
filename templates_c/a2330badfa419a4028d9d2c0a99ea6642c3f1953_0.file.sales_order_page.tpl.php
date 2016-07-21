<?php
/* Smarty version 3.1.29, created on 2016-06-01 18:40:17
  from "/home/ubuntu/workspace/templates/Sales/sales_order_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574f2c117ebbb1_30567238',
  'file_dependency' => 
  array (
    'a2330badfa419a4028d9d2c0a99ea6642c3f1953' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Sales/sales_order_page.tpl',
      1 => 1464806414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574f2c117ebbb1_30567238 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
       

            <div class="t" >
         <b><p class="text-center">訂購人基本資料</p></b>
            </div>
            
            <div class="theme">
           <table class="bordertable table"  width=80<?php echo '%>';?>
               <div class="input-group">
            <tr>
                <td><span class="input-group-addon" id="basic-addon1">顧客姓名</span></td>
                <td><input type="text" name="欄位名稱"></td>
                <td><span class="input-group-addon" id="basic-addon1">訂單編號</span></td>
                <td><input type="text" name="欄位名稱"></td>
            </tr>
                </div>
                <div class="input-group">
                <tr>
                <td><span class="input-group-addon" id="basic-addon1">居住地址</span></td>
                <td><input type="text" name="欄位名稱"></td>
                <td><span class="input-group-addon" id="basic-addon1">手機號碼</span></td>
                  <td><input type="text" name="欄位名稱"></td>
                  </tr>
                  </div>
                  <div class="input-group">
                <tr>
                <td><span class="input-group-addon" id="basic-addon1">E-mail</span></td>
                   <td><input type="text" name="欄位名稱"></td>
                <td><span class="input-group-addon" id="basic-addon1">會員類型</span></td>
                  <td> <select name="YourLocation" style="width:155px">
                  　     <option value="Taipei">一般客</option>
　                      <option value="Taoyuan">會員</option>
                </select>
                </td>
                  </tr>
                  </div>
                
             </table>            
    <br/>
    
<HR color="	#8B4513" size="100" width=95<?php echo '%>';?>
	
        <table class=" csstable">
            <tr>
                 <th>產品編號</th>
                 <th>產品名稱</th>
                 <th>數量</th>
                 <th>單價</th>
                 <th>折扣</th>
                 <th>小計</th>
                 <th></th>
            </tr>
                <tr>
                        <td><input type="text" name="欄位名稱"></td>
                        <td ><input type="text" name="欄位名稱"></td>
                        <td ><input type="text" name="欄位名稱"></td>
                        <td ><input type="text" name="欄位名稱"></td>
                        <td ><input type="text" name="欄位名稱"></td>
                        <td><input type="text" name=sum></td>
                        <td><input class="button" type="submit" name="submit" value="新增"/></td>
                 </tr>

                   
        </table>
        <br>
         <font size=5 style=font-family:DFKai-sb>總計：</font>
       </div>
       <br>
       


       </form>
        </body>
       
        </html>
       <?php }
}
