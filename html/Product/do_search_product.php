<?php
$arr2=array();
 $arr3=array();
if(isset($_POST['code']) && !(trim($_POST['code']) == '')){$code = $_POST['code'];array_push($arr2,'Code');array_push($arr3,$code);}
if(isset($_POST['price']) && !(trim($_POST['price']) == '')){$price = $_POST['price'];array_push($arr2,'UnitPrice');array_push($arr3,$price);}
if(isset($_POST['name']) && !(trim($_POST['name']) == '')){$name = $_POST['name'];array_push($arr2,'products.Name');array_push($arr3,$name);}
if(isset($_POST['product_vendor']) && !(trim($_POST['product_vendor']) == '')){$product_vendor = $_POST['product_vendor'];array_push($arr2,'VendorVendor_id');array_push($arr3,$product_vendor);}
if(isset($_POST['product_shelf']) && !(trim($_POST['product_shelf']) == '')){$product_shelf = $_POST['product_shelf'];array_push($arr2,'Depot_ShelfShelf_id');array_push($arr3,$product_shelf);}







    $sql="SELECT
`products`.`Product_id`,
`products`.`Code`,
`products`.`Name`,
`products`.`UnitPrice`,
`depot_shelf`.`Shelf_name`,
`products`.`Remark`,
`products`.`imgURL`,
`depot_shelf`.`Shelf_id`,
`vendor`.`Vendor_id`,
`vendor`.`Name` AS `Vendor_name`
FROM
`products`
JOIN `depot_shelf`
ON `products`.`Depot_ShelfShelf_id` = `depot_shelf`.`Shelf_id` 
JOIN `vendor`
ON `vendor`.`Vendor_id` = `products`.`VendorVendor_id`
";


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
`products`.`Product_id`,
`products`.`Code`,
`products`.`Name`,
`products`.`UnitPrice`,
`products`.`imgURL`,
`depot_shelf`.`Shelf_name`,
`products`.`Remark`,
`depot_shelf`.`Shelf_id`,
`vendor`.`Vendor_id`,
`vendor`.`Name` AS `Vendor_name`
FROM
`products`
JOIN `depot_shelf`
ON `products`.`Depot_ShelfShelf_id` = `depot_shelf`.`Shelf_id` 
JOIN `vendor`
ON `vendor`.`Vendor_id` = `products`.`VendorVendor_id` WHERE `products`.`Name`!='產品下架' ORDER BY 1 ASC";
    }else{
           $sql .="AND `products`.`Name`!='產品下架'  ORDER BY 1 ASC";
    }


    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_product_page");
    $db->create_page();
    $r =  $db->get();
     $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
    $db="";
     $db=Database::initDB();
     $sql="SELECT Shelf_name,Shelf_id FROM depot_shelf";
     $result=$db->query($sql);
     $tpl->assign("shelf",$result);
     $db="";
      $db=Database::initDB();
     $sql="SELECT
`vendor`.`Name` , Vendor_id
FROM
`vendor`";
     $result=$db->query($sql);
      $db="";
     $tpl->assign("vendor",$result);
    $tpl->display('./Product/show_product_page.tpl');

