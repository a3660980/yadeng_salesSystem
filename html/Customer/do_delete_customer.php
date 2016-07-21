<?php

$id=$_POST['id'];

$db = Database::initDB();

$num = $db->exec("UPDATE `customer` SET `Birth_id`='data delete',`Name`='data delete',`Address`='data delete',`Sex`='data delete',`Cellphone`='data delete',`Birth`='data delete',`Email`='data delete',`Type`='data delete' WHERE  Customer_id = '$id'");

if( $num > 0 ) {
    echo "執行成功";
} else {
    echo "執行失敗";
}
header("Location: ../../index.php?func=show_customer_page");