<html>
    <head>
        <meta charset="utf-8">
        <title>修改供應商</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
         
          <form action='../../index.php' id="update_vendor" method='POST'>
               <input type='hidden' name='func' value='do_update_vendor'>
               <input type='hidden' name='id' value='{$id}'>
               
           <div class="panel panel-success"> 
<div class="panel-heading"> 
修改供應商資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
	供應商名稱
	</th> 
	<td> 
	 <input type="text" name="vendor_name" class="form-control" value="{$vendor_name}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="vendor_mail" class="form-control" value="{$vendor_mail}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	聯絡電話
	</th> 
	<td> 
	 <input type="text" name="vendor_tel" class="form-control" value="{$vendor_tel}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	傳真
	</th> 
	<td> 
	 <input type="text" name="vendor_fax" class="form-control" value="{$vendor_fax}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input type="text" name="vendor_address" class="form-control" value="{$vendor_address}">
	</td> 
</tr> 

</table> 
</div> 
</div>
     <div style="display: none;">
           <button form="update_vendor" id="mybutton" type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">修改</button>
       </div>
       </form>
        </body>
        </html>
       



