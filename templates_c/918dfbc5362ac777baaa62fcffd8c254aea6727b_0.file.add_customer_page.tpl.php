<?php
/* Smarty version 3.1.29, created on 2016-06-05 17:15:40
  from "/home/ubuntu/workspace/templates/Customer/add_customer_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57545e3c247e51_65485119',
  'file_dependency' => 
  array (
    '918dfbc5362ac777baaa62fcffd8c254aea6727b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Customer/add_customer_page.tpl',
      1 => 1465145810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
  ),
),false)) {
function content_57545e3c247e51_65485119 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


 
         
          <form action='../../index.php' id="add_customer" method='POST'>
               <input type='hidden' name='func' value='do_add_customer'>
<div class="panel panel-success"> 
<div class="panel-heading"> 
申請會員資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			姓名
		</th> 
		<td>  
			<input type='text' name='name' class="form-control"> 
		</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="add" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	行動電話
	</th> 
	<td> 
	 <input type="text" name="cell" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	出生年月日
	</th> 
	<td> 
	 <input type="date" name="birth" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="email" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	性別
	</th> 
	<td> 
	 <input type="radio" name="sex" value="1" class="radio-inline"/> 男
     <input type="radio" name="sex" value="0" class="radio-inline"/>  女
	</td> 
</tr> 

</table> 
</div> 
</div>

     <div style="display: none;">
           <button id="mybutton" form='add_customer' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
        </body>
        </html>
       



<?php }
}
