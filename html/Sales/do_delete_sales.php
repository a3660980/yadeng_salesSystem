<?php
$id=$_POST['id'];

$db=Database::initDB();

$sql="DELETE FROM `yadeng`.`sales_order` WHERE `sales_order`.`Sales_Order_id` = '$id'";

$num = $db->exec($sql);

if($num > 0) {
     echo '刪除成功';
     
}else{
     echo '刪除失敗';
}
header("Location: ../../index.php");