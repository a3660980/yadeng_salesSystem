    {*頁首檔案*}
    {include file='../header.tpl'}
       {include file='../bar/navbar.tpl'}
       <script  type="text/javascript">
    function iframeReload() {
        document.getElementById('output_frame').contentWindow.location.reload(true);
    }
    </script>
<div class="bread">
            <ol class="breadcrumb">
                <li class="active">使用者管理</li>
                
            </ol>
        </div>
        
        
        <div class="row">

                <div class="col-xs-12">
                    <label style="margin-top:30px;font-size:30px;margin-left:50px">使用者管理</label>
                    
                    <span class="navbar-right" style="margin-right:50px">
                    <form id="add_user" action='../../index.php' method='POST' target="output_frame" >
                        <input type="hidden" name="func" value="add_user_page">
                      
                        <button  onclick="iframeReload()" form='add_user' type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteaccount" data-whatever="@mdo">
                        <i class="plus icon"></i>新增使用者</button>
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
                      
                      
        
            
            
            <div class="row">
                 
             
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">使用者編號</span>
                    <input type="text"  name="欄位名稱">
                   </div>
                   <br>
                  
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">使用者帳號</span>
                    <input type="text"  name="欄位名稱">
                    <br>
                   </div>
                 </div>
                 
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">真實姓名</span>
                    <input type="text" name="欄位名稱">
                    </div>
                    <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Email</span>
                    <input type="text" name="欄位名稱">
                    <br>
                    </div>
                 </div>
                 
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                     <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">手機號碼</span>
                    <input type="text" name="欄位名稱">
                    </div>
                    <br>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">職稱</span>
                    <select name="position" class="form-control">
                        <option>員工</option>
                        <option>老闆</option>
                    </select>
                    <br>
                    </div>
                    
                    
                 </div>
                 
                 <div class="col-md-1"></div>
                 <div class="col-md-2">
                 <div class="col-md-1" style="margin-top:3%;margin-left:2%">
                        <button type="button" onclick="alert" class="btn btn-primary" id="addbtn"><i class="search icon"></i>查詢</button>
                     </div>
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
            <table class="hovertable" border=1>
                <tr> 
                    
                    <th>使用者編號</th> 
                    <th>使用者帳號</th>
                    <th>使用者密碼</th>
                    <th>真實姓名</th> 
                    <th>Email</th>
                    <th>手機號碼</th> 
                    <th>職稱</th> 
                </tr> 
                {foreach from=$value item="row"}
                        <tr>
                            <th>{$row.User_id}</th>
                            <th>{$row.Username}</th>
                            <th>{$row.Passhash}</th>
                            <th>{$row.Realname}</th>
                            <th>{$row.Email}</th>
                            <th>{$row.Cellphone}</th>
                            <th>{$row.Position}</th>
                            
                        </tr>
                    {/foreach}
        
    </table>
   <div style="margin-left:150px;margin-right:150px;">
    <center>{$r}</center>
    </div>







{*頁尾檔案*}
{include file='../foot.tpl'}