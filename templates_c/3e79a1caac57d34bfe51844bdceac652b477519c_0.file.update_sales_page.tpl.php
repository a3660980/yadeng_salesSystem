<?php
/* Smarty version 3.1.29, created on 2016-06-06 05:18:11
  from "/home/ubuntu/workspace/templates/Sales/update_sales_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5755079324a9e7_80657003',
  'file_dependency' => 
  array (
    '3e79a1caac57d34bfe51844bdceac652b477519c' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Sales/update_sales_page.tpl',
      1 => 1465185859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../foot.tpl' => 1,
  ),
),false)) {
function content_5755079324a9e7_80657003 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="../../js/productlist.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
$(function() {
     
     $('#radio1').click(function(){
       $("#mm").hide(); 
    })
       
       $('#radio2').click(function(){
       $("#mm").show(); 
    })
     
    $( "#birth_id" ).autocomplete({
        source: '/html/Customer/search.php',
        select: function(event, ui) {
                $("#name").val(ui.item.name);
                $("#cell").val(ui.item.cell);
                
            }
      
    });
    
    
    $( "#code0" ).autocomplete({
        source: '/html/Product/search.php',
        
        select: function(event, ui) {
                $('#name0').val(ui.item.name);
                $('#price0').val(ui.item.price);
                $('#quota0').val(ui.item.quota);
                $('#radio2').attr('checked',true);
            }
    });
    
    
    $("#quota0").change(function(){
       $("#sum"+0).attr("value",$("#price"+0).val()*$("#quota"+0).val()*$("#discount"+0).val());  
    });
    
     $("#discount0").change(function(){
       $("#sum"+0).attr("value",$("#price"+0).val()*$("#quota"+0).val()*$("#discount"+0).val());  
    });
});

<?php echo '</script'; ?>
>

  
       
          <form action='../../index.php' id="update_order" name="update_order" method='POST'>
               <input type='hidden' name='func' value='do_update_sales'>
               <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">銷貨訂單</p></b>
            </div>
            
            <div class="row">
               
                    <div class="col-md-3"></div>
                    <div id="mm" class="col-md-2">

                
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">會員編號</span>
                <input type='text' name='customer_id' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" disabled="disabled" >
                </div>
                <br>
                     <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">手機號碼</span>
                 <input type="text" name="cell" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
" disabled="disabled" >
                 
                  </div>
                  <br>
                   <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">顧客姓名</span>
               <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Customer_name']->value;?>
" disabled="disabled" >
                     </div>
                     
                <br>
                
                     </div>
                     
               <div class="col-md-2 "></div>
               <div class="col-md-3">
                        <span>會員類型</span>
                    <br>
                    
                    <?php if ($_smarty_tpl->tpl_vars['customer_type']->value == "一般客") {?>
                    <label style="margin-top:10%" class="c-input c-radio">
                      <input id="radio1" name="customer_type" value="一般客" type="radio" checked="checked" disabled="disabled" />
                      <span class="c-indicator"></span>
                      一般客
                    </label>
                    <br>
                    <label style="margin-top:12%"  class="c-input c-radio">
                      <input id="radio2" name="customer_type" value="會員" type="radio" disabled="disabled" >
                      <span class="c-indicator"></span>
                     會員
                    </label>
                    <?php } else { ?>
                    <label style="margin-top:10%" class="c-input c-radio">
                      <input id="radio1" name="customer_type" value="一般客" type="radio" disabled="disabled" />
                      <span class="c-indicator"></span>
                      一般客
                    </label>
                    <br>
                    <label style="margin-top:12%"  class="c-input c-radio">
                      <input id="radio2" name="customer_type" value="會員" type="radio" checked="checked" disabled="disabled" >
                      <span class="c-indicator"></span>
                     會員
                    </label>
                    <?php }?>
                </div>
               </div>
          </div>
               
            

    <br/>
<HR color="#8B4513" size="100" width=95<?php echo '%>';?>
     <div class="row" >
          <div class="col-md-1"></div>
          <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_id">產品編號</label><br></div>
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_name">產品名稱</label><br></div>
                    
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_quantity">數量</label><br></div>
                    
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_price">單價</label><br></div>
                   
               </div>
          </div>
        
           <div class="col-md-1">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_discount">折扣</label><br></div>
                    
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_sum">小計</label><br></div>
               </div>
          </div>
     </div>

     
     
      
      <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
      
      <input type="hidden" name="sales_line_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['sales_order_line_id'];?>
">
      <input type="hidden" name="product_pk[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['Product_id'];?>
">
     <div class="row" id="p1">
          <div class="col-md-1"></div>
          <div class="col-md-2">
               <div class="input-group">
                    <input id="code<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"  type="text" class="form-control" name="product_code[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['Code'];?>
">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input id="name<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"  type="text" class="form-control" name="product_name[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['Product_name'];?>
" >
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input type="number" class="form-control" name="product_quantity[]" id="quota<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['Quantity'];?>
">
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                    
                    <input type="text" class="form-control" name="product_price[]" id="price<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" disabled="disabled"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['UnitPrice'];?>
">
               </div>
          </div>
     
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input type="text" class="form-control" name="product_discount[]" id="discount<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['Discount'];?>
">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input type="text" class="form-control" name="product_sum[]" id="sum<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['foo']->value]['total'];?>
">
                    
               </div>
          </div>
     </div>
     
     <?php }
}
?>

    
       


     <div>
           <font size=5  style=font-family:微軟正黑體;>總計：</font>
       </div>
       
        <div style="display: none;">
           <button id="mybutton" form='update_order' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">修改</button>
       </div>
       
       </form>
       
   
       
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
