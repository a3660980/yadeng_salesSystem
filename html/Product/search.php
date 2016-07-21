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
    $query = $db->query("SELECT * FROM products WHERE Code LIKE '%".$searchTerm."%' ORDER BY Code ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = ["label" =>$row['Code']." ".$row['Name'],"value"=>$row['Code'],"name"=>$row['Name'],"quota"=>1,"price"=>$row['UnitPrice']];
    }
    
    //return json data
    echo json_encode($data);
?>