<?php

$database = include_once('../libraries/connect-mysql.php');

$menus = [
    'fields' => 'name',
    'values' => [
        ['Trang chủ'],
        ['Nhật ký'],
        ['Lập trình'],
        ['Về tôi'],
        ['Liên hệ']
    ]
];
//$database->insert($menus, 'menus')->execute();
//$database->delete('menus')->execute();

$infomation = [
    'fields' => '`key`, value',
    'values' => [
        ['phone', '0941266682'],
        ['name', 'Đạt'],
        ['age', '26'],
        ['facebook', 'https://www.facebook.com/Mr.TienDat.8868']
    ]
];
$database->insert($infomation, 'infos')->execute();
