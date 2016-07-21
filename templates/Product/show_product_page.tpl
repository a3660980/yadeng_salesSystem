    {*頁首檔案*}
    {include file='../header.tpl'}
       {include file='../bar/navbar.tpl'}
              <style type="text/css">
.thumb-image{
width:150px;position:relative;padding:5px;
}</style>
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

    </script>
    
     <script>
$(function() {
    $( "#code" ).autocomplete({
        source: '/html/Product/search.php'
      
    });
});
</script>
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">產品管理</li>
                
            </ol>
        </div>
        
        <div class="row">
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">產品管理</label>
                    
               <span class="navbar-right" style="margin-right:50px">
                    <form id="add_product" action='../../index.php' method='POST' target="output_frame" >
                        <input type="hidden" name="func" value="add_product_page">
                      
                        <button  onclick="iframeReload()" form='add_product' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                        <i class="plus icon"></i>建立新產品</button>
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
                            <button id='close_btn' onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">關閉</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
            </div>
            <HR color="	#8B4513" size="100" width=95%>
       <form action="../../index.php" method="POST" id="search_product">
            <input type="hidden" name="func" value="show_product_page">
       <div class="row">
        <div class="col-md-2"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="">產品編號</span>
                    <input type="text"  name="code" id="code" >
                   </div>
                   <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品單價</span>
                    <input type="text"  name="price">
                   </div>
                   <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">產品名稱</span>
                    <input type="text"  name="name">
                   </div>
                   
                   </div>

                   <div class="col-md-1"></div>
                 <div class="col-md-2">
                      <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">供應商</span>
                    <select name="product_vendor" class="form-control">
                         <option value="">全部</option>
		         	{foreach from=$vendor item="row"}
		     	     <option value="{$row.Vendor_id}">{$row.Vendor_id}__{$row.Name}</option>
		     	{/foreach}
		</select>
                   </div>
                     
                   <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">倉位</span>
                   	<select name="product_shelf" class="form-control">
                   	     <option value="">全部</option>
                   	     {foreach from=$shelf item="row"}
			               <option value="{$row.Shelf_id}">{$row.Shelf_id}__{$row.Shelf_name}</option>
			          {/foreach}
          		</select>
                   </div>
                   </div>
                    <div style="margin-left:65%; margin-top:2%">
            <button form="search_product" type="submit" onclick="alert" class="btn btn-primary" id="addbtn" ><i class="search icon"></i>查詢</button>
            </div>
</div>
        
           
             </table>
            </form>
            <p></p><br>
            {if $count==0}
           
           <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">查無資料</label>
                </div>
                {else}
                <div style="text-align:center">
                <label style="font-size:20px;margin-top:20px">共有{$count}筆資料</label>
                </div>
                {/if}
            <table class="hovertable" border=1>
                <tr> 
                    
                    <th>商品編號</th>
                    <th>商品圖片</th>
                    <th>商品名稱</th> 
                    <th>單價</th>
                    <th>倉位</th>
                    <th>供應商名稱</th>
                    <th>備註</th> 
                    <th>管理</th>
                </tr> 
                {foreach  from=$value item="row"}
                        <tr>
                            <th>{$row.Code}</th>
                            <th><img src='{$row.imgURL}' class="thumb-image"></th>
                            <th>{$row.Name}</th>
                            <th>{$row.UnitPrice}</th>
                            <th>{$row.Shelf_name}</th>
                            <th>{$row.Vendor_name}</th>
                            <th>{$row.Remark}</th>
                            <th>
                                 <form id="view_product_{$row.Product_id}" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='view_product_{$row.Product_id}' type="hidden" name="func" value="show_view_product">
                                  <input form='view_product_{$row.Product_id}' type="hidden" name="id" value="{$row.Product_id}">
                                  <button  onclick="iframeReload()" form='view_product_{$row.Product_id}' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="unhide icon"></i>查看</button>
                                   </form>
                                 
                                 
                                 
                                  <form id="update_product_{$row.Product_id}" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_product_{$row.Product_id}' type="hidden" name="func" value="show_update_product">
                                  <input form='update_product_{$row.Product_id}' type="hidden" name="id" value="{$row.Product_id}">
                                  <button  onclick="iframeReload()" form='update_product_{$row.Product_id}' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                                   </form>
                              
                              <form id="delete_product_{$row.Product_id}" action='../../index.php' method='POST'  >
                                  <input form='delete_product_{$row.Product_id}' type="hidden" name="func" value="do_delete_product">
                                  <input form='delete_product_{$row.Product_id}' type="hidden" name="id" value="{$row.Product_id}">
                                   </form>
                                  <button  onclick=""  type="button" style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#delete_{$row.Product_id}" data-whatever="@mdo">
                                 <i class="trash outline icon"></i>下架</button>
                             
                              
                              
                              
<!--彈跳視窗開始-->
              <div class="modal fade" id="delete_{$row.Product_id}" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button id="" form="delete_product_{$row.Product_id}"  onclick="" type="submit" class="btn btn-danger" >確認</button>
                            <button onclick="closeFrame()" class="btn btn-success"  data-dismiss="modal">取消</button>
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