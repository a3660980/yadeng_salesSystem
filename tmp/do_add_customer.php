<?php
    include '../includes/mysql.php';
    $db = Database::initDB();
    $name=$_POST['name'];
    $add=$_POST['add'];
    $sex=$_POST['sex'];
    $cell=$_POST['cell'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $birth_id="";
    $customer_id="";
    
    //手機判斷重複
    $sql="SELECT * FROM `customer` WHERE Cellphone = '$cell' ";
    $result=$db->query($sql);
    $row=$result->rowCount();
    if($row ==1 ) {
    
        die("手機用戶已存在");
    }
    
    
    //會員FK
    $sql="SELECT Customer_id ,Cellphone FROM `customer` ";
    $result=$db->query($sql);
    $row=$result->rowCount();
    $row++;
    $customer_id='C'.str_pad($row,4,'0',STR_PAD_LEFT);
    unset($result);
    unset($row);
    //生日編碼
    try {
        $sql="SELECT Birth_id FROM `customer` WHERE `Birth` LIKE '$birth%'";
        $result=$db->query($sql);
        $row=$result->rowCount();
        if($row > 0) {
            echo 'Hello';
            $row++;
            $birth_id=$birth.str_pad($row,4,'0',STR_PAD_LEFT);
        }else{
            $birth_id=$birth."0001";
        }
    }catch(Exception $e) {
        echo $e->getMessage();
    }
    echo "  ".$birth_id;
    $db="";
     $db = Database::initDB();
    //$birht_id=$birth."0001";
    $sql="INSERT INTO `customer` (`Customer_id`, `Birth_id`, `Name`, `Address`, `Sex`, `Cellphone`, `Birth`, `Email`) VALUES ('$customer_id', '$birth_id', '$name', '$add', '$sex', '$cell', '$birth', '$email')";
    //$sql="INSERT INTO `customer` (`Customer_id`, `Birth_id`, `Name`, `Address`, `Sex`, `Cellphone`, `Birth`, `Email`) VALUES (:Customer_id, :Birth_id, :Name, :Address, :Sex, :Cellphone, :Birth, :Email)";
    //$stmt=$db->prepare("INSERT INTO `customer` (`Customer_id`, `Birth_id`, `Name`, `Address`, `Sex`, `Cellphone`, `Birth`, `Email`) VALUES (:Customer_id, :Birth_id, :Name, :Address, :Sex, :Cellphone, :Birth, :Email)");
    $num=$db->exec($sql);
    /*$num=$stmt->execute(array(
    ":Customer_id" => $customer_id ,
    ":Birth_id" => $birth_id ,
    ":Name" => $name ,
    ":Address"=> $add ,
    ":Sex" => $sex ,
    ":Cellphone" => $cell ,
    ":Birth" => $birth ,
    ":Email"=> $email ,
    ));*/
    //$stmt->debugDumpParams();
    if($num>0) {
        echo '新增成功';
    }else {
        echo '新增失敗';
    }
    $db="";