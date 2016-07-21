<?php
     $db=Database::initDB();
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
    if($num>0) {
        die("產品編碼已存在");
    }
    
    $sql ="SELECT Product_id FROM products";
    $result=$db->query($sql);
    $num=$result->rowCount();
    $num++;
    $id="Pdt_".str_pad($num,6,'0',STR_PAD_LEFT);
    
    $time=date("Y-m-d");
    
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
    
     $sql = "INSERT INTO `products`(`Product_id`, `Name`, `UnitPrice`, `Code`, `Time`, `Remark`, `VendorVendor_id`, `Depot_ShelfShelf_id` ,`imgURL`) VALUES
     (:id,:name ,:price , :code , :time , :remark,:vendor,:shelf,:imgurl)";
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
         echo '新增成功';
        return;
    }else{
        
        die("新增失敗");
    }
    