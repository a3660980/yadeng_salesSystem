<?php
/* Smarty version 3.1.29, created on 2016-06-05 07:20:48
  from "/home/ubuntu/workspace/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5753d2d0e42696_06816122',
  'file_dependency' => 
  array (
    '27a7ce11fc022f496ae6acd16321afe3f7fbaf28' => 
    array (
      0 => '/home/ubuntu/workspace/templates/login.tpl',
      1 => 1465111245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:registered.tpl' => 1,
  ),
),false)) {
function content_5753d2d0e42696_06816122 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="/css/semantic.css" rel="stylesheet" >
  <link href="/css/login.css" rel="stylesheet" media="screen">
  
   <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
  type="text/javascript">
    function iframeReload() {
       // document.getElementById('output_frame').contentWindow.location.reload(true);
        //document.getElementById("add_btn").style.visibility = "visible";
    }
    
    
  

    function submitFrame(){

        var MyIFrame = document.getElementById("output_frame");
        var MyIFrameDoc = (MyIFrame.contentWindow || MyIFrame.contentDocument);
        if (MyIFrameDoc.document) { MyIFrameDoc = MyIFrameDoc.document;
           MyIFrameDoc.getElementById("mybutton").click();
           //document.getElementById("add_btn").style.visibility = "hidden";
        }

}

    <?php echo '</script'; ?>
>
</head>

<body>
         
         
         
           <!--彈跳視窗開始-->
              <div class="modal fade" id="myModal" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content">
                      
                      <div class="modal-header">
                          
                      <button type="button" class="close" data-dismiss="modal">
                          <span  aria-hidden="true"><font size="5">X</font></span><span class="sr-only">Close</span></button>
                      </div>
                        <div class="modal-body">          
                           <!-- <iframe name="output_frame" src="../register.php" id="output_frame" frameborder="0" scrolling="auto" width="100%" height="450">
                            </iframe> -->
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:registered.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </div>  
                        <div class="modal-footer">
                            <button id="add_btn" form="do_register" onclick="submitFrame()" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#tip" >註冊</button>
                            <button class="btn btn-success"  data-dismiss="modal">取消</button>
                        </div>
                  </div>
                </div>
                  </div>
              <!--彈跳視窗結束-->
         
         
          
          
  <div style="margin-top:150px">
    <h1><p><center><font size = 6 color = white face = arial>雅登精品名店</font></center></p>
   <p><center><font size = 5 color = white face = arial>進銷存管理系統</font></center></p>
   </h1>
   <br>
   <br>
   <form id="do_login" action="../index.php" method="POST" >
     <input type='hidden' value="do_login" name="func">
    <center>
      <div class="container">
      <div class="panel panel-default" style="width:35%;">
        <div class="panel-heading" style="height:50%">
          <font class="text-center" color="#9F0050" size="6">LOGIN </font>
        </div>
        <div class="panel-body">
          <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="user icon"></i></span>
  <input form="do_login" type="text" class="form-control" name="user"   aria-describedby="basic-addon1" placeholder="username" required>
</div>
           <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="lock icon"></i></span>
  <input form="do_login" type="password" class="form-control" name="password"  aria-describedby="basic-addon1" placeholder="password" required>
</div>
		  
		  <p></p>
		  <center>
          <button class="btn btn-small btn-primary" name="submit"  type="submit" style="width:40%; height:30px; background-color:#9F0050; border-color:#9F0050">登入</button>
           <button onclick="iframeReload()"  class="btn btn-small btn-primary" name="" data-toggle="modal" data-target="#myModal"  data-whatever="@mdo"  type="button" style="width:40%; height:30px; background-color:#9F0050; border-color:#9F0050">註冊</button>
           <p></p>
           </form>
           
             

            </center>
           
   
    </div>
    </div>
</div>
 </center>

 </div>
 <br><br>
<center>
<font size="1" color="white">Copyrighy © 2016 KUAS MIS B CLASS. All rights reserved | Desgin By JohnnyYu </font>
</center>

</body>

</html><?php }
}
