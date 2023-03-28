<?php
    //model 1
    $age = array("peter"=>"35","ben"=>"37","joe"=>"43");

    header("content-type: application/json");
    echo json_encode($age);