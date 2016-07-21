<?php
$db=Database::initDB();
$id=$_POST['id'];
$sql="SELECT * FROM vendor WHERE Vendor_id = '$id'";
$stmt=$db->query($sql);
foreach($stmt->fetchAll() as $row) {
     $name=$row['Name'];
     $add=$row['Address'];
     $tel=$row['Telphone'];
     $email=$row['Email'];
     $fax=$row['Fax'];
}

$tpl->assign('id',$id);
$tpl->assign('vendor_name',$name);
$tpl->assign('vendor_address',$add);
$tpl->assign('vendor_tel',$tel);
$tpl->assign('vendor_mail',$email);
$tpl->assign('vendor_fax',$fax);
$tpl->display('./Vendor/update_vendor_page.tpl');
