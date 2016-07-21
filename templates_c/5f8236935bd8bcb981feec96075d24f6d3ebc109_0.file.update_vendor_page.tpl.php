<?php
/* Smarty version 3.1.29, created on 2016-06-05 07:30:56
  from "/home/ubuntu/workspace/templates/Vendor/update_vendor_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5753d530d30683_94982285',
  'file_dependency' => 
  array (
    '5f8236935bd8bcb981feec96075d24f6d3ebc109' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Vendor/update_vendor_page.tpl',
      1 => 1465111844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5753d530d30683_94982285 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改供應商</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../../index.php' id="update_vendor" method='POST'>
               <input type='hidden' name='func' value='do_update_vendor'>
               <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
               
           <div class="panel panel-success"> 
<div class="panel-heading"> 
修改供應商資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
	供應商名稱
	</th> 
	<td> 
	 <input type="text" name="vendor_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['vendor_name']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="vendor_mail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['vendor_mail']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	聯絡電話
	</th> 
	<td> 
	 <input type="text" name="vendor_tel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['vendor_tel']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	傳真
	</th> 
	<td> 
	 <input type="text" name="vendor_fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['vendor_fax']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="vendor_address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['vendor_address']->value;?>
">
	</td> 
</tr> 

</table> 
</div> 
</div>
     <div style="display: none;">
           <button form="update_vendor" id="mybutton" type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">修改</button>
       </div>
       </form>
        </body>
        </html>
       



<?php }
}
