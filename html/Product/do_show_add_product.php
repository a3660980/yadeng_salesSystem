<?php
     $db=Database::initDB();
     $sql="SELECT
`vendor`.`Name` , Vendor_id
FROM
`vendor`";
     $result=$db->query($sql);
     $tpl->assign("vendor",$result);
     
     $sql="SELECT Shelf_name,Shelf_id FROM depot_shelf";
     $result=$db->query($sql);
     $tpl->assign("shelf",$result);
     
     $tpl->display("./Product/add_product_page.tpl");