<?php

$id=$_POST['id'];

$db = Database::initDB();

$num = $db->exec("UPDATE `vendor` SET `Name`='廠商已被刪除',`Email`='廠商已被刪除',`Telphone`='廠商已被刪除',`Fax`='廠商已被刪除',`Address`='廠商已被刪除'  WHERE  Vendor_id = '$id'");

if( $num > 0 ) {
    echo "執行成功";
} else {
    echo "執行失敗";
}
header("Location: ../../index.php?func=show_vendor_page");