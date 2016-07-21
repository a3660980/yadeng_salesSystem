<?php

include('./smarty.php');
include('./includes/mysql.php');
include "./includes/Cls_Pagination.php";
include "./includes/guid.php";

$logined = empty($_SESSION['logined']) ? false : true;



if(empty($func)) {
    $func = 'show_sales_page';
}

if (!empty($_GET['func'])) {
    echo("<script>console.log('HELLO'); </script>");
     $tpl->assign("username",$_COOKIE['user']);
      $tpl->assign("userid",$_COOKIE['userid']);
    $func = $_GET['func'];
}

if (!empty($_GET['query'])) {
    $query = $_GET['query'];
}

if (!empty($_POST['func'])) {
    echo("<script>console.log('HELLO'); </script>");
     $tpl->assign("username",$_COOKIE['user']);
      $tpl->assign("userid",$_COOKIE['userid']);
    $func = $_POST['func'];
}

if ($logined == false && $func != 'do_login') {
    $tpl->display('login.tpl');
    return;
}

echo("<script>console.log('func: ". $func."'); </script>");
switch ($func) {
     case 'show_view_product':
          include './html/Product/do_view_product.php';
          break;
     case 'show_view_product':
          include './html/Customer/do_view_customer.php';
          break;
    case 'show_view_sales':
            include './html/Sales/do_view_sales.php';
            break;
     case 'do_delete_sales':
          include './html/Sales/do_delete_sales.php';
          break;
     case 'do_update_sales':
          include './html/Sales/do_update_sales.php';
          break;
     case 'show_update_sales':
          include './html/Sales/do_show_update_sales.php';
          break;
     case 'do_delete_vendor':
          include './html/Vendor/do_delete_vendor.php';
          break;
     case 'do_update_vendor':
          include './html/Vendor/do_update_vendor.php';
          break;
     case 'show_update_vendor':
          include './html/Vendor/do_show_update_vendor.php';
          break;
     case 'do_delete_product':
          include './html/Product/do_delete_product.php';
          break;
     case'do_update_product':
           include './html/Product/do_update_product.php';
          break;
     case 'show_update_product':
          include './html/Product/do_show_update_product.php';
          break;
     case 'do_delete_customer':
          include './html/Customer/do_delete_customer.php';
          break;
     case'do_update_customer':
           include './html/Customer/do_update_customer.php';
          break;
     case'show_update_customer':
          include './html/Customer/do_show_update_customer.php';
          break;
     case'show_update_purchase':
          include './html/Purchase/do_show_update_purchase.php';
          break;
     case'show_user_page':
          $tpl->display('./User/show_user_page.tpl');
          break;
    case 'show_add_vendor':
        $tpl->display('./Vendor/add_vendor_page.tpl');
        break;
     case 'show_inventory_page':
          $tpl->display('./Depot/show_inventory_page.tpl');
          break;
        case 'do_add_sales':
       include './html/Sales/do_add_sales.php';
       break;
   case 'do_add_vendor':
       include './html/Vendor/do_add_vendor.php';
       break;
    case 'do_add_customer':
        include './html/Customer/do_add_customer.php';
        break;
     case 'add_inventory_page':
          $tpl->display('./Depot/add_inventory_page.tpl');
          break;
    case 'add_customer_page':
         $tpl->display('./Customer/add_customer_page.tpl');
         break;
     case 'add_purchase_page':
          $tpl->display('./Purchase/add_purchase_page.tpl');
          break;
    case 'add_sales_page':
         include "./html/Sales/do_show_add_sales.php";
         break;
     case 'add_user_page':
             $tpl->display('./User/add_user_page.tpl');
             break;
    case 'show_sales_page':
        $tpl->assign("username",$_COOKIE['user']);
        
        include('./html/Sales/do_index_sales.php');
        break;
     case 'show_purchase_page':
        include './html/Purchase/do_search_purchase.php';
        break;
         case 'show_depot_page':
       include './html/Depot/do_search_depot.php';
        break;
         case 'show_customer_page':
             include './html/Customer/do_search_customer.php';
        break;
         case 'show_vendor_page':
             include './html/Vendor/do_search_vendor.php';
        break;
         case 'show_product_page':
        include './html/Product/do_search_product.php';
        break;
        case 'add_product_page':
          include './html/Product/do_show_add_product.php';
        break;
        case 'do_add_product':
             include './html/Product/do_add_product.php';
             break;
        
    case 'do_login':
        include('./html/login/do_login.php');
        break;
        
    default:
    case 'login':
        echo("<script>console.log('Hello'); </script>");
        $tpl->display('login.tpl');
        break;
}