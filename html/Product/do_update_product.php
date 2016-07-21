<?php
     $db=Database::initDB();
     $id=$_POST['id'];
     $code=$_POST['product_code'];
     $name=$_POST['product_name'];
     $price=$_POST['product_price'];
     $shelf=$_POST['product_shelf'];
     $vendor=$_POST['product_vendor'];
     $remark=$_POST['product_remark'];
     $picture=$_FILES['fileUpload'];
     
     
     
     $sql="SELECT Code
FROM  `products` 
WHERE  `Code` LIKE  '$code'";
     $result=$db->query($sql);
    $num=$result->rowCount();
    $row=$result->fetchAll();
    
    if($num>0) {
        if($row[0]['Code'] != $code){
          die("產品編碼已存在");
        }
    }
    
    
     if ($picture['error'] != UPLOAD_ERR_OK) {
    echo "檔案上傳錯誤: ";
    switch ($picture['error']) {
        case UPLOAD_ERR_FORM_SIZE:
            echo "檔案超出表單限制";
            break;

        default:
            echo $picture['error'];
            break;
    }
    return;
}

$imgurl="";
$image_filepath = "./uploads/$code.jpg";
echo $image_filepath;
if(move_uploaded_file($picture['tmp_name'], $image_filepath)) {
     
     $imgurl=$image_filepath;
    echo '檔案上傳成功';
} else {
    die('檔案上傳失敗');
}
    
    
    
    
    $time=date("Y-m-d");
    
    $sql="UPDATE `products` SET `Name`=:name,`UnitPrice`=:price,`Code`=:code,`Time`=:time,`Remark`=:remark,`VendorVendor_id`=:vendor,`Depot_ShelfShelf_id`=:shelf,`imgURL`=:imgurl WHERE Product_id=:id";
    
     $stmt=$db->prepare($sql);
        $num = $stmt->execute(array(
        ":id" => $id,
        ":name" => $name,
        ":price" => $price,
        ":code" => $code,
        ":time" => $time,
        ":remark" => $remark,
        ":vendor" => $vendor,
        ":shelf" => $shelf,
        ":imgurl" => $imgurl
));
    if($num>0) {
        //header("Location: ../../index.php?func=show_product_page");
         echo '修改成功';
        return;
    }else{
        
        die("修改失敗");
    }