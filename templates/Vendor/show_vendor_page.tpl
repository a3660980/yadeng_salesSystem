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
          // document.getElementById("add_btn").style.visibility = "hidden";
        }

}
    </script>
        <div class="bread">
            <ol class="breadcrumb">
                <li class="active">供應商管理</li>
                
            </ol>
        </div>
<div class="row">
                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">供應商管理</label>
                    
               <span class="navbar-right" style="margin-right:50px">
                    <form id="add_vendor" action='../../index.php' method='POST' target="output_frame" >
                        <input type="hidden" name="func" value="show_add_vendor">
                        <button  onclick="iframeReload()" form='add_vendor' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                       <i class="plus icon"></i>新增供應商</button>
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
                            <iframe name="output_frame" src="../../index.php" id="output_frame" frameborder="0" scrolling="auto"  style="width:100%; height:70%;">
                            </iframe>
                        </div>  
                        <div class="modal-footer">
                            <button id="add_btn" form="" onclick="submitFrame()" type="submit" class="btn btn-danger" >確認</button>
                            <button class="btn btn-success" onclick="closeFrame()" data-dismiss="modal">取消</button>
                        </div>
                  </div>
                </div>
                  </div>
              </div>
              <!--彈跳視窗結束-->
            </div>
            <HR color="	#8B4513" size="100" width=95%>
       <form id="search_vendor" action="../../index.php" method="POST">
            <input type='hidden' name='func' value='show_vendor_page' />
       <div class="row">
             
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">供應商編號</span>
                    <input type="text"  name="id" >
                   </div>
                   </div>

                   <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">供應商名稱</span>
                    <input type="text"  name="name">
                   </div>
                   </div>

            <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">聯絡電話</span>
                    <input type="text"  name="tel">
                   </div>
                   </div>
</div>
       
       
    <div id="order_search" class="order_search">
          <div style="margin-left:85%;">
              
              <button form='search_vendor' type="submit" class="btn btn-primary"><i class="search icon"></i>查詢</button>
           </div> 
           </form>
            <div>
                 
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
                    <th>供應商編號</th> 
                    <th>供應商名稱</th> 
                    <th>聯絡電話</th> 
                    <th>EMAIL</th> 
                    <th>管理</th> 
                </tr> 
               {foreach from=$value item="row"}
                        <tr>
                            <th>{$row.Vendor_id}</th>
                            <th>{$row.Name}</th>
                            <th>{$row.Telphone}</th>
                            <th>{$row.Email}</th>
                            <th>
                                  <form id="update_vendor_{$row.Vendor_id}" action='../../index.php' method='POST' target="output_frame" >
                                  <input form='update_vendor_{$row.Vendor_id}' type="hidden" name="func" value="show_update_vendor">
                                  <input form='update_vendor_{$row.Vendor_id}' type="hidden" name="id" value="{$row.Vendor_id}">
                                  <button  onclick="iframeReload()" form='update_vendor_{$row.Vendor_id}' type="submit" 
                                  style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                                  <i class="edit icon"></i>修改</button>
                              </form>
                              
                              <form id="delete_vendor_{$row.Vendor_id}" action='../../index.php' method='POST'  >
                                  <input form='delete_vendor_{$row.Vendor_id}' type="hidden" name="func" value="do_delete_vendor">
                                  <input form='delete_vendor_{$row.Vendor_id}' type="hidden" name="id" value="{$row.Vendor_id}">
                                   </form>
                                  <button  onclick=""  type="button" style="background:none;border:none;margin:0;padding:0;color:#3B7A57;" data-toggle="modal" data-target="#delete_{$row.Vendor_id}" data-whatever="@mdo">
                                 <i class="trash outline icon"></i>刪除</button>
                             
                              
                              
                              
<!--彈跳視窗開始-->
              <div class="modal fade" id="delete_{$row.Vendor_id}" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button id="" form="delete_vendor_{$row.Vendor_id}"  onclick="" type="submit" class="btn btn-danger" >確認</button>
                            <button class="btn btn-success"  data-dismiss="modal">取消</button>
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
</div>
 </div>
{*頁尾檔案*}
{include file='../foot.tpl'}