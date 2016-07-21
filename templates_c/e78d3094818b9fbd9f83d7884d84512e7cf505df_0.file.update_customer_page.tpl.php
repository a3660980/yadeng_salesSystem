<?php
/* Smarty version 3.1.29, created on 2016-06-03 22:44:08
  from "/home/ubuntu/workspace/templates/Customer/update_customer_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57520838ba5ca7_95640123',
  'file_dependency' => 
  array (
    'e78d3094818b9fbd9f83d7884d84512e7cf505df' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Customer/update_customer_page.tpl',
      1 => 1464988365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57520838ba5ca7_95640123 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改會員資料</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../../index.php' id="add_customer" method='POST'>
               <input type='hidden' name='func' value='do_update_customer'>
               <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
<div class="panel panel-success"> 
<div class="panel-heading"> 
編輯會員資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			姓名
		</th> 
		<td>  
			<input type='text' name='name' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"> 
		</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="add" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['add']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	行動電話
	</th> 
	<td> 
	 <input type="text" name="cell" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	出生年月日
	</th> 
	<td> 
	 <input type="text" name="birth" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['birth']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="text" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	性別
	</th> 
	<td> 
	<?php if ($_smarty_tpl->tpl_vars['sex']->value == 1) {?>
	 <input type="radio" name="sex" value="1" class="radio-inline" checked="checked"/> 男
     <input type="radio" name="sex" value="0" class="radio-inline"/>  女
     <?php } else { ?>
     <input type="radio" name="sex" value="1" class="radio-inline" /> 男
     <input type="radio" name="sex" value="0" class="radio-inline" checked="checked"/>  女
     <?php }?>
	</td> 
</tr> 

</table> 
</div> 
</div>

     <div style="display: none;">
           <button id="mybutton" form='add_customer' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">修改</button>
       </div>
       </form>
        </body>
        </html>
       



<?php }
}
