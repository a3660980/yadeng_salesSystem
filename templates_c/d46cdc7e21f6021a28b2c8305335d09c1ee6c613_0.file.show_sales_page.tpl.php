<?php
/* Smarty version 3.1.29, created on 2016-06-16 14:09:12
  from "/home/ubuntu/workspace/templates/Sales/show_sales_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5762b308877924_15397218',
  'file_dependency' => 
  array (
    'd46cdc7e21f6021a28b2c8305335d09c1ee6c613' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Sales/show_sales_page.tpl',
      1 => 1466086147,
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
function content_5762b308877924_15397218 ($_smarty_tpl) {
?>
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../bar/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
  type="text/javascript">
    function iframeReload() {
        document.getElementById('output_frame').contentWindow.location.reload(true);
        document.getElementById("add_btn").style.visibility = "visible";
    }
    
    
  function closeFrame() {
        
          window.location.reload();
           
    }

    function submitFrame(){
     
        var MyIFrame = document.getElementById("output_frame");
        var MyIFrameDoc = (MyIFrame.contentWindow || MyIFrame.contentDocument);
        
        if (MyIFrameDoc.document) { MyIFrameDoc = MyIFrameDoc.document;
           MyIFrameDoc.getElementById("mybutton").click();
           document.getElementById("add_btn").style.visibility = "hidden";
        }

}


$(function() {
    $( "#birth_id" ).autocomplete({
        source: '/html/Customer/search.php'
      
    });
});

    <?php echo '</script'; ?>
>
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">訂單管理</li>
               

                
            </ol>
        </div>
        
     

        <div class="row">
           
                
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">銷貨訂單</label>
              
               <span class="navbar-right" style="margin-right:50px">
                    
                        <input type="hidden" name="func" value="add_sales_page">
                           <form id="add_sales" action='../../index.php' method='POST' target="output_frame" >
                     <input form="add_sales" type="hidden" name="func" value="add_sales_page">
                        <button  onclick="iframeReload()" form='add_sales' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                        <i class="plus icon"></i>建立新訂單</button>
                      </form>
                    </span>
             <!--彈跳視窗開始-->
              <div class="modal fade" id="deleteaccount" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                  <div class="modal-content">
                      
                      <div class="modal-header">
                          
                      <button type="button" class="close" data-dismiss="modal">
                          <span  aria-hidden="true"><font size="5">X</font></span><span class="sr-only">Close</span></button>
                      </div>
                        <div class="modal-body">          
                            <iframe name="output_frame" src="../../index.php" id="output_frame" frameborder="0" scrolling="auto"  style="width:100%; height:70%">
                            </iframe>
                        </div>  
                        <div class="modal-footer">
                            <button id="add_btn" form="add_order" onclick="submitFrame()" type="submit" class="btn btn-danger" >確認</button>
                            <button class="btn btn-success"  data-dismiss="modal">取消</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->

            </div>
            
          
            
            <HR color="	#8B4513" size="100" width=95<?php echo '%>';?>
            <form id='search' action='../../index.php' method='POST'>
                <input type='hidden' name='func' value='show_sales_page'>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">訂單編號</span>
                        <input autocomplete=”off” class="form-control" type="text" name="Sales_Order_id" >
                    </div>
                    <br>
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">訂單日期</span>
                        <input autocomplete=”off” class="form-control" type="date" name="date">
                    </div>
                </div>
                
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">電話號碼</span>
                        <input autocomplete=”off” class="form-control" type="text"  name="tel">
                    </div>
                    
                    <br>
                    
                     <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">顧客編號</span>
                        <input id="birth_id" autocomplete=”off” class="form-control" type="text" name="birth_id">
                    </div>          
                        
                </div>
                
               
                <div class="col-md-1">
                     
                      
                        <span>會員類型</span>
                    <br>
                    
                    <label style="margin-top:5px" class="c-input c-radio">
                      <input id="radio1" name="customer_type" value="一般客" type="radio" >
                      <span class="c-indicator"></span>
                      一般客
                    </label>
                    <br>
                    
                    <label style="margin-top:5px"  class="c-input c-radio">
                      <input id="radio2" name="customer_type" value="會員" type="radio">
                      <span class="c-indicator"></span>
                     會員
                    </label>
                </div>
           
                      
 
                <div class="col-md-1">
                     <button form='search' style="margin-top:20px"  type="submit"  class="btn btn-primary" id="addbtn" style="margin-left:80S%"><i class="search icon"></i>查詢</button>
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
            <table class="hovertable" border=1 >
                <tr> 
                    <th>訂單編號</th> 
                    <th>訂單日期</th> 
                    <th>顧客姓名</th> 
                    <th>電話</th> 
                    <th>會員類型</th> 
                    <th>管理</th> 
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
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Cellphone'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Type'];?>
</th>
                            <th>
                                <form id="view_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='view_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="func" value="show_view_sales">
                                  <input form='view_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
">
                                  <button  onclick="iframeReload()" form='view_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="unhide icon"></i>查看</button>
                                   </form>
                                   
                          
                                
                                
                                 <form id="update_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="func" value="show_update_sales">
                                  <input form='update_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
">
                                  <button  onclick="iframeReload()" form='update_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                                   </form>
                              
                              <form id="delete_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
" action='../../index.php' method='POST'  >
                                  <input form='delete_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="func" value="do_delete_sales">
                                  <input form='delete_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
">
                                   </form>
                                  <button  onclick=""  type="button" style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#delete_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
" data-whatever="@mdo">
                                 <i class="trash outline icon"></i>刪除</button>
                             
                              
                              
                              
<!--彈跳視窗開始-->
              <div class="modal fade" id="delete_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md ">
                  <div class="modal-content">
                      
                      <div class="modal-header">
                          
                      <button type="button" class="close" data-dismiss="modal">
                          <span  aria-hidden="true"><font size="5">X</font></span><span class="sr-only">Close</span></button>
                      </div>
                        <div class="modal-body">          
                              <label sytle="text-align:center;">您確定要刪除？</label>
                        </div>  
                        <div class="modal-footer">
                            <button id="" form="delete_sales_<?php echo $_smarty_tpl->tpl_vars['row']->value['Sales_Order_id'];?>
"  onclick="" type="submit" class="btn btn-danger" >確認</button>
                            <button onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">關閉</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
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
?>


<?php }
}
