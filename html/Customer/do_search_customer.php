<?php
  


    if(!empty($query))
    {
        echo $query;
        $sql="SELECT * FROM `customer` WHERE `Customer_id` LIKE '$query' and `Birth_id` != 'data delete'";
    }else{
      $arr2=array();
 $arr3=array();
 if(isset($_POST['id']) && !(trim($_POST['id']) == '')){
     $id = $_POST['id'];
     array_push($arr2,'Birth_id');array_push($arr3,$_POST['id']);
 }
 if(isset($_POST['name']) && !(trim($_POST['name']) == '')){$sales_id = $_POST['name'];array_push($arr2,'Name');array_push($arr3,$_POST['name']);}
 if(isset($_POST['add']) && !(trim($_POST['add']) == '')){$add = $_POST['add'];array_push($arr2,'Address');array_push($arr3,$add);}
 if(isset($_POST['cell']) && !(trim($_POST['cell']) == '')){$cell = $_POST['cell'];array_push($arr2,'Cellphone');array_push($arr3,$cell);}
 
        $sql="SELECT * FROM `customer`";
    
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
    
 
    if(count($arr2)==0){
        $sql="SELECT * FROM `customer` WHERE `Birth_id` != 'data delete'  ORDER BY 2 DESC";
    }else{
           $sql .="AND `Birth_id` != 'data delete'  ORDER BY 2 DESC";
    }
        
        
        
    }
    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_customer_page");
    $db->create_page();
    $r =  $db->get();
     $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
    $tpl->display('./Customer/show_customer_page.tpl');

