<?php
/* Smarty version 3.1.29, created on 2016-06-06 03:17:02
  from "/home/ubuntu/workspace/templates/Customer/show_customer_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754eb2e634bc1_47684126',
  'file_dependency' => 
  array (
    '5cc2d2d87777518738d5e0bbf49c107f73bde62b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Customer/show_customer_page.tpl',
      1 => 1465183020,
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
function content_5754eb2e634bc1_47684126 ($_smarty_tpl) {
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

    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
$(function() {
    $( "#birth_id" ).autocomplete({
        source: '/html/Customer/search.php'
      
    });
});
<?php echo '</script'; ?>
>
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">會員管理</li>
                
            </ol>
        </div>
        
         <div class="row">
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">會員管理</label>
              
               <span class="navbar-right" style="margin-right:50px">
                    <form id="add_customer" action='../../index.php' method='POST' target="output_frame" >
                        <input form='add_customer' type="hidden" name="func" value="add_customer_page">
                      
                        <button  onclick="iframeReload()" form='add_customer' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                       <i class="plus icon"></i>建立新會員</button>
                    </form>
                    </span>
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
                            <button id="close_btn" onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">關閉</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
  
            </div>
            
             
            
            
<HR color="	#8B4513" size="100" width=95<?php echo '%>';?>
                <form id='search' action='../../index.php' method='POST'>
                <input type='hidden' name='func' value='show_customer_page'>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="input-group">
 
                        <span class="input-group-addon" id="basic-addon1">會員編號</span>
                        <input id="birth_id" autocomplete="off"  class="form-control" type="text" name="id" >
                        
                    </div>
                    <br>
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">客戶姓名</span>
                        <input autocomplete="off" class="form-control" type="text" name="name">
                    </div>
                </div>
                
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">客戶地址</span>
                        <input autocomplete="off" class="form-control" type="text"  name="add">
                    </div>
                    
                    <br>
                    
                     <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">客戶電話</span>
                        <input autocomplete="off" class="form-control" type="text" name="cell">
                    </div>          
                        
                </div>
                
               <div class="col-md-1"></div>
                <div class="col-md-3">
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
            <table class="hovertable" border=1>
                <tr> 
                    
                    <th>會員編號</th> 
                    <th>姓名</th> 
                    <th>地址</th> 
                    <th>行動電話</th> 
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
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Address'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Cellphone'];?>
</th>
                            <th>
                                 <form id="view_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='view_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="func" value="show_view_customer">
                                  <input form='view_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Customer_id'];?>
">
                                  <button  onclick="iframeReload()" form='update_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="unhide icon"></i>查看</button>
                              </form>
                                 
                              <form id="update_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="func" value="show_update_customer">
                                  <input form='update_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Customer_id'];?>
">
                                  <button  onclick="iframeReload()" form='update_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                              </form>
                              
                              <form id="delete_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
" action='../../index.php' method='POST'  >
                                  <input form='delete_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="func" value="do_delete_customer">
                                  <input form='delete_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Customer_id'];?>
">
                                   </form>
                                  <button  onclick=""  type="button" style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#delete_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
" data-whatever="@mdo">
                                 <i class="trash outline icon"></i>刪除</button>
                             
                              
                              
                              
<!--彈跳視窗開始-->
              <div class="modal fade" id="delete_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
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
                            <button id="" form="delete_customer_<?php echo $_smarty_tpl->tpl_vars['row']->value['Birth_id'];?>
"  onclick="" type="submit" class="btn btn-danger" >確認</button>
                            <button class="btn btn-success"  data-dismiss="modal">取消</button>
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


    </table >




<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
