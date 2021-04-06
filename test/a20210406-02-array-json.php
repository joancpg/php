
<?php

$title = '我的主頁';

$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ],


];


// header('Content-Type: application/json');
echo json_encode([
    'get'=> $_GET,
    'person'=>$persons
    ], JSON_UNESCAPED_UNICODE);
//SON_UNESCAPED_UNICODE  若沒有打這個~又沒有裝外掛~讀不到中文~
//要去下載jsonsonviews



