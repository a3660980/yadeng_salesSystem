<?php
/* Smarty version 3.1.29, created on 2016-06-05 16:59:53
  from "/home/ubuntu/workspace/templates/Purchase/show_purchase_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57545a89623d94_92955752',
  'file_dependency' => 
  array (
    '5cc68572a87bd42fbae2a5a508375d194c35181b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Purchase/show_purchase_page.tpl',
      1 => 1465145979,
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
function content_57545a89623d94_92955752 ($_smarty_tpl) {
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
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">訂單管理</li>
               

                
            </ol>
        </div>
        
         <div class="row">
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">進貨訂單</label>
                    
               <span class="navbar-right" style="margin-right:50px">
                    <form id="add_purchase" action='../../index.php' method='POST' target="output_frame" >
                        <input type="hidden" name="func" value="add_purchase_page">
                      
                        <button  onclick="iframeReload()" form='add_purchase' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                        <i class="plus icon"></i>建立新訂單</button>
                    </form>
                    </span>
             <!--彈跳視窗開始-->
              <div class="modal fade" id="deleteaccount" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg ">
                  <div class="modal-content">
                      
                      <div class="modal-header">
                          
                      <button type="button" class="close" data-dismiss="modal">
                          <span  aria-hidden="true"><font size="5">X</font></span><span class="sr-only">Close</span></button>
                      </div>
                        <div class="modal-body">          
                            <iframe name="output_frame" src="../../index.php" id="output_frame" frameborder="0" scrolling="auto"  style="width:100%; height:80%;">
                            </iframe>
                        </div>  
                        <div class="modal-footer">
                            <button id="add_btn" form="" onclick="submitFrame()" type="submit" class="btn btn-danger" >新增</button>
                            <button class="btn btn-success"  data-dismiss="modal">取消</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
            </div>
            <HR color="	#8B4513" size="100" width=95<?php echo '%>';?>
                 <form id="search_purchase" action="../../index.php" method="POST">
                      <input type="hidden" name="func" value="show_purchase_page">
            <div class="row">
             
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">訂單編號</span>
                    <input type="text"  name="id">
                   </div>
                   <br>
                    <div class="input-group">  
                    <span class="input-group-addon" id="basic-addon1">廠商電話</span>
                    <input type="text" name="tel">

                 </div>
                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">廠商代號</span>
                    <input type="text" name="vendor_id">
                    </div>
                    <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">廠商名稱</span>
                    <input type="text" name="vendor_name">
                    </div>
                 </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">進貨日期</span>
                        <input autocomplete=”off” class="form-control" type="date" name="date">
                    </div>
                    <br>
                    
                      </div>
                      
                         
               
                    <div class="col-md-1" style="margin-top:3%;margin-left:6%">
                        <button form="search_purchase" type="submit" onclick="alert" class="btn btn-primary" id=""><i class="search icon"></i>查詢</button>
                     </div>
                    </div>
                </form>
              
              <div>
                  
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
                    <th>進貨日期</th> 
                    <th>廠商代號</th> 
                    <th>廠商名稱</th> 
                    <th>廠商電話</th> 
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
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Vendor_id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['row']->value['Telphone'];?>
</th>
                            <th> 
                              <form id="update_purchase_<?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_purchase_<?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
' type="hidden" name="func" value="show_update_purchase">
                                  <input form='update_purchase_<?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
' type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
">
                                  <button  onclick="iframeReload()" form='update_purchase_<?php echo $_smarty_tpl->tpl_vars['row']->value['Purchase_Order_id'];?>
' type="submit"
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                              </form>
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
 </div>
</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
