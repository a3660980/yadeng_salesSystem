<?php
/* Smarty version 3.1.29, created on 2016-06-05 10:49:23
  from "/home/ubuntu/workspace/templates/Vendor/add_vendor_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575403b383ca19_32286905',
  'file_dependency' => 
  array (
    '3ec723aeba706af9937ec8aabb869d81a3e5e948' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Vendor/add_vendor_page.tpl',
      1 => 1465111840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575403b383ca19_32286905 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>新增供應商</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../html/Register/do_register.php' id="add_vendor" method='POST'>
               <input type='hidden' name='func' value='do_add_sales'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
新增供應商資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
	供應商名稱
	</th> 
	<td> 
	 <input type="text" name="vendor_name" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="vendor_mail" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	聯絡電話
	</th> 
	<td> 
	 <input type="text" name="vendor_tel" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	傳真
	</th> 
	<td> 
	 <input type="text" name="vendor_fax" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="vendor_address" class="form-control">
	</td> 
</tr> 

</table> 
</div> 
</div>
     <div style="display: none;">
           <button id="mybutton" form='add_vendor' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
        </body>
        </html>
       



<?php }
}
