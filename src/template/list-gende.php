<?php

use STZCPW\inc\database;
use STZCPW\inc\template;

$list_gende = database::db_stz_get_key('items_gende');

$header_list_gende = [
    'نام',
    'قیمت',
    'قیمت با تخفیف',
    'توضیحات',
    'تنظیمات',
];
$body_list_gende = [];
foreach ($list_gende as $item) {
    $item_id = $item->id;
    $stz_value = unserialize($item->stz_value);
    $name = $stz_value['name'];
    $price = $stz_value['price'];
    $persent = $stz_value['persent'];
    $discription = $stz_value['discription'];
    $image = $stz_value['image'];
    $icon_edit =  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>';
    $settings = "
        <a href='admin.php?page=stz-cpw-list-gende&action=edit&item=$item_id'>
        $icon_edit
        </a>
    ";
    $value = ['value' => [
        base64_encode($name),
        base64_encode($persent),
        base64_encode($price),
        base64_encode($discription),
        base64_encode($settings)
    ]];
    array_push($body_list_gende, $value);
}

?>

<div class="wrap">

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </svg>
        <h1 class="mb-3">لیست اجناس</h1>
    </div>

    <?php

    template::Table(
        'stz-cpw-list-gende-table',
        'stz-cpw-list-gende-pagination',
        $header_list_gende,
        $body_list_gende
    );

    ?>

</div>