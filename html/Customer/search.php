<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'yadeng';
    $dbPassword = 'yadeng';
    $dbName = 'yadeng';
    

    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
     mysqli_set_charset($db,"utf8");   

    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM customer WHERE Birth_id LIKE '%".$searchTerm."%' ORDER BY Birth_id ASC");
     while ($row = $query->fetch_assoc()) {
        $data[] = ["label" =>$row["Birth_id"].' '.$row["Name"],"value"=>$row["Birth_id"],"name"=>$row["Name"],"cell"=>$row["Cellphone"]];
    }
    
    //return json data
    echo json_encode($data);
    
    
    
?>