<?php
$db=Database::initDB();
$id=$_POST['id'];
$sql="SELECT * FROM customer WHERE Customer_id = '$id'";
$stmt=$db->query($sql);
foreach($stmt->fetchAll() as $row) {
     $name=$row['Name'];
     $add=$row['Address'];
     $cell=$row['Cellphone'];
     $birth=$row['Birth'];
     $email=$row['Email'];
     $sex=$row['Sex'];
}

$tpl->assign('id',$id);
$tpl->assign('name',$name);
$tpl->assign('add',$add);
$tpl->assign('cell',$cell);
$tpl->assign('birth',$birth);
$tpl->assign('email',$email);
$tpl->assign('sex',$sex);
$tpl->display('./Customer/view_customer_page.tpl');
