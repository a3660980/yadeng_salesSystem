<?php
    include '../includes/mysql.php';
    $db = Database::initDB();
    
    
    $name=$_POST['name'];
    $add=$_POST['add'];
    $sex=$_POST['sex'];
    $cell=$_POST['cell'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $birth_id=$_POST['customer_id'];
    $customer_id="";
    
    $sql="SELECT Birth_id , ";