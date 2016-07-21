<?php
/* Smarty version 3.1.29, created on 2016-06-06 03:49:51
  from "/home/ubuntu/workspace/templates/Product/view_product_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754f2dfbaa826_92208820',
  'file_dependency' => 
  array (
    'a6fe48c49afb3a16c2e87363b6740a6a6b8f3a8f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Product/view_product_page.tpl',
      1 => 1465184958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
  ),
),false)) {
function content_5754f2dfbaa826_92208820 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <style type="text/css">
.thumb-image{
float:left;width:200px;position:relative;padding:5px;
}</style>
    
         
          <form action='../../index.php' id="update_product" method='POST'>
               <input type='hidden' name='func' value='do_update_product'>
               <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
修改產品資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 
<tr> 
		<th width="160px"> 
			商品編號
		</th> 
		<td>  
			<input disabled="disabled" type='text' name='product_code' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
		</td> 
</tr>
<tr> 
		<th width="160px"> 
			商品名稱
		</th> 
		<td>  
			<input disabled="disabled" type='text' name="product_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
">
		</td> 
</tr> 
<tr height="200"> 
	<th> 
	商品圖片
	</th> 
	<td>
		<div id="image-holder"><img src='<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
' id="pic" class="thumb-image"></div>
		
		</div>
	</td> 
</tr> 

<tr> 
	<th> 
	單價
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="product_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['product_price']->value;?>
"> 
	</td> 
</tr> 

<tr> 
	<th> 
	倉位
	</th> 
	<td> 
		<select name="product_shelf" class="form-control" disabled="disabled"> 
			<?php
$_from = $_smarty_tpl->tpl_vars['shelf']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['Shelf_id'] == $_smarty_tpl->tpl_vars['product_shelf']->value) {?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_name'];?>
</option>
			<?php } else { ?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_name'];?>
</option>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	供應商
	</th> 
	<td> 
		<select name="product_vendor" class="form-control" disabled="disabled">
			<?php
$_from = $_smarty_tpl->tpl_vars['vendor']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['row']) || !is_array($_smarty_tpl->tpl_vars['row']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'row');
if ($_smarty_tpl->tpl_vars['row']->value['Vendor_id'] = $_smarty_tpl->tpl_vars['product_vendor']->value) {?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</option>
			<?php } else { ?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</option>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	備註
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="product_remark" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['product_remark']->value;?>
"> 
	</td> 
</tr> 
</table> 
</div> 
</div>

       </form>
        </body>
        </html>
       



<?php }
}
