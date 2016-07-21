{include file='../header.tpl'}

 
         
          <form action='../../index.php' id="add_customer" method='POST'>
               <input type='hidden' name='func' value='do_add_customer'>
<div class="panel panel-success"> 
<div class="panel-heading"> 
申請會員資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			姓名
		</th> 
		<td>  
			<input type='text' name='name' class="form-control"> 
		</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="add" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	行動電話
	</th> 
	<td> 
	 <input type="text" name="cell" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	出生年月日
	</th> 
	<td> 
	 <input type="date" name="birth" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="email" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	性別
	</th> 
	<td> 
	 <input type="radio" name="sex" value="1" class="radio-inline"/> 男
     <input type="radio" name="sex" value="0" class="radio-inline"/>  女
	</td> 
</tr> 

</table> 
</div> 
</div>

     <div style="display: none;">
           <button id="mybutton" form='add_customer' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
        </body>
        </html>
       



