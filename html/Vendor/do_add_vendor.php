<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $fax=$_POST['fax'];
    $add=$_POST['add'];
    $db=Database::initDB();
    
    $sql="SELECT Telphone FROM vendor WHERE Name='$name'  or Telphone='$tel'";
    $result=$db->query($sql);
    $num=$result->rowCount();
    if($num>0) {
        die("廠商已存在");
    }
    
    $sql ="SELECT Vendor_id FROM vendor";
    $result=$db->query($sql);
    $num=$result->rowCount();
    $num++;
    $id="ven_".str_pad($num,3,'0',STR_PAD_LEFT);
    $sql = "INSERT INTO `yadeng`.`vendor` (`Vendor_id`, `Name`, `Email`, `Telphone`, `Fax`, `Address`)
    VALUES (:id,:name ,:email , :tel , :fax , :add)";
    $stmt=$db->prepare($sql);
        $num = $stmt->execute(array(
        ":id" => $id,
        ":name" => $name,
        ":email" => $email,
        ":tel" => $tel,
        ":fax" => $fax,
        ":add" => $add
));
    if($num>0) {
        echo '新增成功';
        //header("Location: ../../index.php?func=show_vendor_page");
        return;
    }else{
        
        die("新增失敗");
    }