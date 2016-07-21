<?php
/* Smarty version 3.1.29, created on 2016-06-06 03:32:50
  from "/home/ubuntu/workspace/templates/Product/add_product_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754eee23af035_14478148',
  'file_dependency' => 
  array (
    '0e6bf188250b58d8fdb48c09b75f85433722327e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Product/add_product_page.tpl',
      1 => 1465183961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
  ),
),false)) {
function content_5754eee23af035_14478148 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style type="text/css">
.thumb-image{
float:left;width:200px;position:relative;padding:5px;
}</style>
<?php echo '<script'; ?>
 src="../../js/image.js"><?php echo '</script'; ?>
>

          <form action='../../index.php' id="add_product" method='POST' enctype="multipart/form-data">
               <input type='hidden' name='func' value='do_add_product'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
新增產品資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			商品編號
		</th> 
		<td>  
			<input type='text' name='product_code' class="form-control">
		</td> 
</tr>
<tr> 
		<th width="160px"> 
			商品名稱
		</th> 
		<td>  
			<input type='text' name='product_name' class="form-control">
		</td> 
</tr> 

<tr height="200"> 
	<th> 
	商品圖片
	</th> 
	<td>
		
		<div id="wrapper" style="margin-top: 20px;"><input id="fileUpload" name="fileUpload" accept="image/jpeg,image/gif,image/png" type="file"/> 
		<div id="image-holder"></div>
		
		</div>
	</td> 
</tr> 

<tr> 
	<th> 
	單價
	</th> 
	<td> 
	 <input type="number" name="product_price" class="form-control"> 
	</td> 
</tr> 

<tr > 
	<th> 
	倉位
	</th> 
	<td> 
		<select name="product_shelf" class="form-control">
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_name'];?>
</option>
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
		<select name="product_vendor" class="form-control">
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
__<?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</option>
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
	 <input type="text" name="product_remark" class="form-control"> 
	</td> 
</tr> 





</table> 
</div> 
</div>
     <div style="display:none;">
           <button form='add_product' type='submit' id="mybutton" class="btn btn-warning" style="float: center;visibility:hidden;
        width: 5%;
        position: fixed; margin-left:48%">新增</button>
       </div>
       </form>
       
        </body>
        </html>
       



<?php }
}
