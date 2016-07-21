<?php

     $arr2=array();
 $arr3=array();
if(isset($_POST['id']) && !(trim($_POST['id']) == '')){$id = $_POST['id'];array_push($arr2,'Vendor_id');array_push($arr3,$id);}
if(isset($_POST['tel']) && !(trim($_POST['tel']) == '')){$tel = $_POST['tel'];array_push($arr2,'Telphone');array_push($arr3,$tel);}
if(isset($_POST['name']) && !(trim($_POST['name']) == '')){$name = $_POST['name'];array_push($arr2,'Name');array_push($arr3,$name);}




    $sql="SELECT *,`vendor`.* FROM `vendor`";
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
        $sql="SELECT *,`vendor`.* FROM `vendor` WHERE `Name`!='廠商已被刪除' ORDER BY 1 ASC";
    }else{
           $sql .="AND `Name`!='廠商已被刪除'  ORDER BY 1 ASC";
    }
    $db = new Cls_Pagination("mysql","localhost","yadeng","$sql","yadeng","yadeng","UTF8","show_vendor_page");
    $db->create_page();
    $r =  $db->get();
     $tpl->assign("count",$r[0]);
    $tpl->assign("value",$r[4]);
    $tpl->assign("r",$r[3]);
    $tpl->display('./Vendor/show_vendor_page.tpl');

