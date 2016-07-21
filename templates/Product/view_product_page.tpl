{include file='../header.tpl'}
       <style type="text/css">
.thumb-image{
float:left;width:200px;position:relative;padding:5px;
}</style>
    
         
          <form action='../../index.php' id="update_product" method='POST'>
               <input type='hidden' name='func' value='do_update_product'>
               <input type='hidden' name='id' value='{$id}'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
修改產品資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 
<tr> 
		<th width="160px"> 
			商品編號
		</th> 
		<td>  
			<input disabled="disabled" type='text' name='product_code' class="form-control" value="{$code}">
		</td> 
</tr>
<tr> 
		<th width="160px"> 
			商品名稱
		</th> 
		<td>  
			<input disabled="disabled" type='text' name="product_name" class="form-control" value="{$product_name}">
		</td> 
</tr> 
<tr height="200"> 
	<th> 
	商品圖片
	</th> 
	<td>
		<div id="image-holder"><img src='{$img}' id="pic" class="thumb-image"></div>
		
		</div>
	</td> 
</tr> 

<tr> 
	<th> 
	單價
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="product_price" class="form-control" value="{$product_price}"> 
	</td> 
</tr> 

<tr> 
	<th> 
	倉位
	</th> 
	<td> 
		<select name="product_shelf" class="form-control" disabled="disabled"> 
			{foreach from=$shelf item="row"}
			{if $row.Shelf_id==$product_shelf}
			<option value="{$row.Shelf_id}" selected="selected">{$row.Shelf_id}__{$row.Shelf_name}</option>
			{else}
			<option value="{$row.Shelf_id}">{$row.Shelf_id}__{$row.Shelf_name}</option>
			{/if}
			{/foreach}
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	供應商
	</th> 
	<td> 
		<select name="product_vendor" class="form-control" disabled="disabled">
			{foreach from=$vendor item="row"}
			{if $row.Vendor_id=$product_vendor}
			<option value="{$row.Vendor_id}" selected="selected">{$row.Vendor_id}__{$row.Name}</option>
			{else}
			<option value="{$row.Vendor_id}">{$row.Vendor_id}__{$row.Name}</option>
			{/if}
			{/foreach}
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	備註
	</th> 
	<td> 
	 <input disabled="disabled" type="text" name="product_remark" class="form-control" value="{$product_remark}"> 
	</td> 
</tr> 
</table> 
</div> 
</div>

       </form>
        </body>
        </html>
       



