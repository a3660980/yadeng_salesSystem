<?php
include '../../includes/mysql.php';

$username = $_POST['register_user'];
$password =$_POST['register_password'];
$check_passwd = $_POST['check_password'];
$realname=$_POST['register_realname'];
$email=$_POST['register_email'];
$cell=$_POST['register_cellphone'];

$db = Database::initDB();

$sql="SELECT Username FROM users WHERE Username LIKE '$username'";

$result=$db->query($sql);
$num=$result->rowCount();
if($num >0) {
     die("帳號已被註冊");
}

if($password != $check_passwd) {
     die("密碼與確認密碼不相同，請再次輸入！");
     //header("Location: ../../register.php");
}

$sql ="SELECT * FROM users";
    $result=$db->query($sql);
    $num=$result->rowCount();
    $num++;
    $id="User".str_pad($num,4,'0',STR_PAD_LEFT);


$sql="INSERT INTO `users`(`User_id`, `Username`,  `Realname`, `Email`, `Cellphone`, `Position`, `Passhash`) VALUES (:id,:username,:realname,:email,:cell,:position,SHA2('$password',224))";
$stmt=$db->prepare($sql);
        $num = $stmt->execute(array(
        ":id" => $id,
        ":username" => $username,
        ":realname" => $realname,
        ":email" => $email,
        ":cell" => $cell,
        ":position" => "員工",
     
));
    if($num>0) {
          
         echo '註冊成功';
         return;
    }else{
        
        die("新增失敗");
    }