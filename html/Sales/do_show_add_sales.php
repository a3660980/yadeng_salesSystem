<?php

$db=Database::initDB();

$sql="SELECT Code,Name FROM products";

$result=$db->query($sql);

$tpl->assign("code",$result);

$tpl->display('./Sales/add_sales_page.tpl');