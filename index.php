<?php

include 'Db.php';
include 'Routes.php';

Routes::methodGet('/students', function() {
    $db = new Data();

    $response = $db->get();

    echo json_encode($response);
});

Routes::methodPost('/students', function(): void
{
    $db = new Data();

    $data = json_decode(file_get_contents('php://input'), true); 

    $db->post($data);

    echo json_encode($data);
});