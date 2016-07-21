<?php

$id=$_POST['id'];

$db = Database::initDB();
$date=date("Y-m-d");
$num = $db->exec("UPDATE `products` SET `Name`='產品下架',`UnitPrice`='產品下架',`Grand_Quanity`='產品下架',`Time`='$date',`Safe_Quanity`='產品下架',`Remark`='產品下架'  WHERE  Product_id = '$id'");

if( $num > 0 ) {
    echo "執行成功";
} else {
    echo "執行失敗";
}
header("Location: ../../index.php?func=show_product_page");