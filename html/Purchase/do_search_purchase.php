<?php

$arr2=array();
 $arr3=array();
 if(isset($_POST['id']) && !(trim($_POST['id']) == '')){$id = $_POST['id'];array_push($arr2,'`purchase_order`.`Purchase_Order_id`');array_push($arr3,$_POST['id']);}
 if(isset($_POST['tel']) && !(trim($_POST['tel']) == '')){$tel = $_POST['tel'];array_push($arr2,'Telphone');array_push($arr3,$tel);}
 if(isset($_POST['vendor_name']) && !(trim($_POST['vendor_name']) == '')){$vendor_name = $_POST['vendor_name'];array_push($arr2,'`vendor`.`Name`');array_push($arr3,$vendor_name);}
  if(isset($_POST['vendor_id']) && !(trim($_POST['vendor_id']) == '')){$vendor_id = $_POST['vendor_id'];array_push($arr2,'`vendor`.`Vendor_id`');array_push($arr3,$_POST['vendor_id']);}
  if(isset($_POST['date']) && !(trim($_POST['date']) == '')){$date = $_POST['date'];array_push($arr2,'`purchase_order`.`Date`');array_push($arr3,$_POST['date']);}



    $sql="SELECT
`purchase_order`.`Purchase_Order_id`,
`purchase_order`.`Date`,
`vendor`.`Vendor_id`,
`vendor`.`Name`,
`vendor`.`Telphone`
FROM
`purchase_order`
JOIN `purchase_order_line`
ON `purchase_order`.`Purchase_Order_id` = `purchase_order_line`.`Purchase_OrderPurchase_Order_id` 
JOIN `products`
ON `purchase_order_line`.`ProductsProduct_id` = `products`.`Product_id` 
JOIN `vendor`
ON `products`.`VendorVendor_id` = `vendor`.`Vendor_id` ";

foreach($arr3 as $i => $value) {
        if($i==0){
            $sql.=" WHERE";
        }
        if($i!=count($arr2)-1) {
            $sql.=" ".$arr2[$i]." LIKE '%$value%' AND";
           
        }else{
          
            //echo $arr3[$i];
            $sql.=" ".$arr2[$i]." LIKE '%$value%'";
        }
        
    }
    
 
    if(count($arr2)==0){
        $sql="SELECT
`purchase_order`.`Purchase_Order_id`,
`purchase_order`.`Date`,
`vendor`.`Vendor_id`,
`vendor`.`Name`,
`vendor`.`Telphone`
FROM
`purchase_order`
JOIN `purchase_order_line`
ON `purchase_order`.`Purchase_Order_id` = `purchase_order_line`.`Purchase_OrderPurchase_Order_id` 
JOIN `products`
ON `purchase_order_line`.`ProductsProduct_id` = `products`.`Product_id` 
JOIN `vendor`
ON `products`.`VendorVendor_id` = `vendor`.`Vendor_id` WHERE `vendor`.`Name`!='廠商已被刪除'   ORDER BY Date Desc";
    }else{
           $sql .="WHERE `vendor`.`Name`!='廠商已被刪除' ORDER BY Date Desc";
    }

    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_purchase_page");
    $db->create_page();
    $r =  $db->get();
    $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
    $tpl->display('./Purchase/show_purchase_page.tpl');

