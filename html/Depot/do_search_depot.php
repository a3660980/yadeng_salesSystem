<?php
 $arr2=array();
 $arr3=array();
 if(isset($_POST['code']) && !(trim($_POST['code']) == '')){$code = $_POST['code'];array_push($arr2,'`products`.`Code`');array_push($arr3,$_POST['code']);}
 if(isset($_POST['name']) && !(trim($_POST['name']) == '')){$name = $_POST['name'];array_push($arr2,'`products`.`Name`');array_push($arr3,$name);}
 if(isset($_POST['quota']) && !(trim($_POST['quota']) == '')){$cell = $_POST['quota'];array_push($arr2,'Quanta');array_push($arr3,$quota);}
  if(isset($_POST['price']) && !(trim($_POST['price']) == '')){$price = $_POST['price'];array_push($arr2,'`products`.`UnitPrice`');array_push($arr3,$_POST['price']);}

    $sql="SELECT
`products`.`Product_id`,
`products`.`Code`,
`products`.`Name`,
IFNULL((sum(IFNULL(purchase_order_line.Quantity,0)) - sum(IFNULL(sales_order_line.Quantity,0))),0) AS `Quanta`,
`products`.`UnitPrice`,
`products`.`Remark`,
`depot_shelf`.`Shelf_name`
FROM
`purchase_order_line`
right JOIN `products`
ON `purchase_order_line`.`ProductsProduct_id` = `products`.`Product_id` 
LEFT JOIN `sales_order_line`
ON `products`.`Product_id` = `sales_order_line`.`ProductsProduct_id` 
JOIN `depot_shelf`
ON `products`.`Depot_ShelfShelf_id` = `depot_shelf`.`Shelf_id`";

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
IFNULL((sum(IFNULL(purchase_order_line.Quantity,0)) - sum(IFNULL(sales_order_line.Quantity,0))),0) AS `Quanta`,
`products`.`UnitPrice`,
`products`.`Remark`,
`depot_shelf`.`Shelf_name`
FROM
`purchase_order_line`
right JOIN `products`
ON `purchase_order_line`.`ProductsProduct_id` = `products`.`Product_id` 
LEFT JOIN `sales_order_line`
ON `products`.`Product_id` = `sales_order_line`.`ProductsProduct_id` 
JOIN `depot_shelf`
ON `products`.`Depot_ShelfShelf_id` = `depot_shelf`.`Shelf_id`  WHERE `products`.`Name`!='產品下架'
GROUP BY products.Product_id   ORDER BY 1
";
    }



    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_depot_page");
    $db->create_page();
    $r =  $db->get();
     $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
    $tpl->display('./Depot/show_depot_page.tpl');

