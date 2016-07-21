{include file='../header.tpl'}
<script src="../../js/productlist.js"></script>
    <script>
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

</script>

  
       
          <form action='../../index.php' id="update_order" name="update_order" method='POST'>
               <input type='hidden' name='func' value='do_update_sales'>
               <input type='hidden' name='id' value='{$id}'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">銷貨訂單</p></b>
            </div>
            
            <div class="row">
               
                    <div class="col-md-3"></div>
                    <div id="mm" class="col-md-2">

                
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">會員編號</span>
                <input type='text' name='customer_id' class="form-control" value="{$code}" disabled="disabled" >
                </div>
                <br>
                     <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">手機號碼</span>
                 <input type="text" name="cell" class="form-control" value="{$cell}" disabled="disabled" >
                 
                  </div>
                  <br>
                   <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">顧客姓名</span>
               <input type="text" name="name" class="form-control" value="{$Customer_name}" disabled="disabled" >
                     </div>
                     
                <br>
                
                     </div>
                     
               <div class="col-md-2 "></div>
               <div class="col-md-3">
                        <span>會員類型</span>
                    <br>
                    
                    {if $customer_type=="一般客"}
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
                    {else}
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
                    {/if}
                </div>
               </div>
          </div>
               
            

    <br/>
<HR color="#8B4513" size="100" width=95%>
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

     
     
      
      {for $foo=0 to $count}
      
      <input type="hidden" name="sales_line_id[]" value="{$row[$foo]['sales_order_line_id']}">
      <input type="hidden" name="product_pk[]" value="{$row[$foo]['Product_id']}">
     <div class="row" id="p1">
          <div class="col-md-1"></div>
          <div class="col-md-2">
               <div class="input-group">
                    <input id="code{$foo}"  type="text" class="form-control" name="product_code[]" value="{$row[$foo]['Code']}">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input id="name{$foo}"  type="text" class="form-control" name="product_name[]" value="{$row[$foo]['Product_name']}" >
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input type="number" class="form-control" name="product_quantity[]" id="quota{$foo}" value="{$row[$foo]['Quantity']}">
               </div>
          </div>
           <div class="col-md-1">
               <div class="input-group">
                    
                    <input type="text" class="form-control" name="product_price[]" id="price{$foo}" disabled="disabled"  value="{$row[$foo]['UnitPrice']}">
               </div>
          </div>
     
           <div class="col-md-1">
               <div class="input-group">
                   
                    <input type="text" class="form-control" name="product_discount[]" id="discount{$foo}" value="{$row[$foo]['Discount']}">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    
                    <input type="text" class="form-control" name="product_sum[]" id="sum{$foo}" disabled="disabled" value="{$row[$foo]['total']}">
                    
               </div>
          </div>
     </div>
     
     {/for}
    
       


     <div>
           <font size=5  style=font-family:微軟正黑體;>總計：</font>
       </div>
       
        <div style="display: none;">
           <button id="mybutton" form='update_order' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">修改</button>
       </div>
       
       </form>
       
   
       {*頁尾檔案*}
{include file='../foot.tpl'}