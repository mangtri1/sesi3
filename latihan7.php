<?php
    $mhs = array(
        array("ardika","2233445512","denpasar"),
        array("adit","2233446512","gianyar"),
        array("arik","2233445202","seminyak"),
        array("ary","2233445550","singaraja"),
    );

    header("content-type: application/json");
    echo json_encode($mhs);