<?php
/* Smarty version 3.1.29, created on 2016-06-05 23:41:58
  from "/home/ubuntu/workspace/templates/Purchase/add_purchase_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5754b8c68cacd1_84625853',
  'file_dependency' => 
  array (
    'eaa102fa09cdcbcf50bf8bbe3476a3f5e0bdbd2f' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Purchase/add_purchase_page.tpl',
      1 => 1465170107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
  ),
),false)) {
function content_5754b8c68cacd1_84625853 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       
        <?php echo '<script'; ?>
>
$(function() {
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
       $("#sum"+0).attr("value",$("#price"+0).val()*$("#quota"+0).val());  
    });
    
});

<?php echo '</script'; ?>
>
          <form action='../../index.php' id="add_purchase" method='POST'>
               <input type='hidden' name='func' value='do_add_purchase'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">進貨訂單</p></b>
            </div>
            
            <div class="row" >
               
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                         
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">廠商編號</span>
                       <input  type="text" name='vendor_id' class="form-control">
                </div>
                <br>
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">進貨日期</span>
                <input type="date" name='customer_id' class="form-control">
                </div>
                     
                     
                <br>
                
                     </div>
               
             
               
               <div class="col-md-2"></div>
               <div class="col-md-2">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">廠商名稱</span>
               <input type="text" name="name" class="form-control">
                     </div>
                     <br>
                     <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">廠商電話</span>
                 <input type="text" name="cell" class="form-control">
                 
                  </div>
              
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-2" >
                     <span>型態</span>
                    <br>
                    <label style="margin-top:6%" class="c-input c-radio">
                    <input type="radio" id="radio1" name="purchase_type"  value="進貨" >
                    <span class="c-indicator"></span>
                      進貨
                    </label>
                    <br>
                    <label style="margin-top:8%" class="c-input c-radio">
                     <input type="radio" id="radio2" name="purchase_type"  value="退貨" >
                     <span class="c-indicator"></span>
                     退貨
                     </label>
                         </div>
                  </div>
               
             

    <br/>
     <button type="button" id="pro_btn" class="btn btn-primary" style="float:right;margin-right:5%"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>產品</button>
<HR color="#8B4513"  width=95<?php echo '%>';?>
	
<div class="row" >
          <div class="col-md-2"></div>
          <div class="col-md-2">
               <div class="input-group">
                   <div style="text-align:center">
                    <label for="product_id">產品編號</label><br></div>
               </div>
          </div>
           <div class="col-md-2">
               <div style="text-align:center">
                    <label for="product_name">產品名稱</label><br>
                    </div>
                    
               </div>
          
           <div class="col-md-1">
               <div style="text-align:center">
                    <label for="product_quantity">數量</label><br></div>
                   
               </div>
   
           <div class="col-md-1">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_price">單價</label><br></div>
                   
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
          <div class="col-md-2"></div>
          <div class="col-md-2">
               <div class="input-group">
                    
                    <input id="code0" type="text"  class="form-control" name="product_id[]">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input id="name0" type="text" class="form-control" name="product_name[]" >
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input id="quota0" type="number" class="form-control" name="product_quantity[]">
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input id="price0" type="text" class="form-control" name="product_price[]" disabled="disabled" >
               </div>
          </div>

           <div class="col-md-2">
               <div class="input-group">
                   
                    <input id="sum0" type="text" class="form-control" name="product_sum[]" disabled="disabled">
                    
               </div>
          </div>
     </div>
       

     <div>
           <button id="mybutton" form='add_order' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
           <font size=5  style=font-family:微軟正黑體;>總計：</font>
            <input class="form-control" type="text" id="lable1" nmae="sum"  value=0 disabled="disabled" >

       </div>
       </form>
        </body>
       
        </html>
       <?php }
}
