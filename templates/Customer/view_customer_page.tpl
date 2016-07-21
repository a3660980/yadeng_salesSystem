<html>
    <head>
        <meta charset="utf-8">
        <title>修改產品資料</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/css/show_sales.css" rel="stylesheet" media="screen">
       <link href="/css/sales_list.css" rel="stylesheet" media="screen">
    </head>

    <body>
<script src="../../js/productlist.js"></script>

         
          <form action='../../index.php' id="add_customer" method='POST'>
               <input type='hidden' name='func' value='do_update_customer'>
               <input type='hidden' name='id' value='{$id}'>
<div class="panel panel-success"> 
<div class="panel-heading"> 
編輯會員資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			姓名
		</th> 
		<td>  
			<input disabled="disabled" type='text' name='name' class="form-control" value="{$name}"> 
		</td> 
</tr> 

<tr> 
	<th> 
	地址
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="add" class="form-control" value="{$add}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	行動電話
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="cell" class="form-control" value="{$cell}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	出生年月日
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="birth" class="form-control" value="{$birth}"> 
	</td> 
</tr> 
		
<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="email" class="form-control" value="{$email}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	性別
	</th> 
	<td> 
	{if $sex==1}
	 <input disabled="disabled" type="radio" name="sex" value="1" class="radio-inline" checked="checked"/> 男
     <input disabled="disabled" type="radio" name="sex" value="0" class="radio-inline"/>  女
     {else}
     <input disabled="disabled" type="radio" name="sex" value="1" class="radio-inline" /> 男
     <input disabled="disabled" type="radio" name="sex" value="0" class="radio-inline" checked="checked"/>  女
     {/if}
	</td> 
</tr> 

</table> 
</div> 
</div>

    
       </form>
        </body>
        </html>
       



