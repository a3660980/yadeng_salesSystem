<?php

     $id=$_POST['id'];
     $db=Database::initDB();
     
     $sql="SELECT
`sales_order`.`Sales_Order_id`,
`sales_order_line`.`Quantity`,
`sales_order_line`.`Discount`,
`products`.`Name` AS `Product_name`,
`products`.`UnitPrice`,
`products`.`Code`,
`products`.`Product_id`,
`customer`.`Birth_id`,
`customer`.`Cellphone`,
`customer`.`Type` AS `Customer_type`,
`customer`.`Name` AS `Customer_name`,
`sales_order`.`Type` AS `Sales_type`,
`sales_order_line`.`id` AS `sales_order_line_id`, 
(`sales_order_line`.`Quantity` *  `products`.`UnitPrice` *  `sales_order_line`.`Discount`) AS  `total` 
FROM
`sales_order`
JOIN `sales_order_line`
ON `sales_order`.`Sales_Order_id` = `sales_order_line`.`Sales_OrderSales_Order_id` 
JOIN `products`
ON `products`.`Product_id` = `sales_order_line`.`ProductsProduct_id` 
JOIN `customer`
ON `customer`.`Customer_id` = `sales_order`.`customerCustomer_id`  WHERE `sales_order`.`Sales_Order_id`='$id'";

$result=$db->query($sql);



$row=$result->fetchAll();
$count=$result->rowCount();
$tpl->assign("row",$row);
$tpl->assign("id",$id);
$tpl->assign("count",$count-1);
$tpl->assign("Sales_type",$row[0]['Sales_type']);
$tpl->assign("cell",$row[0]['Cellphone']);
$tpl->assign("code",$row[0]['Code']);
$tpl->assign("customer_type",$row[0]['Customer_type']);
$tpl->assign("Customer_name",$row[0]['Customer_name']);
$tpl->assign("cell",$row[0]['Cellphone']);
$tpl->assign("Sales_type",$row[0]['Sales_type']);
$tpl->display("./Sales/update_sales_page.tpl");
