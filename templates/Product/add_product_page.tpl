{include file='../header.tpl'}
<style type="text/css">
.thumb-image{
float:left;width:200px;position:relative;padding:5px;
}</style>
<script src="../../js/image.js"></script>

          <form action='../../index.php' id="add_product" method='POST' enctype="multipart/form-data">
               <input type='hidden' name='func' value='do_add_product'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
新增產品資料
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 

<tr> 
		<th width="160px"> 
			商品編號
		</th> 
		<td>  
			<input type='text' name='product_code' class="form-control">
		</td> 
</tr>
<tr> 
		<th width="160px"> 
			商品名稱
		</th> 
		<td>  
			<input type='text' name='product_name' class="form-control">
		</td> 
</tr> 

<tr height="200"> 
	<th> 
	商品圖片
	</th> 
	<td>
		
		<div id="wrapper" style="margin-top: 20px;"><input id="fileUpload" name="fileUpload" accept="image/jpeg,image/gif,image/png" type="file"/> 
		<div id="image-holder"></div>
		
		</div>
	</td> 
</tr> 

<tr> 
	<th> 
	單價
	</th> 
	<td> 
	 <input type="number" name="product_price" class="form-control"> 
	</td> 
</tr> 

<tr > 
	<th> 
	倉位
	</th> 
	<td> 
		<select name="product_shelf" class="form-control">
			{foreach from=$shelf item="row"}
			<option value="{$row.Shelf_id}">{$row.Shelf_id}__{$row.Shelf_name}</option>
			{/foreach}
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	供應商
	</th> 
	<td> 
		<select name="product_vendor" class="form-control">
			{foreach from=$vendor item="row"}
			<option value="{$row.Vendor_id}">{$row.Vendor_id}__{$row.Name}</option>
			{/foreach}
		</select>
	 
	</td> 
</tr> 

<tr> 
	<th> 
	備註
	</th> 
	<td> 
	 <input type="text" name="product_remark" class="form-control"> 
	</td> 
</tr> 





</table> 
</div> 
</div>
     <div style="display:none;">
           <button form='add_product' type='submit' id="mybutton" class="btn btn-warning" style="float: center;visibility:hidden;
        width: 5%;
        position: fixed; margin-left:48%">新增</button>
       </div>
       </form>
       
        </body>
        </html>
       



