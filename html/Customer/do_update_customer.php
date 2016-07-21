<?php
    $db = Database::initDB();
    $guid=guid::getGUID();
    $id=$_POST['id'];     
    $name=$_POST['name'];
    $add=$_POST['add'];
    $sex=$_POST['sex'];
    $cell=$_POST['cell'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $birth_id="";

    
    //手機判斷重複
    $sql="SELECT Cellphone FROM `customer` WHERE Customer_id = '$id' ";
    $result=$db->query($sql);
    $cell2=$result->fetchAll();
    if($cell==$cell2[0]['Cellphone']) {
         
    }else{
    $sql="SELECT * FROM `customer` WHERE Cellphone = '$cell' ";
    $result=$db->query($sql);
    $row=$result->rowCount();
   
          if($row >0 ) {
    
             die("手機用戶已存在");
            }
    }
 
    
     $sql="SELECT Birth,Birth_id FROM `customer` WHERE Customer_id = '$id'";
      $result=$db->query($sql);
      $Be_birth=$result->fetchAll;
    if($birth != $Be_birth[0]['Birth']) {
    //生日編碼
    try {
        $sql="SELECT Birth_id FROM `customer` WHERE `Birth` LIKE '$birth%'";
        $result=$db->query($sql);
        $row=$result->rowCount();
        if($row > 0) {
            $row++;
            $birth_id=$birth.str_pad($row,4,'0',STR_PAD_LEFT);
        }else{
            $birth_id=$birth."0001";
        }
    }catch(Exception $e) {
        echo $e->getMessage();
    }
    }else{
         $birth_id=$Be_birth[0]['Birth_id'];
    }
         
         
     $sql="UPDATE `customer` SET `Birth_id`=:birth_id,`Name`=:name,`Address`=:add,`Sex`=:sex,`Cellphone`=:cell,`Birth`=:birth,`Email`=:email WHERE `Customer_id`=:id";
     $stmt=$db->prepare($sql);
     $num=$stmt->execute(array(
          ':id' => $id,
          ':birth_id' => $birth_id,
          ':name' => $name,
          ':add' => $add,
          ':sex' => $sex,
          ':cell' =>$cell,
          ':birth' => $birth,
          ':email' => $email,
          ));
     if($num > 0) {
          echo '修改成功';
     }else {
          echo '修改失敗';
     }
