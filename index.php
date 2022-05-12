<?php

include 'Db.php';
include 'Routes.php';

Routes::methodGet('/students', function() {
    $db = new Data();

    $results = $db->get();

    echo json_encode($results);
});

Routes::methodPost('/students', function(): void
{
    $db = new Data();

    $db->post();
});