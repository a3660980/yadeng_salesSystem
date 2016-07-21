<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="tip" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <iframe name="out_tip" id="out_tip" scr="" frameborder="0" scrolling="auto" ></iframe>
    </div>
  </div>
</div>
         
          <form action='../../html/Register/do_register.php' id="do_register" method='POST' target="out_tip">
               <input type='hidden' name='func' value='do_register'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
註冊帳號
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
     帳號
	</th> 
	<td> 
	 <input type="text" name="register_user" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	密碼
	</th> 
	<td> 
	 <input type="password" name="register_password" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	請再次輸入密碼
	</th> 
	<td> 
	 <input type="password" name="check_password" class="form-control"> 
	</td> 
</tr> 
<tr> 
	<th> 
	姓名
	</th> 
	<td> 
	 <input type="text" name="register_realname" class="form-control">
	</td> 
</tr> 
<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="register_email" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	手機
	</th> 
	<td> 
	 <input type="text" name="register_cellphone" class="form-control"> 
	</td> 
</tr> 



</table> 
</div> 
</div>
     <div style="display: none;">
           <button id="mybutton" form='do_register' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
       



