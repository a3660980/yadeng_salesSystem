<?php

$username = $_POST['user'];
$password = $_POST['password'];
$db = DataBase::initDB();


$sql="SELECT SHA2('$password',224) AS `password`;";
$result=$db->query($sql);
$stmt=$result->fetchAll();
$sha2=$stmt[0]['password'];
$result = $db->query("SELECT User_id,realname FROM users WHERE Username='$username' && Passhash='$sha2'");

$ro=$result->fetchAll();
$row = $result->rowCount();
$db=null;

echo("<script>console.log('row: " . $ro[0]['realname']. "'); </script>");

if ($row == 1) {
    setcookie('user',$ro[0]['realname']);
    setcookie('userid',$ro[0]['User_id']);
   
    echo("<script>console.log('登入成功'); </script>");
     $_SESSION['logined'] = true;
    echo("<script>console.log('session: " . $_SESSION['logined'] . "'); </script>");
} else {
    echo("<script>console.log('登入失敗'); </script>");
    $_SESSION['logined'] = null;
}

header("Location: ../../index.php");
