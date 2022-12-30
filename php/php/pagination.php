<?php

    $database = new Database();
    
    $result = $database->fetchUsers();
    $results_per_page = 1;
    $number_of_result = sizeof($result); 
    $number_of_page = ceil ($number_of_result / $results_per_page); 
    
    
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 
    

    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;   
        
    // $resultArray = $database->fetchUserArray($page_first_result,$results_per_page);
    // $elements = $resultArray[0];

    // $userId = $elements['userId'];
    
    
    // $checkingSql = "SELECT * FROM users";

    // $run = $database->selectQuery($checkingSql);
   
?>