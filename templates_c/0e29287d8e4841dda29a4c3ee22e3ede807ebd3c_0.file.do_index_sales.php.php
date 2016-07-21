<?php
/* Smarty version 3.1.29, created on 2016-05-30 15:26:20
  from "/home/ubuntu/workspace/html/Sales/do_index_sales.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574c5b9c0cb866_69564068',
  'file_dependency' => 
  array (
    '0e29287d8e4841dda29a4c3ee22e3ede807ebd3c' => 
    array (
      0 => '/home/ubuntu/workspace/html/Sales/do_index_sales.php',
      1 => 1464621813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574c5b9c0cb866_69564068 ($_smarty_tpl) {
echo '<?php
    ';?>$db = Database::initDB();
    $sql="SELECT `sales_order`.*, `customer`.*
    FROM `sales_order`
    LEFT JOIN `customer` ON `sales_order`.`CustomerCustomer_id` = `customer`.`Customer_id`
";
    $result=$db->query($sql);
    $tpl->assign("data",$result->fetchAll());
    $tpl->display("show_sales_page.tpl");<?php }
}
