<?php
/* Smarty version 3.1.29, created on 2016-06-05 08:25:27
  from "/home/ubuntu/workspace/templates/Depot/show_depot_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5753e1f7495a21_05479253',
  'file_dependency' => 
  array (
    '3936b3fc39c1a41a6eef9b7f2fa70d122c58cf22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Depot/show_depot_page.tpl',
      1 => 1465115123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../bar/navbar.tpl' => 1,
    'file:../foot.tpl' => 1,
  ),
),false)) {
function content_5753e1f7495a21_05479253 ($_smarty_tpl) {
?>
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../bar/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <?php echo '<script'; ?>
  type="text/javascript">
    function iframeReload() {
        document.getElementById('output_frame').contentWindow.location.reload(true);
    }
    <?php echo '</script'; ?>
>
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">庫存管理</a></li></td>
             
		       <li><a href="../../index.php?func=show_inventory_page">盤點單管理</a></li>
	
            </ol>
        </div>
        
        <div class="row">
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">庫存管理</label>

<!--彈跳視窗開始-->
              <div class="modal fade" id="deleteaccount" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md ">
                  <div class="modal-content">
                      
                      <div class="modal-header">
                          
                      <button type="button" class="close" data-dismiss="modal">
                          <span  aria-hidden="true"><font size="5">X</font></span><span class="sr-only">Close</span></button>
                      </div>
                        <div class="modal-body">          
                            <iframe name="output_frame" src="../../index.php" id="output_frame" frameborder="0" scrolling="auto"  style="width:100%; height:75%;">
                            </iframe>
                        </div>  
                        <div class="modal-footer">
                            <button id="add_btn"  onclick="submitFrame()" type="submit" class="btn btn-danger" >確認</button>
                            <button id='close_btn' onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">關閉</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
            </div>
            <HR color="	#8B4513" size="100" width=95<?php echo '%>';?>
                 
       <form action="../../index.php" method="POST" id="search_depot">
            <input type="hidden" name="func" value="show_depot_page">
            <div class="row">
             
                 <div class="col-md-2"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品編號</span>
                    <input type="text"  name="code">
                   </div>
                   <br>
                  
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品名稱</span>
                    <input type="text"  name="name">
                    <br>
                   </div>
                 </div>
                 
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品數量</span>
                    <input type="text" name="quota">
                    </div>
                    <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品單價</span>
                    <input type="text" name="price">
                    <br>
                    </div>
                 </div>
                 
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                 <div class="col-md-1" style="margin-top:3%;margin-left:2%">
                        <button form="search_depot" type="submit" onclick="alert" class="btn btn-primary" id=""><i class="search icon"></i>查詢</button>
                     </div>
                     </div>
                     </div>
                     
            </form>
            <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>
           
           <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">查無資料</label>
                </div>
                <?php } else { ?>
                
                 <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">共有<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
筆資料</label>
                </div>

                <?php }?>
            <table class="hovertable" border=1>
                <tr> 
                    
                    <th>商品編號</th> 
                    <th>商品名稱</th> 
                    <th>數量</th> 
                    <th>單價</th>
                    <th>倉位</th> 
                    <th>備註</th> 
                </tr> 
                <?php
$_from = $_smarty_tpl->tpl_vars['value']->value;
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
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Code'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['Quanta'] < 1) {?>
                            <th><font color="red"><?php echo $_smarty_tpl->tpl_vars['row']->value['Quanta'];?>
</font></th>
                            <?php } else { ?>
                              <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Quanta'];?>
</th>
                            <?php }?>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['UnitPrice'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Shelf_name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Remark'];?>
</th>
                            
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        
    </table>
   <div style="margin-left:150px;margin-right:150px;">
    <center><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</center>
    </div>








<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
