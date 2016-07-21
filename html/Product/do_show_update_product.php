<?php
$db=Database::initDB();
$id=$_POST['id'];

$sql="SELECT * FROM products WHERE Product_id = '$id'";
$stmt=$db->query($sql);
foreach($stmt->fetchAll() as $row) {
     $code=$row['Code'];
     $product_name=$row['Name'];
     $product_price=$row['UnitPrice'];
     $product_shelf=$row['Depot_ShelfShelf_id'];
     $product_vendor=$row['VendorVendor_id'];
     $product_remark=$row['Remark'];
     $product_imgurl=$row['imgURL'];
}

$sql="SELECT
`vendor`.`Name` , Vendor_id
FROM
`vendor`";
     $result=$db->query($sql);
     $tpl->assign("vendor",$result);
     
     $sql="SELECT Shelf_name,Shelf_id FROM depot_shelf";
     $result=$db->query($sql);
     $tpl->assign("shelf",$result);
     $tpl->assign('img',$product_imgurl);
$tpl->assign('id',$id);
$tpl->assign('code',$code);
$tpl->assign('product_name',$product_name);
$tpl->assign('product_price',$product_price);
$tpl->assign('product_shelf',$product_shelf);
$tpl->assign('product_vendor',$product_vendor);
$tpl->assign('product_remark',$product_remark);
$tpl->display('./Product/update_product_page.tpl');
