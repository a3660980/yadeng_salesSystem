<?php

    $name=addslashes($_POST['name']);
    $birth_id=addslashes($_POST['customer_id']);
    $cell=addslashes($_POST['cell']);
  
    $customer_type=$_POST['customer_type'];
    $product_id=$_POST['product_id'];
    $product_name=$_POST['product_name'];
    $product_qouta=$_POST['product_quantity'];
    $product_price=$_POST['product_price'];
    $product_discount=$_POST['product_discount'];
    $sales_type=$_POST['sales_type'];
    $date=date("Y-m-d");
    $user=$_COOKIE['userid'];
     
    
    $db=Database::initDB();
    $sql ="SELECT Sales_Order_id FROM sales_order";
    $result=$db->query($sql);
    $num=$result->rowCount();
    $num++;
    $id="S".str_pad($num,10,'0',STR_PAD_LEFT);
    $sql ="SELECT Sales_Order_id FROM sales_order";
    $result=$db->query($sql);
    $row=$result->fetchAll();
    while($row[0]['Sales_Order_id'] == $id) {
        $num++;
        $id="S".str_pad($num,10,'0',STR_PAD_LEFT);
    }
    
    if($customer_type=="一般客") {  
        $sql1 = "INSERT INTO `yadeng`.`sales_order` (`Sales_Order_id`, `Date`, `CustomerCustomer_id`, `usersUser_id`,`Type`) VALUES ('$id','$date', 'c94ae17128c011e68f690242ac1109b2','$user','$sales_type');";
       
    }else{
        $sql="SELECT Customer_id FROM customer WHERE Birth_id='$birth_id' or Cellphone='$cell'";
        $result=$db->query($sql);
        $count=$result->rowCount();
        if($count==0){
            die('查無會員');
        }
        $row=$result->fetchAll();
        $c_id=$row[0][0];
        
        $sql1 = "INSERT INTO `yadeng`.`sales_order` (`Sales_Order_id`, `Date`, `CustomerCustomer_id`, `usersUser_id` ,`Type`) VALUES ('$id','$date','$c_id','$user','$sales_type');";
    }
    
   
    $x=0;
    for ($i = 0; $i < count($product_id); $i++) {
        $sql="SELECT * FROM products WHERE Code ='$product_id[$i]'";
        $stmt=$db->query($sql) or die(print_r($db->errorInfo(), true));
        $num=$stmt->rowCount();
        if($num == 0) {
            die($product_id[$i].'產品編號錯誤');
        }
        $row=$stmt->fetchAll();
        $product_id[$i]=$row[0]['Product_id'];
        
    }
    
     $num=$db->exec($sql1) or die(print_r($db->errorInfo(), true));
    echo $num;
        if($num>0) {
            echo '訂單新增完成<br>';
        }
    
    for ($i = 0; $i < count($product_id); $i++) {
         $sql = "INSERT INTO `yadeng`.`sales_order_line` (`Quantity`, `Discount`, `Remark`, `Sales_OrderSales_Order_id`, `ProductsProduct_id`) VALUES ('$product_qouta[$i]', '$product_discount[$i]', null, '$id', '$product_id[$i]');";
        $num=$db->exec($sql) or die(print_r($db->errorInfo(), true)) ;
        if($num > 0) {
            $x++;
            echo '產品'.($i+1).'新增完成<br>';
        }
    }
  
        $db="";
        echo '銷貨訂單新增完成<br>';
    