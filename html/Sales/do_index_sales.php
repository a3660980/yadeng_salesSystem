<?php
 $arr2=array();
 $arr3=array();
 if(isset($_POST['customer_type']) && !(trim($_POST['customer_type']) == '')){
     $customer_type = $_POST['customer_type'];
     array_push($arr2,'`customer`.`Type`');array_push($arr3,$_POST['customer_type']);
 }
 if(isset($_POST['sales_id']) && !(trim($_POST['sales_id']) == '')){$sales_id = $_POST['sales_id'];array_push($arr2,'Sales_Order_id');array_push($arr3,$_POST['sales_id']);}
 if(isset($_POST['date']) && !(trim($_POST['date']) == '')){$date = $_POST['date'];array_push($arr2,'Date');array_push($arr3,$date);}
 if(isset($_POST['tel']) && !(trim($_POST['tel']) == '')){$tel = $_POST['tel'];array_push($arr2,'Cellphone');array_push($arr3,$tel);}
 if(isset($_POST['birth_id']) && !(trim($_POST['birth_id']) == '')){$birth_id = $_POST['birth_id'];array_push($arr2,'Birth_id');array_push($arr3,$birth_id);}
 
    
    
    //echo $arr3[0];
    
 $sql="SELECT `sales_order`.*, `customer`.* FROM `sales_order` LEFT JOIN `customer` ON `sales_order`.`CustomerCustomer_id` = `customer`.`Customer_id`";
  
    foreach($arr3 as $i => $value) {
        if($i==0){
            $sql.=" WHERE";
        }
        if($i!=count($arr2)-1) {
            $sql.=" ".$arr2[$i]." LIKE '%$value%' AND";
           
        }else{
          
            //echo $arr3[$i];
            $sql.=" ".$arr2[$i]." LIKE '%$value%'";
        }
        
    }
    
    $sql .=" ORDER BY 2 DESC";
     
 
   
   
    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_sales_page");
    $db->create_page();
    $r =  $db->get();
    $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
   $tpl->display("./Sales/show_sales_page.tpl");

