<html>
    <head>
        <meta charset="utf-8">
        <title>修改進貨訂單資料</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
       
          <form action='../../html/Purchase/do_update_purchase.php' id="add_purchase" method='POST'>
               <input type='hidden' name='func' value='do_add_purchase'>
            <div class="t" >
         <b><p class="text-center" style="font-family:微軟正黑體">進貨訂單</p></b>
            </div>
            
            <div class="row" >
               
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                         
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">廠商編號</span>
                       <input type="text" name='vendor_id' class="form-control">
                </div>
                <br>
                         <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">進貨日期</span>
                <input type="text" name='customer_id' class="form-control">
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
                  
                 
                  </div>
               
             

    <br/>
    
<HR color="#8B4513"  width=95%>
	

 <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_id">產品編號</label><br></div>
                    <input type="text"  class="form-control" name="product_id[]">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_name">產品名稱</label><br></div>
                    <input type="text" class="form-control" name="product_name[]" >
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_quantity">數量</label><br></div>
                    <input type="text" class="form-control" name="product_quantity[]">
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_price">單價</label><br></div>
                    <input type="text" class="form-control" name="product_price[]" disabled="disabled" >
               </div>
          </div>
           <div class="col-md-2">
               <div class="input-group">
                    <div style="text-align:center">
                    <label for="product_sum">小計</label><br></div>
                    <input type="text" class="form-control" name="product_sum[]" disabled="disabled">
                    
               </div>
          </div>
     </div>
       
        <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
     <div>
           <font size=5  style=font-family:微軟正黑體;>總計：</font>
       </div>
       </form>
        </body>
       
        </html>
       