<html>
    <head>
        <meta charset="utf-8">
        <title>新增會員</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../../index.php' id="add_inventory" method='POST'>
               <input type='hidden' name='func' value='do_add_inventory'>
<div class="panel panel-success"> 
<div class="panel-heading"> 
申請會員資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			盤點日期
		</th> 
		<td>  
			<input type='date' name='name' class="form-control"> 
		</td> 
</tr> 

<tr> 
	<th> 
	使用者編號
	</th> 
	<td> 
	 <input type="text" name="add" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	產品名稱
	</th> 
	<td> 
	 <input type="text" name="cell" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	帳上數量
	</th> 
	<td> 
	 <input type="number" name="birth" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	盤點數量
	</th> 
	<td> 
	 <input type="number" name="email" class="form-control"> 
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
       



