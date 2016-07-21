<?php  
include '../includes/mysql.php';
$q = $_GET["q"];  
if (!$c_id) return;  
$db=Database::initDB();

$sql="SELECT Birth_id , Name FROM customer";

$stmt=$db->query($sql);

foreach ($stmt->fetchAll() as $value) {  
  if (strpos($value['Birth_id'], $q) !== false) {  
    echo $value['Birth_id']."\n";  
  }  
}  