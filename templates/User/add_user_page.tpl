<html>
    <head>
        <meta charset="utf-8">
        <title>新增使用者</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../html/Register/do_register.php' id="add_vendor" method='POST'>
               <input type='hidden' name='func' value='do_add_sales'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
新增使用者資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
	使用者帳號
	</th> 
	<td> 
	 <input type="text" name="vendor_name" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	使用者密碼
	</th> 
	<td> 
	 <input type="text" name="vendor_mail" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	姓名
	</th> 
	<td> 
	 <input type="text" name="vendor_tel" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	Email
	</th> 
	<td> 
	 <input type="text" name="vendor_fax" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	手機號碼
	</th> 
	<td> 
	 <input type="text" name="vendor_address" class="form-control">
	</td> 
</tr> 

<tr> 
	<th> 
	職稱
	</th> 
	<td> 
	 <select name="position" class="form-control">
	      <option>員工</option>
	      <option>老闆</option>
	 </select>
	</td> 
</tr> 

</table> 
</div> 
</div>
     <div style="display: none;">
           <button id="mybutton" form='add_vendor' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
        </body>
        </html>
       



