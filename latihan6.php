<?php
    //model 1
    
    
    $age["opet"] = "60";
    $age["memet"] = "70";
    $age["reri"] = "40";
    $age["mermeid"] = "100";
    $age["duyung"] = "80";
   
   
   
    header("content-type: application/json");
    echo json_encode($age);