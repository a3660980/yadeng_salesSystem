    {*頁首檔案*}
    {include file='../header.tpl'}
    {include file='../bar/navbar.tpl'}
    <script  type="text/javascript">
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

    </script>
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
            
          
            
            <HR color="	#8B4513" size="100" width=95%>
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
           
 

           {if $count==0}
           
           <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">查無資料</label>
                </div>
                {else}
                <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">共有{$count}筆資料</label>
                </div>
                {/if}
            <table class="hovertable" border=1 >
                <tr> 
                    <th>訂單編號</th> 
                    <th>訂單日期</th> 
                    <th>顧客姓名</th> 
                    <th>電話</th> 
                    <th>會員類型</th> 
                    <th>管理</th> 
                </tr>
                
                {foreach from=$value item="row"}
                        <tr>
                            <th>{$row.Sales_Order_id}</th>
                            <th>{$row.Date}</th>
                            <th>{$row.Name}</th>
                            <th>{$row.Cellphone}</th>
                            <th>{$row.Type}</th>
                            <th>
                                <form id="view_sales_{$row.Sales_Order_id}" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='view_sales_{$row.Sales_Order_id}' type="hidden" name="func" value="show_view_sales">
                                  <input form='view_sales_{$row.Sales_Order_id}' type="hidden" name="id" value="{$row.Sales_Order_id}">
                                  <button  onclick="iframeReload()" form='view_sales_{$row.Sales_Order_id}' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="unhide icon"></i>查看</button>
                                   </form>
                                   
                          
                                
                                
                                 <form id="update_sales_{$row.Sales_Order_id}" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_sales_{$row.Sales_Order_id}' type="hidden" name="func" value="show_update_sales">
                                  <input form='update_sales_{$row.Sales_Order_id}' type="hidden" name="id" value="{$row.Sales_Order_id}">
                                  <button  onclick="iframeReload()" form='update_sales_{$row.Sales_Order_id}' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                                   </form>
                              
                              <form id="delete_sales_{$row.Sales_Order_id}" action='../../index.php' method='POST'  >
                                  <input form='delete_sales_{$row.Sales_Order_id}' type="hidden" name="func" value="do_delete_sales">
                                  <input form='delete_sales_{$row.Sales_Order_id}' type="hidden" name="id" value="{$row.Sales_Order_id}">
                                   </form>
                                  <button  onclick=""  type="button" style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#delete_{$row.Sales_Order_id}" data-whatever="@mdo">
                                 <i class="trash outline icon"></i>刪除</button>
                             
                              
                              
                              
<!--彈跳視窗開始-->
              <div class="modal fade" id="delete_{$row.Sales_Order_id}" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button id="" form="delete_sales_{$row.Sales_Order_id}"  onclick="" type="submit" class="btn btn-danger" >確認</button>
                            <button onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">關閉</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
                            </th>
                            
                        </tr>
                    {/foreach}
        
    </table>
    <div style="margin-left:150px;margin-right:150px;">
    <center>{$r}</center>
    </div>


{*頁尾檔案*}
{include file='../foot.tpl'}

