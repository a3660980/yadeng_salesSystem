<?php

     $id=$_POST['id'];
    $name=$_POST['vendor_name'];
    $email=$_POST['vendor_mail'];
    $tel=$_POST['vendor_tel'];
    $fax=$_POST['vendor_fax'];
    $add=$_POST['vendor_address'];
    $db=Database::initDB();
    
    $sql="SELECT Telphone ,Name FROM vendor WHERE Name='$name'  or Telphone='$tel'";
    $result=$db->query($sql);
    $num=$result->rowCount();
    $row=$result->fetchAll();
      if($row[0]['Name']!=$name or $row[0]['Telphone']!=$tel) {
    if($num>0) {
       
          die("廠商名稱或電話已存在");
        
        }
      }
   
    $sql = "UPDATE `vendor` SET `Name`=:name,`Email`=:email,`Telphone`=:tel,`Fax`=:fax,`Address`=:add WHERE Vendor_id = :id";
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
        echo '修改成功';
        //header("Location: ../../index.php?func=show_vendor_page");
        return;
    }else{
        
        die("修改失敗");
    }