<?php
/* Smarty version 3.1.29, created on 2016-06-07 03:16:28
  from "/home/ubuntu/workspace/templates/Sales/add_sales_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57563c8c45a526_09728360',
  'file_dependency' => 
  array (
    '3d5f8b8c64a6bdbccf0be230b8dc4dc9cdd06070' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Sales/add_sales_page.tpl',
      1 => 1465269085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../foot.tpl' => 1,
  ),
),false)) {
function content_57563c8c45a526_09728360 ($_smarty_tpl) {
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
                sum();
                
            }
      
    });
    
    
    $( "#code0" ).autocomplete({
        source: '/html/Product/search.php',
        
        select: function(event, ui) {
                $('#name0').val(ui.item.name);
                $('#price0').val(ui.item.price);
                $('#quota0').val(ui.item.quota);
                $('#radio2').attr('checked',true);
                
                $( "#quota0" ).change();
            }
    });
    
    
    
    $("#quota0").change(function(){
       $("#sum"+0).attr("value",$("#price"+0).val()*$("#quota"+0).val()*$("#discount"+0).val());  
    
       sumtotal();
    });
    
     $("#discount0").change(function(){
       $("#sum"+0).attr("value",$("#price"+0).val()*$("#quota"+0).val()*$("#discount"+0).val()); 
     
       sumtotal();
    });
});

<?php echo '</script'; ?>
>
       
          <form action='../../index.php' id="add_order" name="add_order" method='POST'>
               <input type='hidden' name='func' value='do_add_sales'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">銷貨訂單</p></b>
            </div>
            
            <div class="row">
               
                    <div class="col-md-3"></div>
                    <div id="mm" class="col-md-2">

                
                         <div id="a" class="input-group">
                <span class="input-group-addon" id="basic-addon1">會員編號</span>
                <input id="birth_id" type='text' name='customer_id' class="form-control">
                </div>
                <br>
                     <div id="b" class="input-group">
                <span class="input-group-addon" id="basic-addon1">手機號碼</span>
                 <input id="cell" type="text" name="cell" class="form-control">
                 
                  </div>
                  <br>
                   <div id="c" class="input-group">
                      <span class="input-group-addon" id="basic-addon1">顧客姓名</span>
               <input id="name" type="text" name="name" class="form-control">
                     </div>
                     
                <br>
                
                     </div>
                     
               <div class="col-md-2 "></div>
               <div class="col-md-2">
                        <span>會員類型</span>
                    <br>
                    <label style="margin-top:10%" class="c-input c-radio">
                      <input id="radio1" name="customer_type" value="一般客" type="radio">
                      <span class="c-indicator"></span>
                      一般客
                    </label>
                    <br>
                    <label style="margin-top:12%"  class="c-input c-radio">
                      <input id="radio2" name="customer_type" value="會員" type="radio" checked>
                      <span class="c-indicator"></span>
                     會員
                    </label>
                </div>
                <div class="col-md-2">
                     <span>型態</span>
                    <br>
                    <label style="margin-top:10%" class="c-input c-radio">
                    <input type="radio" id="r1" name="sales_type"  value="銷貨"  checked>
                    <span class="c-indicator"></span>
                      銷貨
                    </label>
                    <br>
                    <label style="margin-top:12%" class="c-input c-radio">
                   
                     <input type="radio" id="r2" name="sales_type"  value="退貨" >
                     <span class="c-indicator"></span>
                     退貨
                     </label>
                         </div>
               </div>
          </div>
               
            

    <br/>
    <button type="button" id="pro_btn" class="btn btn-primary" style="float:right;margin-right:5%"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>產品</button>
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

     
     
     
     
     
     
     <div class="row" id="p1">
          <div class="col-md-1"></div>
          <div class="col-md-2">
               <div class="input-group">
                    <input id="code0"  type="text" class="form-control" name="product_id[]">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input id="name0"  type="text" class="form-control" name="product_name[]" >
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input  type="number" class="form-control" name="product_quantity[]" id="quota0">
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                    
                    <input  type="text" class="form-control" name="product_price[]" id="price0" disabled="disabled" >
               </div>
          </div>
     
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input type="text" class="form-control" name="product_discount[]" value="1" id="discount0">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input type="text" class="form-control" name="product_sum[]" id="sum0" disabled="disabled" >
                    
               </div>
          </div>
     </div>
     <div id="pro"></div>
       


     <div>
           <button id="mybutton" form='add_order' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
           <font size=5  style=font-family:微軟正黑體;>總計：</font>
            <input class="form-control" type="text" id="sum" nmae="sum"  value=0 disabled="disabled" >

       </div>
       </form>
       
       
       
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
