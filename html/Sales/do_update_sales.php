<?php
     $id=($_POST['id']);
    $name=addslashes($_POST['name']);
    $birth_id=addslashes($_POST['customer_id']);
    $cell=addslashes($_POST['cell']);
  
    $customer_type=addslashes($_POST['customer_type']);
    $product_code=$_POST['product_code'];
    $product_name=$_POST['product_name'];
    $product_qouta=$_POST['product_quantity'];
    $product_price=$_POST['product_price'];
    $product_discount=$_POST['product_discount'];
    $sales_type=$_POST['sales_type'];
    $date=date("Y-m-d");
    $user=$_COOKIE['userid'];
    $sales_line_id=$_POST['sales_line_id'];
   
    
   
    $db=Database::initDB();
   
    $x=0;
    for ($i = 0; $i < count($product_code); $i++) {
         
        $sql="SELECT * FROM products WHERE `products`.`Code` ='$product_code[$i]'";
        
        $stmt=$db->query($sql) or die(print_r($db->errorInfo(), true));
        $num=$stmt->rowCount();
        
        if($num == 0) {
            die($product_code[$i].'產品編號錯誤');
        }
        $row=$stmt->fetchAll();
        $product_code[$i]=$row[0]['Product_id'];
        
    }
    
    
    
    for ($i = 0; $i < count($product_code); $i++) {
         
         $sql="SELECT `ProductsProduct_id` FROM sales_order_line WHERE id='$sales_line_id[$i]'";
         $stmt=$db->query($sql) or die(print_r($db->errorInfo(), true));
         $row=$stmt->fetchAll();
         if($product_code[$i]!=$row[0]['ProductsProduct_id']) {
            $sql="UPDATE `sales_order_line` SET `Quantity`='$product_qouta[$i]',`Discount`='$product_discount[$i]',`Sales_OrderSales_Order_id`='$id',`ProductsProduct_id`='$product_code[$i]' WHERE id='$sales_line_id[$i]'";
           $num=$db->exec($sql) or die(print_r($db->errorInfo(), true)) ;
           if($num > 0) {
                 $x++;
                 echo '產品 '.$i.' 修改完成<br>';
            }
              
         }
    }
  
        $db="";
        echo '銷貨訂單修改完成<br>';
    